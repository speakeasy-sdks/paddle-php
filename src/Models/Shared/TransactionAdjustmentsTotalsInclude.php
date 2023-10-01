<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * TransactionAdjustmentsTotalsInclude - Breakdown of all the adjustments made against a transaction in the transaction currency.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class TransactionAdjustmentsTotalsInclude
{
    /**
     * Breakdown of the total adjustments by adjustment action.
     * 
     * @var ?\paddle\Paddle\Models\Shared\TransactionAdjustmentsTotalsIncludeBreakdown $breakdown
     */
	#[\JMS\Serializer\Annotation\SerializedName('breakdown')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\TransactionAdjustmentsTotalsIncludeBreakdown')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TransactionAdjustmentsTotalsIncludeBreakdown $breakdown = null;
    
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
     * Total earnings. This is the subtotal minus the Paddle fee.
     * 
     * For tax adjustments, this value is negative, which means a positive effect in the transaction earnings.
     * This is because the fee is originally calculated from the transaction total, so if a tax adjustment is made,
     * then the fee portion of it is returned.
     * As a result, the earnings from all the adjustments performed could be either negative, positive or zero.
     * 
     * @var ?string $earnings
     */
	#[\JMS\Serializer\Annotation\SerializedName('earnings')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $earnings = null;
    
    /**
     * Total fee taken by Paddle.
     * 
     * @var ?string $fee
     */
	#[\JMS\Serializer\Annotation\SerializedName('fee')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $fee = null;
    
    /**
     * Total before tax.
     * 
     * @var ?string $subtotal
     */
	#[\JMS\Serializer\Annotation\SerializedName('subtotal')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subtotal = null;
    
    /**
     * Total tax on the subtotal.
     * 
     * @var ?string $tax
     */
	#[\JMS\Serializer\Annotation\SerializedName('tax')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $tax = null;
    
    /**
     * Total after tax.
     * 
     * @var ?string $total
     */
	#[\JMS\Serializer\Annotation\SerializedName('total')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $total = null;
    
	public function __construct()
	{
		$this->breakdown = null;
		$this->currencyCode = null;
		$this->earnings = null;
		$this->fee = null;
		$this->subtotal = null;
		$this->tax = null;
		$this->total = null;
	}
}
