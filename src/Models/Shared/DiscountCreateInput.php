<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * DiscountCreateInput - Represents a discount entity.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class DiscountCreateInput
{
    /**
     * Amount to discount by. For `percentage` discounts, must be an amount between `0.01` and `100`. For `flat` and `flat_per_seat` discounts, amount in the lowest denomination for a currency.
     * 
     * @var string $amount
     */
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $amount;
    
    /**
     * Unique code that customers can use to apply this discount at checkout. Use letters and numbers only, up to 16 characters. Paddle generates a random 10-character code if a code is not provided and `enabled_for_checkout` is `true`.
     * 
     * @var ?string $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $code = null;
    
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
     * Short description for this discount for your reference. Not shown to customers.
     * 
     * @var string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    /**
     * Whether this discount can be applied by a customer at checkout.
     * 
     * @var ?bool $enabledForCheckout
     */
	#[\JMS\Serializer\Annotation\SerializedName('enabled_for_checkout')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $enabledForCheckout = null;
    
    /**
     * RFC 3339 datetime string.
     * 
     * @var ?\DateTime $expiresAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('expires_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $expiresAt = null;
    
    /**
     * Unique Paddle ID for this discount, prefixed with `dsc_`.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * Amount of subscription billing periods that this discount recurs for. Requires `recur`. `null` if this discount recurs forever.
     * 
     * @var ?int $maximumRecurringIntervals
     */
	#[\JMS\Serializer\Annotation\SerializedName('maximum_recurring_intervals')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maximumRecurringIntervals = null;
    
    /**
     * Whether this discount applies for multiple billing periods.
     * 
     * @var ?bool $recur
     */
	#[\JMS\Serializer\Annotation\SerializedName('recur')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $recur = null;
    
    /**
     * Product or price IDs that this discount is for. When including a product ID, all prices for that product can be discounted. `null` if this discount applies to all products and prices.
     * 
     * @var ?array<string> $restrictTo
     */
	#[\JMS\Serializer\Annotation\SerializedName('restrict_to')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $restrictTo = null;
    
    /**
     * Type of discount.
     * 
     * @var \paddle\Paddle\Models\Shared\DiscountCreateType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\DiscountCreateType>')]
    public DiscountCreateType $type;
    
    /**
     * Maximum amount of times this discount can be used. This is an overall limit, rather than a per-customer limit. `null` if this discount can be used an unlimited amount of times.
     * 
     * @var ?int $usageLimit
     */
	#[\JMS\Serializer\Annotation\SerializedName('usage_limit')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $usageLimit = null;
    
	public function __construct()
	{
		$this->amount = "";
		$this->code = null;
		$this->currencyCode = null;
		$this->description = "";
		$this->enabledForCheckout = null;
		$this->expiresAt = null;
		$this->id = null;
		$this->maximumRecurringIntervals = null;
		$this->recur = null;
		$this->restrictTo = null;
		$this->type = \paddle\Paddle\Models\Shared\DiscountCreateType::Flat;
		$this->usageLimit = null;
	}
}