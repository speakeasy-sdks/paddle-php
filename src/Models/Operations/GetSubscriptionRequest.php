<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;

use \paddle\Paddle\Utils\SpeakeasyMetadata;
class GetSubscriptionRequest
{
    /**
     * Include related entities in the response.
     * 
     * @var ?\paddle\Paddle\Models\Shared\IncludeSubscription $include
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=include')]
    public ?\paddle\Paddle\Models\Shared\IncludeSubscription $include = null;
    
    /**
     * Paddle ID of the subscription entity to work with.
     * 
     * @var string $subscriptionId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=subscription_id')]
    public string $subscriptionId;
    
	public function __construct()
	{
		$this->include = null;
		$this->subscriptionId = "";
	}
}
