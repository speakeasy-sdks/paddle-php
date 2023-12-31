<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * UnitTotalsFormatted - Breakdown of the charge for one unit in the format of a given currency.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class UnitTotalsFormatted
{
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
     * Unit price.
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
     * Total after discount and tax.
     * 
     * @var ?string $total
     */
	#[\JMS\Serializer\Annotation\SerializedName('total')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $total = null;
    
	public function __construct()
	{
		$this->discount = null;
		$this->subtotal = null;
		$this->tax = null;
		$this->total = null;
	}
}
