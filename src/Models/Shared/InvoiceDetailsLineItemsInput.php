<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class InvoiceDetailsLineItemsInput
{
    /**
     * Represents a product entity.
     * 
     * @var ?array<string, mixed> $product
     */
	#[\JMS\Serializer\Annotation\SerializedName('product')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $product = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $quantity = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('tax_rate')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $taxRate = null;
    
	public function __construct()
	{
		$this->product = null;
		$this->quantity = null;
		$this->taxRate = null;
	}
}
