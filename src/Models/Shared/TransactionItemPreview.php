<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class TransactionItemPreview
{
    /**
     * Whether this item should be included in totals for this transaction preview. Typically used to exclude one-time charges from calculations.
     * 
     * @var ?bool $includeInTotals
     */
	#[\JMS\Serializer\Annotation\SerializedName('include_in_totals')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $includeInTotals = null;
    
    /**
     * Represents a price entity.
     * 
     * @var ?\paddle\Paddle\Models\Shared\Price $price
     */
	#[\JMS\Serializer\Annotation\SerializedName('price')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Price')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Price $price = null;
    
    /**
     * Unique Paddle ID for this price, prefixed with `pri_`.
     * 
     * @var ?string $priceId
     */
	#[\JMS\Serializer\Annotation\SerializedName('price_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $priceId = null;
    
    /**
     * How proration was calculated for this item. Populated when a transaction is created from a subscription change, where `proration_billing_mode` was `prorated_immediately` or `prorated_next_billing_period`. Set automatically by Paddle.
     * 
     * @var ?\paddle\Paddle\Models\Shared\TransactionItemProration $proration
     */
	#[\JMS\Serializer\Annotation\SerializedName('proration')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\TransactionItemProration')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TransactionItemProration $proration = null;
    
    /**
     * Quantity of this item on the transaction.
     * 
     * @var int $quantity
     */
	#[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $quantity;
    
	public function __construct()
	{
		$this->includeInTotals = null;
		$this->price = null;
		$this->priceId = null;
		$this->proration = null;
		$this->quantity = 0;
	}
}
