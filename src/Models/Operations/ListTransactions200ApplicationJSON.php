<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


/**
 * ListTransactions200ApplicationJSON - OK
 * 
 * @package paddle\Paddle\Models\Operations
 * @access public
 */
class ListTransactions200ApplicationJSON
{
    /**
     * $data
     * 
     * @var array<\paddle\Paddle\Models\Shared\TransactionIncludes> $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<paddle\Paddle\Models\Shared\TransactionIncludes>')]
    public array $data;
    
    /**
     * Information about this response.
     * 
     * @var \paddle\Paddle\Models\Shared\MetaPaginated $meta
     */
	#[\JMS\Serializer\Annotation\SerializedName('meta')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\MetaPaginated')]
    public \paddle\Paddle\Models\Shared\MetaPaginated $meta;
    
	public function __construct()
	{
		$this->data = [];
		$this->meta = new \paddle\Paddle\Models\Shared\MetaPaginated();
	}
}
