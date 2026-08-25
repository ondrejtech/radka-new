

<footer>
    <div class="footer-grid">

      <div class="f-brand">
        <div class="logo-mark">RS<span>BEAUTY</span></div>
        <p>Profesionální kosmetika pro vlasovou, nehtovou a tělovou péči. Pomáháme kadeřnicím a kosmetičkám dosáhnout dokonalého výsledku.</p>
        <div class="socials">
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>

      <div>
        <h4>Informace</h4>
        <ul>
          <li><a href="{{ route('pages.documents.term-service') }}">Obchodní podmínky</a></li>
          <li><a href="{{ route('pages.documents.claim-policy') }}">Reklamační řád</a></li>
          <li><a href="{{ route('pages.processing-personal-info') }}">Ochrana osobních údajů</a></li>
          <li><a href="#">Doprava a platba</a></li>
        </ul>
      </div>

      <div>
        <h4>Zákaznický servis</h4>
        <ul>
          <li><a href="{{ route('pages.contact') }}">Kontakt</a></li>
          <li><a href="#">Časté dotazy</a></li>
          <li><a href="{{ route('pages.documents.orderlist') }}">Sledování objednávky</a></li>
          <li><a href="{{ route('pages.documents.claim-product') }}">Vrácení zboží</a></li>
        </ul>
      </div>

      <div class="f-news">
        <h4>Zůstaňme v kontaktu</h4>
        <p>Přihlaste se k odběru novinek a slev na profesionální kosmetiku.</p>
        <form class="news-form" onsubmit="return false;">
          <input type="email" placeholder="Váš e-mail" required>
          <button type="submit" aria-label="Odeslat"><i class="fa-solid fa-paper-plane"></i></button>
        </form>
        <ul class="f-contact" style="margin-top:20px;">
          <li><i class="fa-solid fa-phone"></i> +420 000 000 000</li>
          <li><i class="fa-solid fa-envelope"></i> info@rsbeauty.cz</li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <span>© 2026 RS Beauty. Všechna práva vyhrazena.</span>
      <div class="payment-icons">
        <i class="fa-brands fa-cc-visa"></i>
        <i class="fa-brands fa-cc-mastercard"></i>
        <i class="fa-brands fa-cc-paypal"></i>
        <i class="fa-solid fa-money-bill-transfer"></i>
      </div>
      <a href="#">Mapa webu</a>
    </div>
  </footer>