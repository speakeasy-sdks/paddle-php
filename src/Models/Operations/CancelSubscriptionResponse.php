<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class CancelSubscriptionResponse
{
	
    public string $contentType;
    
    /**
     * $headers
     * 
     * @var ?array<string, array<string>> $headers
     */
	
    public ?array $headers = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * OK
     * 
     * @var ?\paddle\Paddle\Models\Operations\CancelSubscription200ApplicationJSON $cancelSubscription200ApplicationJSONObject
     */
	
    public ?CancelSubscription200ApplicationJSON $cancelSubscription200ApplicationJSONObject = null;
    
    /**
     * Error response for validation
     * 
     * @var ?\paddle\Paddle\Models\Operations\CancelSubscription400ApplicationJSON $cancelSubscription400ApplicationJSONObject
     */
	
    public ?CancelSubscription400ApplicationJSON $cancelSubscription400ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CancelSubscription401ApplicationJSON $cancelSubscription401ApplicationJSONObject
     */
	
    public ?CancelSubscription401ApplicationJSON $cancelSubscription401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CancelSubscription500ApplicationJSON $cancelSubscription500ApplicationJSONObject
     */
	
    public ?CancelSubscription500ApplicationJSON $cancelSubscription500ApplicationJSONObject = null;
    
    /**
     * If the subscription is locked and can not be changed. This happens 30 min before the renewal time.
     * 
     * @var ?\paddle\Paddle\Models\Shared\Error $error
     */
	
    public ?\paddle\Paddle\Models\Shared\Error $error = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->cancelSubscription200ApplicationJSONObject = null;
		$this->cancelSubscription400ApplicationJSONObject = null;
		$this->cancelSubscription401ApplicationJSONObject = null;
		$this->cancelSubscription500ApplicationJSONObject = null;
		$this->error = null;
	}
}