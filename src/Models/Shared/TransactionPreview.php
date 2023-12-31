<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * TransactionPreview - Represents a transaction entity when previewing.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class TransactionPreview
{
    /**
     * Represents an address entity.
     * 
     * @var ?\paddle\Paddle\Models\Shared\AddressPreview $address
     */
	#[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\AddressPreview')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AddressPreview $address = null;
    
    /**
     * Unique Paddle ID for this address entity, prefixed with `add_`.
     * 
     * @var ?string $addressId
     */
	#[\JMS\Serializer\Annotation\SerializedName('address_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $addressId = null;
    
    /**
     * Breakdown of the total for adjustments for a transaction preview in a given currency.
     * 
     * @var ?\paddle\Paddle\Models\Shared\TransactionPreviewAdjustmentTotals $adjustmentsTotals
     */
	#[\JMS\Serializer\Annotation\SerializedName('adjustments_totals')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\TransactionPreviewAdjustmentTotals')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TransactionPreviewAdjustmentTotals $adjustmentsTotals = null;
    
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
     * Supported three-letter ISO 4217 currency code.
     * 
     * @var ?\paddle\Paddle\Models\Shared\CurrencyCode2 $currencyCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('currency_code')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\CurrencyCode2>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CurrencyCode2 $currencyCode = null;
    
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
     * IP address for this transaction preview. Send one of `address_id`, `customer_ip_address`, or the `address` object when previewing.
     * 
     * @var ?string $customerIpAddress
     */
	#[\JMS\Serializer\Annotation\SerializedName('customer_ip_address')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerIpAddress = null;
    
    /**
     * Calculated totals for a transaction preview, including discounts, tax, and currency conversion. Considered the source of truth for totals on a transaction preview.
     * 
     * @var ?\paddle\Paddle\Models\Shared\TransactionPreviewDetails $details
     */
	#[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\TransactionPreviewDetails')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TransactionPreviewDetails $details = null;
    
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
     * Whether trials should be ignored for transaction preview calculations.
     * 
     * 
     * By default, recurring items with trials are considered to have a zero charge when previewing. Set to `true` to disable this.
     * 
     * @var ?bool $ignoreTrials
     */
	#[\JMS\Serializer\Annotation\SerializedName('ignore_trials')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $ignoreTrials = null;
    
    /**
     * List of items to preview transaction calculations for.
     * 
     * @var array<\paddle\Paddle\Models\Shared\TransactionItemPreview> $items
     */
	#[\JMS\Serializer\Annotation\SerializedName('items')]
    #[\JMS\Serializer\Annotation\Type('array<paddle\Paddle\Models\Shared\TransactionItemPreview>')]
    public array $items;
    
	public function __construct()
	{
		$this->address = null;
		$this->addressId = null;
		$this->adjustmentsTotals = null;
		$this->businessId = null;
		$this->currencyCode = null;
		$this->customerId = null;
		$this->customerIpAddress = null;
		$this->details = null;
		$this->discountId = null;
		$this->ignoreTrials = null;
		$this->items = [];
	}
}
