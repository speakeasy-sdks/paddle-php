<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;

use \paddle\Paddle\Utils\SpeakeasyMetadata;
class ListCreditBalancesRequest
{
    /**
     * Return entities that match the currency code. Use a comma separated list to specify multiple currency codes.
     * 
     * @var ?string $currencyCode
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=currency_code')]
    public ?string $currencyCode = null;
    
    /**
     * Paddle ID of the customer entity to work with.
     * 
     * @var string $customerId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=customer_id')]
    public string $customerId;
    
	public function __construct()
	{
		$this->currencyCode = null;
		$this->customerId = "";
	}
}
