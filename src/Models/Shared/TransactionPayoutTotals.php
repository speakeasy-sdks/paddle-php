<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * TransactionPayoutTotals - Breakdown of the payout total for a transaction. `null` until the transaction is `completed`. Returned in your payout currency.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class TransactionPayoutTotals
{
    /**
     * Total due on a transaction after credits and any payments.
     * 
     * @var ?string $balance
     */
	#[\JMS\Serializer\Annotation\SerializedName('balance')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $balance = null;
    
    /**
     * Total credit applied to this transaction. This includes credits applied using a customer's credit balance and adjustments to a `billed` transaction.
     * 
     * @var ?string $credit
     */
	#[\JMS\Serializer\Annotation\SerializedName('credit')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $credit = null;
    
    /**
     * Supported three-letter ISO 4217 currency code for payouts from Paddle.
     * 
     * @var ?\paddle\Paddle\Models\Shared\CurrencyCodePayout $currencyCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('currency_code')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\CurrencyCodePayout>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CurrencyCodePayout $currencyCode = null;
    
    /**
     * Total discount as a result of any discounts applied.
     * 
     * 
     * Except for percentage discounts, Paddle applies tax to discounts based on the line item `price.tax_mode`. If `price.tax_mode` for a line item is `internal`, Paddle removes tax from the discount applied.
     * 
     * @var ?string $discount
     */
	#[\JMS\Serializer\Annotation\SerializedName('discount')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $discount = null;
    
    /**
     * Total earnings for this payout. This is the subtotal minus the Paddle fee.
     * 
     * @var ?string $earnings
     */
	#[\JMS\Serializer\Annotation\SerializedName('earnings')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $earnings = null;
    
    /**
     * Total fee taken by Paddle for this payout.
     * 
     * @var ?string $fee
     */
	#[\JMS\Serializer\Annotation\SerializedName('fee')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $fee = null;
    
    /**
     * Total due on a transaction after credits but before any payments.
     * 
     * @var ?string $grandTotal
     */
	#[\JMS\Serializer\Annotation\SerializedName('grand_total')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $grandTotal = null;
    
    /**
     * Total before tax and fees.
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
		$this->balance = null;
		$this->credit = null;
		$this->currencyCode = null;
		$this->discount = null;
		$this->earnings = null;
		$this->fee = null;
		$this->grandTotal = null;
		$this->subtotal = null;
		$this->tax = null;
		$this->total = null;
	}
}
