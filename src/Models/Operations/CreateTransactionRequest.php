<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;

use \paddle\Paddle\Utils\SpeakeasyMetadata;
class CreateTransactionRequest
{
    /**
     * Include related entities in the response.
     * 
     * @var ?\paddle\Paddle\Models\Shared\IncludeTransaction $include
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=include')]
    public ?\paddle\Paddle\Models\Shared\IncludeTransaction $include = null;
    
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\paddle\Paddle\Models\Shared\TransactionCreate $transactionCreate = null;
    
	public function __construct()
	{
		$this->include = null;
		$this->transactionCreate = null;
	}
}
