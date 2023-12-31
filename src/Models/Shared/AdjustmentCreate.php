<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * AdjustmentCreate - Represents an adjustment entity.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class AdjustmentCreate
{
    /**
     * How this adjustment impacts the related transaction. `refund` adjustments must be approved by Paddle, and are created with the status `pending_approval`. `chargeback` and `chargeback_warning` adjustments are created automatically by Paddle.
     * 
     * @var \paddle\Paddle\Models\Shared\SchemaAction $action
     */
	#[\JMS\Serializer\Annotation\SerializedName('action')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\SchemaAction>')]
    public SchemaAction $action;
    
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
     * Unique Paddle ID for this customer entity, prefixed with `ctm_`.
     * 
     * @var ?string $customerId
     */
	#[\JMS\Serializer\Annotation\SerializedName('customer_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerId = null;
    
    /**
     * Unique Paddle ID for this adjustment entity, prefixed with `adj_`.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * List of items on this adjustment.
     * 
     * @var array<\paddle\Paddle\Models\Shared\AdjustmentCreateAdjustmentItem> $items
     */
	#[\JMS\Serializer\Annotation\SerializedName('items')]
    #[\JMS\Serializer\Annotation\Type('array<paddle\Paddle\Models\Shared\AdjustmentCreateAdjustmentItem>')]
    public array $items;
    
    /**
     * Breakdown of how this adjustment affects your payout balance.
     * 
     * @var ?\paddle\Paddle\Models\Shared\AdjustmentPayoutTotals $payoutTotals
     */
	#[\JMS\Serializer\Annotation\SerializedName('payout_totals')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\AdjustmentPayoutTotals')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AdjustmentPayoutTotals $payoutTotals = null;
    
    /**
     * Why this adjustment was created. Appears in the Paddle Dashboard. Retained for record-keeping purposes.
     * 
     * @var string $reason
     */
	#[\JMS\Serializer\Annotation\SerializedName('reason')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $reason;
    
    /**
     * Status of this adjustment. Set automatically by Paddle. 
     * 
     * 
     * `refund` adjustments must be approved by Paddle, and are created with the status `pending_approval` 
     * until they move to `approved` or `rejected` on review.  `credit` adjustments are created with the status `approved`.
     * 
     * @var ?\paddle\Paddle\Models\Shared\SchemaStatusAdjustment $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\SchemaStatusAdjustment>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SchemaStatusAdjustment $status = null;
    
    /**
     * Unique Paddle ID for this subscription entity, prefixed with `sub_`.
     * 
     * @var ?string $subscriptionId
     */
	#[\JMS\Serializer\Annotation\SerializedName('subscription_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $subscriptionId = null;
    
    /**
     * Paddle ID for the transaction related to this adjustment, prefixed with `txn_`.
     * 
     * Transactions must be `billed` or `completed`. You can't create an adjustment for a transaction
     * that has an adjustment that's `pending_approval`.
     * 
     * @var mixed $transactionId
     */
	#[\JMS\Serializer\Annotation\SerializedName('transaction_id')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $transactionId;
    
	public function __construct()
	{
		$this->action = \paddle\Paddle\Models\Shared\SchemaAction::Credit;
		$this->currencyCode = null;
		$this->customerId = null;
		$this->id = null;
		$this->items = [];
		$this->payoutTotals = null;
		$this->reason = "";
		$this->status = null;
		$this->subscriptionId = null;
		$this->transactionId = null;
	}
}
