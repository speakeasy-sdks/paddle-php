<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class AdjustmentCreateAdjustmentItemInput
{
    /**
     * Amount adjusted before tax for this transaction item. Required when adjustment type is `partial`.
     * 
     * @var ?string $amount
     */
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $amount = null;
    
    /**
     * Unique Paddle ID for this adjustment item, prefixed with `adjitm_`.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * Unique Paddle ID for this transaction item, prefixed with `txnitm_`.
     * 
     * @var string $itemId
     */
	#[\JMS\Serializer\Annotation\SerializedName('item_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $itemId;
    
    /**
     * Type of adjustment for this transaction item. `tax` and `proration` are automatically created by Paddle. 
     * 
     * Include `amount` when creating a `partial` adjustment.
     * 
     * @var \paddle\Paddle\Models\Shared\AdjustmentCreateAdjustmentItemType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\AdjustmentCreateAdjustmentItemType>')]
    public AdjustmentCreateAdjustmentItemType $type;
    
	public function __construct()
	{
		$this->amount = null;
		$this->id = null;
		$this->itemId = "";
		$this->type = \paddle\Paddle\Models\Shared\AdjustmentCreateAdjustmentItemType::Full;
	}
}
