<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * Breakdown - Breakdown of the total adjustments by adjustment action.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class Breakdown
{
    /**
     * Total amount of chargeback adjustments.
     * 
     * @var ?string $chargeback
     */
	#[\JMS\Serializer\Annotation\SerializedName('chargeback')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $chargeback = null;
    
    /**
     * Total amount of credit adjustments.
     * 
     * @var ?string $credit
     */
	#[\JMS\Serializer\Annotation\SerializedName('credit')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $credit = null;
    
    /**
     * Total amount of refund adjustments.
     * 
     * @var ?string $refund
     */
	#[\JMS\Serializer\Annotation\SerializedName('refund')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $refund = null;
    
	public function __construct()
	{
		$this->chargeback = null;
		$this->credit = null;
		$this->refund = null;
	}
}
