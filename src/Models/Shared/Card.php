<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * Card - Information about the credit or debit card used to pay. Only returned when `type` is `card`.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class Card
{
    /**
     * Month of the expiry date of the card used to pay.
     * 
     * @var ?float $expiryMonth
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiry_month')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $expiryMonth = null;
    
    /**
     * Year of the expiry year of the card used to pay.
     * 
     * @var ?float $expiryYear
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiry_year')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $expiryYear = null;
    
    /**
     * Last four digits of the card used to pay.
     * 
     * @var ?string $last4
     */
	#[\JMS\Serializer\Annotation\SerializedName('last4')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $last4 = null;
    
    /**
     * Type of credit or debit card used to pay.
     * 
     * @var ?\paddle\Paddle\Models\Shared\MethodDetailsSchemasType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\MethodDetailsSchemasType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?MethodDetailsSchemasType $type = null;
    
	public function __construct()
	{
		$this->expiryMonth = null;
		$this->expiryYear = null;
		$this->last4 = null;
		$this->type = null;
	}
}
