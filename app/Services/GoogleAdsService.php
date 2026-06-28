<?php

namespace App\Services;

use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Google\Ads\GoogleAds\Lib\V24\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V24\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\V24\Common\ManualCpc;
use Google\Ads\GoogleAds\V24\Enums\AdGroupStatusEnum\AdGroupStatus;
use Google\Ads\GoogleAds\V24\Enums\AdGroupTypeEnum\AdGroupType;
use Google\Ads\GoogleAds\V24\Enums\AdvertisingChannelTypeEnum\AdvertisingChannelType;
use Google\Ads\GoogleAds\V24\Enums\BudgetDeliveryMethodEnum\BudgetDeliveryMethod;
use Google\Ads\GoogleAds\V24\Enums\CampaignStatusEnum\CampaignStatus;
use Google\Ads\GoogleAds\V24\Enums\EuPoliticalAdvertisingStatusEnum\EuPoliticalAdvertisingStatus;
use Google\Ads\GoogleAds\V24\Resources\AdGroup;
use Google\Ads\GoogleAds\V24\Resources\Campaign;
use Google\Ads\GoogleAds\V24\Resources\CampaignBudget;
use Google\Ads\GoogleAds\V24\Services\AdGroupOperation;
use Google\Ads\GoogleAds\V24\Services\CampaignBudgetOperation;
use Google\Ads\GoogleAds\V24\Services\CampaignOperation;
use Google\Ads\GoogleAds\V24\Services\MutateAdGroupsRequest;
use Google\Ads\GoogleAds\V24\Services\MutateCampaignBudgetsRequest;
use Google\Ads\GoogleAds\V24\Services\MutateCampaignsRequest;
use Google\Ads\GoogleAds\V24\Services\SearchGoogleAdsRequest;

class GoogleAdsService
{
    private GoogleAdsClient $client;

    private string $customerId;

    public function __construct()
    {
        $this->customerId = str_replace('-', '', (string) config('services.google_ads.customer_id'));

        $oAuth2Credential = (new OAuth2TokenBuilder)
            ->withClientId(config('services.google_ads.client_id'))
            ->withClientSecret(config('services.google_ads.client_secret'))
            ->withRefreshToken(config('services.google_ads.refresh_token'))
            ->build();

        $this->client = (new GoogleAdsClientBuilder)
            ->withOAuth2Credential($oAuth2Credential)
            ->withDeveloperToken(config('services.google_ads.developer_token'))
            ->withLoginCustomerId((int) $this->customerId)
            ->build();
    }

    public function listCampaigns(): array
    {
        $googleAdsServiceClient = $this->client->getGoogleAdsServiceClient();

        $request = new SearchGoogleAdsRequest([
            'customer_id' => $this->customerId,
            'query' => 'SELECT campaign.id, campaign.name, campaign.status FROM campaign ORDER BY campaign.id',
        ]);

        $response = $googleAdsServiceClient->search($request);

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
            'manual_cpc' => new ManualCpc,
            'contains_eu_political_advertising' => EuPoliticalAdvertisingStatus::DOES_NOT_CONTAIN_EU_POLITICAL_ADVERTISING,
        ]);

        $campaignOperation = new CampaignOperation;
        $campaignOperation->setCreate($campaign);

        $response = $this->client->getCampaignServiceClient()->mutateCampaigns(
            MutateCampaignsRequest::build($this->customerId, [$campaignOperation])
        );

        return [
            'resource_name' => $response->getResults()[0]->getResourceName(),
            'budget' => $budgetResourceName,
        ];
    }

    public function createAdGroup(string $name, string $campaignResourceName, int $cpcBidMicros): string
    {
        $adGroup = new AdGroup([
            'name' => $name,
            'campaign' => $campaignResourceName,
            'type' => AdGroupType::SEARCH_STANDARD,
            'status' => AdGroupStatus::ENABLED,
            'cpc_bid_micros' => $cpcBidMicros,
        ]);

        $operation = new AdGroupOperation;
        $operation->setCreate($adGroup);

        $response = $this->client->getAdGroupServiceClient()->mutateAdGroups(
            MutateAdGroupsRequest::build($this->customerId, [$operation])
        );

        return $response->getResults()[0]->getResourceName();
    }

    private function createCampaignBudget(string $campaignName, int $dailyBudgetMicros): string
    {
        $budget = new CampaignBudget([
            'name' => $campaignName.' budget '.time(),
            'delivery_method' => BudgetDeliveryMethod::STANDARD,
            'amount_micros' => $dailyBudgetMicros,
        ]);

        $budgetOperation = new CampaignBudgetOperation;
        $budgetOperation->setCreate($budget);

        $response = $this->client->getCampaignBudgetServiceClient()->mutateCampaignBudgets(
            MutateCampaignBudgetsRequest::build($this->customerId, [$budgetOperation])
        );

        return $response->getResults()[0]->getResourceName();
    }
}
