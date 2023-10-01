<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


/**
 * CreateSubscriptionChargePreview200ApplicationJSONSubscriptionPreview - Represents a subscription preview.
 * 
 * @package paddle\Paddle\Models\Operations
 * @access public
 */
class CreateSubscriptionChargePreview200ApplicationJSONSubscriptionPreview
{
    /**
     * Unique Paddle ID for this address entity, prefixed with `add_`.
     * 
     * @var ?string $addressId
     */
	#[\JMS\Serializer\Annotation\SerializedName('address_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $addressId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('billing_cycle')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Period2')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\Period2 $billingCycle = null;
    
    /**
     * Details for invoicing. Required if `collection_mode` is `manual`.
     * 
     * @var ?\paddle\Paddle\Models\Shared\BillingDetails2 $billingDetails
     */
	#[\JMS\Serializer\Annotation\SerializedName('billing_details')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\BillingDetails2')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\BillingDetails2 $billingDetails = null;
    
    /**
     * Unique Paddle ID for this business entity, prefixed with `biz_`.
     * 
     * @var ?string $businessId
     */
	#[\JMS\Serializer\Annotation\SerializedName('business_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $businessId = null;
    
    /**
     * RFC 3339 datetime string.
     * 
     * @var ?\DateTime $canceledAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('canceled_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $canceledAt = null;
    
    /**
     * How payment is collected. `automatic` for checkout, `manual` for invoices.
     * 
     * @var ?\paddle\Paddle\Models\Shared\CollectionMode2 $collectionMode
     */
	#[\JMS\Serializer\Annotation\SerializedName('collection_mode')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\CollectionMode2>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\CollectionMode2 $collectionMode = null;
    
    /**
     * RFC 3339 datetime string of when this entity was created. Set automatically by Paddle.
     * 
     * @var ?\DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * Supported three-letter ISO 4217 currency code.
     * 
     * @var ?\paddle\Paddle\Models\Shared\CurrencyCode2 $currencyCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('currency_code')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\CurrencyCode2>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\CurrencyCode2 $currencyCode = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('current_billing_period')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\TimePeriod')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\TimePeriod $currentBillingPeriod = null;
    
    /**
     * Your own structured key-value data.
     * 
     * @var ?\paddle\Paddle\Models\Shared\CustomData $customData
     */
	#[\JMS\Serializer\Annotation\SerializedName('custom_data')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\CustomData')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\CustomData $customData = null;
    
    /**
     * Unique Paddle ID for this customer entity, prefixed with `ctm_`.
     * 
     * @var ?string $customerId
     */
	#[\JMS\Serializer\Annotation\SerializedName('customer_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerId = null;
    
    /**
     * Details of the discount applied to this subscription.
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateSubscriptionChargePreview200ApplicationJSONSubscriptionPreviewDiscount $discount
     */
	#[\JMS\Serializer\Annotation\SerializedName('discount')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Operations\CreateSubscriptionChargePreview200ApplicationJSONSubscriptionPreviewDiscount')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateSubscriptionChargePreview200ApplicationJSONSubscriptionPreviewDiscount $discount = null;
    
    /**
     * RFC 3339 datetime string.
     * 
     * @var ?\DateTime $firstBilledAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('first_billed_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $firstBilledAt = null;
    
    /**
     * Preview of the next transaction for this subscription. May include prorated charges that are not yet billed and one-time charges. `null` if the subscription is scheduled to cancel or pause.
     * 
     * @var ?\paddle\Paddle\Models\Shared\SubscriptionNextTransaction $immediateTransaction
     */
	#[\JMS\Serializer\Annotation\SerializedName('immediate_transaction')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\SubscriptionNextTransaction')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\SubscriptionNextTransaction $immediateTransaction = null;
    
    /**
     * List of items on this subscription. Only recurring items are returned.
     * 
     * @var ?array<\paddle\Paddle\Models\Shared\ItemSubscription> $items
     */
	#[\JMS\Serializer\Annotation\SerializedName('items')]
    #[\JMS\Serializer\Annotation\Type('array<paddle\Paddle\Models\Shared\ItemSubscription>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $items = null;
    
    /**
     * Public URLs that customers can use to make changes to this subscription.
     * 
     * @var ?\paddle\Paddle\Models\Shared\SubscriptionManagementUrls $managementUrls
     */
	#[\JMS\Serializer\Annotation\SerializedName('management_urls')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\SubscriptionManagementUrls')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\SubscriptionManagementUrls $managementUrls = null;
    
    /**
     * RFC 3339 datetime string.
     * 
     * @var ?\DateTime $nextBilledAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('next_billed_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $nextBilledAt = null;
    
    /**
     * Preview of the next transaction for this subscription. May include prorated charges that are not yet billed and one-time charges. `null` if the subscription is scheduled to cancel or pause.
     * 
     * @var ?\paddle\Paddle\Models\Shared\SubscriptionNextTransaction $nextTransaction
     */
	#[\JMS\Serializer\Annotation\SerializedName('next_transaction')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\SubscriptionNextTransaction')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\SubscriptionNextTransaction $nextTransaction = null;
    
    /**
     * RFC 3339 datetime string.
     * 
     * @var ?\DateTime $pausedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('paused_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $pausedAt = null;
    
    /**
     * Preview of the recurring transaction for this subscription. This is what the customer can expect to be billed when there are no prorated or one-off charges.
     * 
     * @var ?\paddle\Paddle\Models\Shared\SubscriptionRecurringTransactionDetails $recurringTransactionDetails
     */
	#[\JMS\Serializer\Annotation\SerializedName('recurring_transaction_details')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\SubscriptionRecurringTransactionDetails')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\SubscriptionRecurringTransactionDetails $recurringTransactionDetails = null;
    
    /**
     * Change that's scheduled to be applied to a subscription. Use the pause subscription, cancel subscription, and resume subscription operations to create scheduled changes. `null` if no scheduled changes.
     * 
     * @var ?\paddle\Paddle\Models\Shared\SubscriptionScheduledChange $scheduledChange
     */
	#[\JMS\Serializer\Annotation\SerializedName('scheduled_change')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\SubscriptionScheduledChange')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\SubscriptionScheduledChange $scheduledChange = null;
    
    /**
     * RFC 3339 datetime string.
     * 
     * @var ?\DateTime $startedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('started_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $startedAt = null;
    
    /**
     * Status of this subscription. Set automatically by Paddle. Use the pause subscription or cancel subscription operations to change.
     * 
     * @var ?\paddle\Paddle\Models\Shared\SchemasstatusSubscription $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\SchemasstatusSubscription>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\SchemasstatusSubscription $status = null;
    
    /**
     * RFC 3339 datetime string of when this entity was updated. Set automatically by Paddle.
     * 
     * @var ?\DateTime $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->addressId = null;
		$this->billingCycle = null;
		$this->billingDetails = null;
		$this->businessId = null;
		$this->canceledAt = null;
		$this->collectionMode = null;
		$this->createdAt = null;
		$this->currencyCode = null;
		$this->currentBillingPeriod = null;
		$this->customData = null;
		$this->customerId = null;
		$this->discount = null;
		$this->firstBilledAt = null;
		$this->immediateTransaction = null;
		$this->items = null;
		$this->managementUrls = null;
		$this->nextBilledAt = null;
		$this->nextTransaction = null;
		$this->pausedAt = null;
		$this->recurringTransactionDetails = null;
		$this->scheduledChange = null;
		$this->startedAt = null;
		$this->status = null;
		$this->updatedAt = null;
	}
}
