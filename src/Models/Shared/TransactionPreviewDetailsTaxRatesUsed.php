<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class TransactionPreviewDetailsTaxRatesUsed
{
    /**
     * Rate used to calculate tax for this transaction preview.
     * 
     * @var ?string $taxRate
     */
	#[\JMS\Serializer\Annotation\SerializedName('tax_rate')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $taxRate = null;
    
    /**
     * Breakdown of a charge in the lowest denomination of a currency (e.g. cents for USD).
     * 
     * @var ?\paddle\Paddle\Models\Shared\Totals1 $totals
     */
	#[\JMS\Serializer\Annotation\SerializedName('totals')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Totals1')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Totals1 $totals = null;
    
	public function __construct()
	{
		$this->taxRate = null;
		$this->totals = null;
	}
}
