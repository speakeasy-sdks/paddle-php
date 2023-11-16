<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;

use \paddle\Paddle\Utils\SpeakeasyMetadata;
class CreateBusinessRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\paddle\Paddle\Models\Shared\BusinessCreate $businessCreate = null;
    
    /**
     * Paddle ID of the customer entity to work with.
     * 
     * @var string $customerId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=customer_id')]
    public string $customerId;
    
	public function __construct()
	{
		$this->businessCreate = null;
		$this->customerId = "";
	}
}
