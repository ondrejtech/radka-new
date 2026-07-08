# techdomov-ecommerce

## Tech Stack
- Laravel 12, PHP 8.4
- Livewire 4
- MySQL 8
- CSS/JS assety ze statických souborů v /public (žádný Tailwind)

## Komunikace
- Komunikuj česky
- Kód, komentáře, názvy proměnných, migrations — vždy anglicky
- Před psaním kódu polož max 2-3 upřesňující otázky
- Nezačínej psát kód bez potvrzení plánu

## Screenshoty
- Uživatel ukládá screenshoty do `~/Pictures/Screenshots/` (`/home/marty/Pictures/Screenshots/`)
- Název souboru obsahuje datum a čas: `Screenshot From YYYY-MM-DD HH-MM-SS.png`
- Když uživatel řekne „poslední screenshot", vezmi nejnovější podle času úpravy (`ls -t`)

## Architektura
- Controllers jsou tenké — logika patří do Service tříd nebo Actions
- app/Actions/ — jednorázové akce (CreateOrder, ProcessPayment)
- app/Services/ — znovupoužitelná business logika
- app/Http/Requests/ — vždy Form Request pro validaci
- Nikdy inline SQL — vždy Eloquent nebo Query Builder
- Soft deletes na modelech: Product, Order, User, Category

## HTML Šablony
- Projekt je vizuálně identický s eD system webem (edshopb2b.edsystem.cz)
- NIKDY nepřepisovat CSS třídy do Tailwindu
- NIKDY nevymýšlet CSS třídy — použít přesně třídy z dodané HTML šablony
- HTML struktura musí být zachována přesně — žádné zjednodušování markupu

## Struktura assetů v /public
public/
├── assets/
│   └── bundles/
│       ├── css/
│       └── js/
├── Images/
│   ├── loga/
│   ├── ed_logo.png
│   └── logo_ci.svg
├── Styles/
│   ├── fonts/Gotham/
│   └── icons/
└── ArchiveMarketingCZ/

- Vždy generuj cesty k assetům přes Laravel asset() helper
- Příklad: asset('assets/bundles/css/main.css')
- Příklad: asset('Styles/fonts/Gotham/kit.css')
- Příklad: asset('Images/logo_ci.svg')
- IMGCACHE se NEPOUŽÍVÁ — obrázky produktů se načítají z databáze

## Blade layouty
- resources/views/layouts/app.blade.php — hlavní layout
- resources/views/layouts/guest.blade.php — pro nepřihlášené

## Livewire komponenty (dynamické části)
- livewire/search-form — vyhledávání v headeru
- livewire/main-navigation — hlavní navigace
- livewire/cart-widget — košík v headeru
- livewire/product-list — výpis produktů s filtrováním

## Dev nástroje
### kitloong/laravel-migrations-generator
- Generuje migration soubory z existující databáze
- Použití: php artisan migrate:generate
- Využití: pokud importujeme existující DB schéma místo psaní migrací ručně

### reliese/laravel
- Generuje Eloquent modely z DB schématu (včetně relationships, fillable, casts)
- Konfigurace v config/models.php
- Použití: php artisan code:models
- NIKDY neupravovat vygenerované modely ručně — vždy přes config nebo regenerací

## Databáze
- DB engine: MySQL 8
- Vždy piš migration soubory
- Nikdy neupravuj schéma ručně

## Produkce a deploy
- Produkční server: SSH host `multishoping.eu` (alias v `~/.ssh/config`, IP 34.66.99.210, user marty)
- Pracovní adresář na produkci: `/var/www/multishoping.eu/category-52`
- Aktuálně nasazená větev: `category-52`, remote `origin` = `git@gitlab.com:petr9931705/eshop.git`
- Web se servíruje **nativně** (Apache + PHP-FPM 8.4) přímo z pracovního adresáře — **na serveru NEBĚŽÍ žádný Docker** (i když `docker-compose.yml` v repu existuje, na produkci se nepoužívá)
- **Deploy = `git pull origin category-52`** v pracovním adresáři + `php artisan optimize:clear`
- NIKDY nespouštět `deploy.sh` na produkci — obsahuje `docker compose down -v`, což by smazalo DB volume (`db_data`)

## PayPal integrace

### Balíček: paypal/paypal-server-sdk
- Oficiální PayPal Server SDK (generované APIMATIC SDK), namespace `PaypalServerSdkLib`
- GitHub: https://github.com/paypal/PayPal-PHP-Server-SDK
- Není to Laravel package — žádný service provider ani vendor:publish, config se nečte automaticky
- Controllery: Orders (v2), Payments (v2), Vault (v3, jen US), Transaction Search (v1), Subscriptions (v1)
- **Neobsahuje** verifikaci webhooků ani fluent subscription helpery — řešíme ručně

### Instalace
```bash
composer require paypal/paypal-server-sdk
```

### .env proměnné
```
PAYPAL_MODE=sandbox            # sandbox | live
PAYPAL_SANDBOX_CLIENT_ID=
PAYPAL_SANDBOX_CLIENT_SECRET=
PAYPAL_LIVE_CLIENT_ID=
PAYPAL_LIVE_CLIENT_SECRET=
PAYPAL_CURRENCY=CZK
PAYPAL_WEBHOOK_ID=
```
Konfigurace v `config/paypal.php`.

### Inicializace klienta
```php
use PaypalServerSdkLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use PaypalServerSdkLib\Environment;
use PaypalServerSdkLib\PaypalServerSdkClientBuilder;

$client = PaypalServerSdkClientBuilder::init()
    ->clientCredentialsAuthCredentials(
        ClientCredentialsAuthCredentialsBuilder::init($clientId, $clientSecret)
    )
    ->environment(Environment::SANDBOX) // nebo Environment::PRODUCTION
    ->build();

$orders = $client->getOrdersController();
```

### Objednávky (Orders)
- `body` lze předat jako PHP pole — SDK serializuje přes `json_encode`
- Metody vrací `ApiResponse`; raw JSON přes `getBody()`, typovaný model přes `getResult()`
- 4xx chyby vyhazují `PaypalServerSdkLib\Exceptions\ErrorException` (`getName()`, `getDetails()`, `getLinks()`)
```php
$response = $orders->createOrder([
    'body' => [
        'intent' => 'CAPTURE',
        'purchase_units' => [
            ['amount' => ['currency_code' => 'CZK', 'value' => '100.00']],
        ],
    ],
    'prefer' => 'return=representation',
]);
$body = json_decode($response->getBody(), true); // ['id' => ..., 'links' => [...], ...]

$orders->captureOrder(['id' => $orderId, 'prefer' => 'return=representation']);
```

### Webhooks (ruční verifikace)
SDK helper nemá → voláme REST `/v1/notifications/verify-webhook-signature` s OAuth tokenem (`client_credentials`). Viz `PayPalService::verifyWebhook()`.

### Refundy
Přes `PaymentsController` (`$client->getPaymentsController()`), metoda `refundCapturedPayment(['capture_id' => ..., 'body' => [...]])`.

### Platební toky v projektu
- **Redirect (PayPal Checkout):** `createOrder()` s `application_context` → approval URL → návrat na `success` → `captureOrder()`
- **Card-fields (platba kartou bez přihlášení / ACDC):** frontend PayPal JS SDK `components=card-fields`; server jen `createCardOrder` (vrací order ID) a `captureCard`. Vyžaduje schválení ACDC na účtu + podporu měny (mimo kód).

### Pravidla použití
- Veškerou logiku PayPal API držet v `app/Services/PayPalService.php`
- Webhook endpoint vyjmout z CSRF ochrany v `bootstrap/app.php`
- Nikdy nelogovat `client_secret` ani access tokeny
- Public client ID pro JS SDK brát přes `PayPalService::publicClientId()`

## Google Ads MCP server

- Server `google-ads-mcp` v `.mcp.json` = **Rust `mcp-google-ads` v0.6.0** (crate, nainstalováno přes `cargo install`, binárka `/home/marty/.cargo/bin/mcp-google-ads`). Nahradilo dřívější Python server (googleads/google-ads-mcp přes pipx + gcloud ADC)
- Rust toolchain nainstalován přes rustup; `cargo` NENÍ v PATH (instalováno s `--no-modify-path`) — MCP volá binárku absolutní cestou. Pro ruční `cargo`: `. "$HOME/.cargo/env"`
- Spravovaný účet: **727-432-7807** (Gastro ACS s.r.o.), přímý účet bez MCC → `login_customer_id` netřeba
- **Autentizace NEjde přes gcloud ADC.** Server čte `credentials.json` ve formátu `authorized_user` (client_id + client_secret + refresh_token) z cesty v env `GOOGLE_ADS_CREDENTIALS_PATH` (`/home/marty/.mcp-google-ads/credentials.json`, chmod 600)
- Env v `.mcp.json`: `GOOGLE_ADS_DEVELOPER_TOKEN`, `GOOGLE_ADS_CUSTOMER_ID=727-432-7807` (pomlčky server strippuje sám), `GOOGLE_ADS_CREDENTIALS_PATH`
- **Bezpečnostní prvky (výchozí hodnoty):** `GOOGLE_ADS_REQUIRE_DRY_RUN=true`, `GOOGLE_ADS_MAX_DAILY_BUDGET=50`, `GOOGLE_ADS_MAX_BID_INCREASE_PCT=100`, `GOOGLE_ADS_READ_ONLY=false`, `GOOGLE_ADS_BLOCKED_OPS` (prázdné) — zápisové operace vyžadují dry-run + `confirm_and_apply`. Volitelně přenastavit přes env
- **Dokumentace serveru je v NotebookLM notebooku „MCP server pro Google Ads s bezpečnostními prvky"** — při práci s tímhle serverem ji využívat (skill `/notebooklm`)
- **Změna `.mcp.json` se projeví až po PLNÉM restartu Claude Code (exit) — `/mcp` reconnect nestačí** (drží env z okamžiku spuštění)
- Pozn.: Laravel `app/Services/GoogleAdsService.php` (google-ads-php SDK) je samostatná cesta, nesouvisí s MCP serverem

## Google Ads monitoring kampaně

- Denní monitoring PMax kampaně `multishoping-cz-sk` (24006465965) běží mimo Claude Code
- **Skript:** `/home/marty/google-ads-monitor/monitor.py` — Python, řídí lokální binárku `mcp-google-ads` přes stdio JSON-RPC (`GOOGLE_ADS_READ_ONLY=true`). Čte primary/serving status kampaně, ad_strength asset group (6727941248) a metriky za včera + 7 dní
- **Cron:** denně **08:30** v `crontab` uživatele marty (`30 8 * * * /usr/bin/python3 /home/marty/google-ads-monitor/monitor.py >> .../daily-report.log 2>&1`)
- **Výstupy:** `google-ads-monitor/multishoping-cz-sk.log` (CSV řádek/den = trend) + `daily-report.log` (čitelný snapshot)
- **Alert:** skript končí non-zero (→ cron mail) při `serving_status≠SERVING` nebo neočekávaném `primary_status`; „0 impresí" jen loguje. E-mail alert zatím není nastaven
- Pozn.: Rust MCP `run_gaql` má bug u DATE/DATE_TIME a některých bool/enum polí (vrací 400 / prázdné sloupce) — používat `format=json` a číst atributy jednotlivě

## Co NIKDY nedělat
- Nikdy nevymýšlej hodnoty (API klíče, URL, názvy tabulek)
- Nikdy neměň .env soubor
- Nikdy nespouštěj: migrate:fresh, db:wipe bez potvrzení
- Nikdy nepoužívej IMGCACHE — obrázky jsou v databázi

===

<laravel-boost-guidelines>
=== foundation rules ===

# Laravel Boost Guidelines

The Laravel Boost guidelines are specifically curated by Laravel maintainers for this application. These guidelines should be followed closely to ensure the best experience when building Laravel applications.

## Foundational Context

This application is a Laravel application and its main Laravel ecosystems package & versions are below. You are an expert with them all. Ensure you abide by these specific packages & versions.

- php - 8.4
- laravel/framework (LARAVEL) - v13
- laravel/prompts (PROMPTS) - v0
- livewire/livewire (LIVEWIRE) - v4
- laravel/boost (BOOST) - v2
- laravel/mcp (MCP) - v0
- laravel/pail (PAIL) - v1
- laravel/pint (PINT) - v1
- pestphp/pest (PEST) - v4
- phpunit/phpunit (PHPUNIT) - v12

## Skills Activation

This project has domain-specific skills available. You MUST activate the relevant skill whenever you work in that domain—don't wait until you're stuck.

- `livewire-development` — Use for any task or question involving Livewire. Activate if user mentions Livewire, wire: directives, or Livewire-specific concepts like wire:model, wire:click, wire:sort, or islands, invoke this skill. Covers building new components, debugging reactivity issues, real-time form validation, drag-and-drop, loading states, migrating from Livewire 3 to 4, converting component formats (SFC/MFC/class-based), and performance optimization. Do not use for non-Livewire reactive UI (React, Vue, Alpine-only, Inertia.js) or standard Laravel forms without Livewire.
- `pest-testing` — Use this skill for Pest PHP testing in Laravel projects only. Trigger whenever any test is being written, edited, fixed, or refactored — including fixing tests that broke after a code change, adding assertions, converting PHPUnit to Pest, adding datasets, and TDD workflows. Always activate when the user asks how to write something in Pest, mentions test files or directories (tests/Feature, tests/Unit, tests/Browser), or needs browser testing, smoke testing multiple pages for JS errors, or architecture tests. Covers: it()/expect() syntax, datasets, mocking, browser testing (visit/click/fill), smoke testing, arch(), Livewire component tests, RefreshDatabase, and all Pest 4 features. Do not use for factories, seeders, migrations, controllers, models, or non-test PHP code.

## Conventions

- You must follow all existing code conventions used in this application. When creating or editing a file, check sibling files for the correct structure, approach, and naming.
- Use descriptive names for variables and methods. For example, `isRegisteredForDiscounts`, not `discount()`.
- Check for existing components to reuse before writing a new one.

## Verification Scripts

- Do not create verification scripts or tinker when tests cover that functionality and prove they work. Unit and feature tests are more important.

## Application Structure & Architecture

- Stick to existing directory structure; don't create new base folders without approval.
- Do not change the application's dependencies without approval.

## Frontend Bundling

- If the user doesn't see a frontend change reflected in the UI, it could mean they need to run `npm run build`, `npm run dev`, or `composer run dev`. Ask them.

## Documentation Files

- You must only create documentation files if explicitly requested by the user.

## Replies

- Be concise in your explanations - focus on what's important rather than explaining obvious details.

=== boost rules ===

# Laravel Boost

- Laravel Boost is an MCP server that comes with powerful tools designed specifically for this application. Use them.

## Artisan Commands

- Run Artisan commands directly via the command line (e.g., `php artisan route:list`, `php artisan tinker --execute "..."`).
- Use `php artisan list` to discover available commands and `php artisan [command] --help` to check parameters.

## URLs

- Whenever you share a project URL with the user, you should use the `get-absolute-url` tool to ensure you're using the correct scheme, domain/IP, and port.

## Debugging

- Use the `database-query` tool when you only need to read from the database.
- Use the `database-schema` tool to inspect table structure before writing migrations or models.
- To execute PHP code for debugging, run `php artisan tinker --execute "your code here"` directly.
- To read configuration values, read the config files directly or run `php artisan config:show [key]`.
- To inspect routes, run `php artisan route:list` directly.
- To check environment variables, read the `.env` file directly.

## Reading Browser Logs With the `browser-logs` Tool

- You can read browser logs, errors, and exceptions using the `browser-logs` tool from Boost.
- Only recent browser logs will be useful - ignore old logs.

## Searching Documentation (Critically Important)

- Boost comes with a powerful `search-docs` tool you should use before trying other approaches when working with Laravel or Laravel ecosystem packages. This tool automatically passes a list of installed packages and their versions to the remote Boost API, so it returns only version-specific documentation for the user's circumstance. You should pass an array of packages to filter on if you know you need docs for particular packages.
- Search the documentation before making code changes to ensure we are taking the correct approach.
- Use multiple, broad, simple, topic-based queries at once. For example: `['rate limiting', 'routing rate limiting', 'routing']`. The most relevant results will be returned first.
- Do not add package names to queries; package information is already shared. For example, use `test resource table`, not `filament 4 test resource table`.

### Available Search Syntax

1. Simple Word Searches with auto-stemming - query=authentication - finds 'authenticate' and 'auth'.
2. Multiple Words (AND Logic) - query=rate limit - finds knowledge containing both "rate" AND "limit".
3. Quoted Phrases (Exact Position) - query="infinite scroll" - words must be adjacent and in that order.
4. Mixed Queries - query=middleware "rate limit" - "middleware" AND exact phrase "rate limit".
5. Multiple Queries - queries=["authentication", "middleware"] - ANY of these terms.

=== php rules ===

# PHP

- Always use curly braces for control structures, even for single-line bodies.

## Constructors

- Use PHP 8 constructor property promotion in `__construct()`.
    - `public function __construct(public GitHub $github) { }`
- Do not allow empty `__construct()` methods with zero parameters unless the constructor is private.

## Type Declarations

- Always use explicit return type declarations for methods and functions.
- Use appropriate PHP type hints for method parameters.

<!-- Explicit Return Types and Method Params -->
```php
protected function isAccessible(User $user, ?string $path = null): bool
{
    ...
}
```

## Enums

- Typically, keys in an Enum should be TitleCase. For example: `FavoritePerson`, `BestLake`, `Monthly`.

## Comments

- Prefer PHPDoc blocks over inline comments. Never use comments within the code itself unless the logic is exceptionally complex.

## PHPDoc Blocks

- Add useful array shape type definitions when appropriate.

=== laravel/core rules ===

# Do Things the Laravel Way

- Use `php artisan make:` commands to create new files (i.e. migrations, controllers, models, etc.). You can list available Artisan commands using `php artisan list` and check their parameters with `php artisan [command] --help`.
- If you're creating a generic PHP class, use `php artisan make:class`.
- Pass `--no-interaction` to all Artisan commands to ensure they work without user input. You should also pass the correct `--options` to ensure correct behavior.

## Database

- Always use proper Eloquent relationship methods with return type hints. Prefer relationship methods over raw queries or manual joins.
- Use Eloquent models and relationships before suggesting raw database queries.
- Avoid `DB::`; prefer `Model::query()`. Generate code that leverages Laravel's ORM capabilities rather than bypassing them.
- Generate code that prevents N+1 query problems by using eager loading.
- Use Laravel's query builder for very complex database operations.

### Model Creation

- When creating new models, create useful factories and seeders for them too. Ask the user if they need any other things, using `php artisan make:model --help` to check the available options.

### APIs & Eloquent Resources

- For APIs, default to using Eloquent API Resources and API versioning unless existing API routes do not, then you should follow existing application convention.

## Controllers & Validation

- Always create Form Request classes for validation rather than inline validation in controllers. Include both validation rules and custom error messages.
- Check sibling Form Requests to see if the application uses array or string based validation rules.

## Authentication & Authorization

- Use Laravel's built-in authentication and authorization features (gates, policies, Sanctum, etc.).

## URL Generation

- When generating links to other pages, prefer named routes and the `route()` function.

## Queues

- Use queued jobs for time-consuming operations with the `ShouldQueue` interface.

## Configuration

- Use environment variables only in configuration files - never use the `env()` function directly outside of config files. Always use `config('app.name')`, not `env('APP_NAME')`.

## Testing

- When creating models for tests, use the factories for the models. Check if the factory has custom states that can be used before manually setting up the model.
- Faker: Use methods such as `$this->faker->word()` or `fake()->randomDigit()`. Follow existing conventions whether to use `$this->faker` or `fake()`.
- When creating tests, make use of `php artisan make:test [options] {name}` to create a feature test, and pass `--unit` to create a unit test. Most tests should be feature tests.

## Vite Error

- If you receive an "Illuminate\Foundation\ViteException: Unable to locate file in Vite manifest" error, you can run `npm run build` or ask the user to run `npm run dev` or `composer run dev`.

=== livewire/core rules ===

# Livewire

- Livewire allow to build dynamic, reactive interfaces in PHP without writing JavaScript.
- You can use Alpine.js for client-side interactions instead of JavaScript frameworks.
- Keep state server-side so the UI reflects it. Validate and authorize in actions as you would in HTTP requests.

=== pint/core rules ===

# Laravel Pint Code Formatter

- If you have modified any PHP files, you must run `vendor/bin/pint --dirty --format agent` before finalizing changes to ensure your code matches the project's expected style.
- Do not run `vendor/bin/pint --test --format agent`, simply run `vendor/bin/pint --format agent` to fix any formatting issues.

=== pest/core rules ===

## Pest

- This project uses Pest for testing. Create tests: `php artisan make:test --pest {name}`.
- Run tests: `php artisan test --compact` or filter: `php artisan test --compact --filter=testName`.
- Do NOT delete tests without approval.

</laravel-boost-guidelines>
