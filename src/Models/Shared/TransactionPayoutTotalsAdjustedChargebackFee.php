<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * TransactionPayoutTotalsAdjustedChargebackFee - Details of any chargeback fees incurred for this transaction.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class TransactionPayoutTotalsAdjustedChargebackFee
{
    /**
     * Chargeback fee converted into the payout currency.
     * 
     * @var ?string $amount
     */
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $amount = null;
    
    /**
     * Chargeback fee before conversion to the payout currency. `null` when the chargeback fee is the same as the payout currency.
     * 
     * @var ?\paddle\Paddle\Models\Shared\TransactionPayoutTotalsAdjustedOriginal $original
     */
	#[\JMS\Serializer\Annotation\SerializedName('original')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\TransactionPayoutTotalsAdjustedOriginal')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TransactionPayoutTotalsAdjustedOriginal $original = null;
    
	public function __construct()
	{
		$this->amount = null;
		$this->original = null;
	}
}
