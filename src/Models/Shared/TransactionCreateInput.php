<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * TransactionCreateInput - Represents a transaction entity.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class TransactionCreateInput
{
    /**
     * Paddle ID of the address that this transaction is for, prefixed with `add_`. Required for transaction to be `ready`.
     * 
     * @var mixed $addressId
     */
	#[\JMS\Serializer\Annotation\SerializedName('address_id')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $addressId = null;
    
    /**
     * RFC 3339 datetime string.
     * 
     * @var ?\DateTime $billedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('billed_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $billedAt = null;
    
    /**
     * Details for invoicing. Required if `collection_mode` is `manual`.
     * 
     * @var ?\paddle\Paddle\Models\Shared\BillingDetails2 $billingDetails
     */
	#[\JMS\Serializer\Annotation\SerializedName('billing_details')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\BillingDetails2')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?BillingDetails2 $billingDetails = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('billing_period')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\TimePeriod')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TimePeriod $billingPeriod = null;
    
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
     * How payment is collected. `automatic` for checkout, `manual` for invoices.
     * 
     * @var ?\paddle\Paddle\Models\Shared\CollectionMode2 $collectionMode
     */
	#[\JMS\Serializer\Annotation\SerializedName('collection_mode')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\CollectionMode2>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CollectionMode2 $collectionMode = null;
    
    /**
     * Supported three-letter ISO 4217 currency code.
     * 
     * @var ?\paddle\Paddle\Models\Shared\CurrencyCode2 $currencyCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('currency_code')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\CurrencyCode2>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CurrencyCode2 $currencyCode = null;
    
    /**
     * Your own structured key-value data.
     * 
     * @var ?\paddle\Paddle\Models\Shared\CustomData $customData
     */
	#[\JMS\Serializer\Annotation\SerializedName('custom_data')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\CustomData')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CustomData $customData = null;
    
    /**
     * Paddle ID of the customer that this transaction is for, prefixed with `ctm_`. Required for transaction to be `ready`.
     * 
     * @var mixed $customerId
     */
	#[\JMS\Serializer\Annotation\SerializedName('customer_id')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $customerId = null;
    
    /**
     * Unique Paddle ID for this discount, prefixed with `dsc_`.
     * 
     * @var ?string $discountId
     */
	#[\JMS\Serializer\Annotation\SerializedName('discount_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $discountId = null;
    
    /**
     * Unique Paddle ID for this transaction entity, prefixed with `txn_`.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * List of items on this transaction. For calculated totals, use `details.line_items`.
     * 
     * @var array<\paddle\Paddle\Models\Shared\TransactionItemInput> $items
     */
	#[\JMS\Serializer\Annotation\SerializedName('items')]
    #[\JMS\Serializer\Annotation\Type('array<paddle\Paddle\Models\Shared\TransactionItemInput>')]
    public array $items;
    
    /**
     * Status of this transaction. You may set a transaction to `billed` when creating, 
     * 
     * or omit to let Paddle set the status. 
     * 
     * Marking as `billed` when creating is typically used when working with manually-collected 
     * transactions as part of an invoicing workflow. Automatically-collected transactions may 
     * return `completed` if payment is captured successfully, or `past_due` if payment failed.
     * 
     * @var mixed $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $status = null;
    
    /**
     * Unique Paddle ID for this subscription entity, prefixed with `sub_`.
     * 
     * @var ?string $subscriptionId
     */
	#[\JMS\Serializer\Annotation\SerializedName('subscription_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subscriptionId = null;
    
	public function __construct()
	{
		$this->addressId = null;
		$this->billedAt = null;
		$this->billingDetails = null;
		$this->billingPeriod = null;
		$this->businessId = null;
		$this->collectionMode = null;
		$this->currencyCode = null;
		$this->customData = null;
		$this->customerId = null;
		$this->discountId = null;
		$this->id = null;
		$this->items = [];
		$this->status = null;
		$this->subscriptionId = null;
	}
}