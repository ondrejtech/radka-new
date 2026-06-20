<?php

namespace App\Services;

use Google\Ads\GoogleAds\Lib\V20\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V20\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\V20\Enums\AdvertisingChannelTypeEnum\AdvertisingChannelType;
use Google\Ads\GoogleAds\V20\Enums\BudgetDeliveryMethodEnum\BudgetDeliveryMethod;
use Google\Ads\GoogleAds\V20\Enums\CampaignStatusEnum\CampaignStatus;
use Google\Ads\GoogleAds\V20\Resources\Campaign;
use Google\Ads\GoogleAds\V20\Resources\CampaignBudget;
use Google\Ads\GoogleAds\V20\Services\CampaignBudgetOperation;
use Google\Ads\GoogleAds\V20\Services\CampaignOperation;
use Google\Auth\Credentials\UserRefreshCredentials;

class GoogleAdsService
{
    private GoogleAdsClient $client;

    private string $customerId;

    public function __construct()
    {
        $this->customerId = (string) config('services.google_ads.customer_id');

        $oAuth2Credential = new UserRefreshCredentials(
            'https://www.googleapis.com/auth/adwords',
            [
                'client_id' => config('services.google_ads.client_id'),
                'client_secret' => config('services.google_ads.client_secret'),
                'refresh_token' => config('services.google_ads.refresh_token'),
            ]
        );

        $this->client = (new GoogleAdsClientBuilder)
            ->withOAuth2Credential($oAuth2Credential)
            ->withDeveloperToken(config('services.google_ads.developer_token'))
            ->withLoginCustomerId($this->customerId)
            ->build();
    }

    public function listCampaigns(): array
    {
        $googleAdsServiceClient = $this->client->getGoogleAdsServiceClient();

        $query = 'SELECT campaign.id, campaign.name, campaign.status FROM campaign ORDER BY campaign.id';

        $response = $googleAdsServiceClient->search($this->customerId, $query);

        $campaigns = [];
        foreach ($response->iterateAllElements() as $row) {
            $campaigns[] = [
                'id' => $row->getCampaign()->getId(),
                'name' => $row->getCampaign()->getName(),
                'status' => $row->getCampaign()->getStatus(),
            ];
        }

        return $campaigns;
    }

    public function createSearchCampaign(string $name, int $dailyBudgetMicros): array
    {
        $budgetResourceName = $this->createCampaignBudget($name, $dailyBudgetMicros);

        $campaign = new Campaign([
            'name' => $name,
            'advertising_channel_type' => AdvertisingChannelType::SEARCH,
            'status' => CampaignStatus::PAUSED,
            'campaign_budget' => $budgetResourceName,
            'manual_cpc' => [],
        ]);

        $campaignOperation = new CampaignOperation;
        $campaignOperation->setCreate($campaign);

        $response = $this->client->getCampaignServiceClient()->mutateCampaigns(
            $this->customerId,
            [$campaignOperation]
        );

        return [
            'resource_name' => $response->getResults()[0]->getResourceName(),
            'budget' => $budgetResourceName,
        ];
    }

    private function createCampaignBudget(string $campaignName, int $dailyBudgetMicros): string
    {
        $budget = new CampaignBudget([
            'name' => $campaignName.' budget',
            'delivery_method' => BudgetDeliveryMethod::STANDARD,
            'amount_micros' => $dailyBudgetMicros,
        ]);

        $budgetOperation = new CampaignBudgetOperation;
        $budgetOperation->setCreate($budget);

        $response = $this->client->getCampaignBudgetServiceClient()->mutateCampaignBudgets(
            $this->customerId,
            [$budgetOperation]
        );

        return $response->getResults()[0]->getResourceName();
    }
}
