<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class InvoiceDetails
{
    /**
     * $lineItems
     * 
     * @var ?array<\paddle\Paddle\Models\Shared\LineItems> $lineItems
     */
	#[\JMS\Serializer\Annotation\SerializedName('line_items')]
    #[\JMS\Serializer\Annotation\Type('array<paddle\Paddle\Models\Shared\LineItems>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $lineItems = null;
    
    /**
     * The financial breakdown of a charge in the lowest denomination of a currency (eg cents for USD).
     * 
     * @var ?\paddle\Paddle\Models\Shared\Totals2 $totals
     */
	#[\JMS\Serializer\Annotation\SerializedName('totals')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Totals2')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Totals2 $totals = null;
    
	public function __construct()
	{
		$this->lineItems = null;
		$this->totals = null;
	}
}
