<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class LineItems
{
    /**
     * Represents a product entity.
     * 
     * @var ?\paddle\Paddle\Models\Shared\Product $product
     */
	#[\JMS\Serializer\Annotation\SerializedName('product')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Product')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Product $product = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $quantity = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('tax_rate')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $taxRate = null;
    
    /**
     * The financial breakdown of a charge in the lowest denomination of a currency (eg cents for USD).
     * 
     * @var ?\paddle\Paddle\Models\Shared\Totals2 $totals
     */
	#[\JMS\Serializer\Annotation\SerializedName('totals')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Totals2')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Totals2 $totals = null;
    
    /**
     * The financial breakdown of a charge in the lowest denomination of a currency (eg cents for USD).
     * 
     * @var ?\paddle\Paddle\Models\Shared\Totals2 $unitTotals
     */
	#[\JMS\Serializer\Annotation\SerializedName('unit_totals')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Totals2')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Totals2 $unitTotals = null;
    
	public function __construct()
	{
		$this->product = null;
		$this->quantity = null;
		$this->taxRate = null;
		$this->totals = null;
		$this->unitTotals = null;
	}
}
