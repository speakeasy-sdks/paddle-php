<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class CustomerBalance
{
    /**
     * Total amount of credit available to use.
     * 
     * @var ?string $available
     */
	#[\JMS\Serializer\Annotation\SerializedName('available')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $available = null;
    
    /**
     * Total amount of credit temporarily reserved for `billed` transactions.
     * 
     * @var ?string $reserved
     */
	#[\JMS\Serializer\Annotation\SerializedName('reserved')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $reserved = null;
    
    /**
     * Total amount of credit used.
     * 
     * @var ?string $used
     */
	#[\JMS\Serializer\Annotation\SerializedName('used')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $used = null;
    
	public function __construct()
	{
		$this->available = null;
		$this->reserved = null;
		$this->used = null;
	}
}
