<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class GetSubscriptionUpdatePaymentMethodTransactionResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * $headers
     * 
     * @var ?array<string, array<string>> $headers
     */
	
    public ?array $headers = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * OK
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransaction200ApplicationJSONOutput $getSubscriptionUpdatePaymentMethodTransaction200ApplicationJSONObject
     */
	
    public ?GetSubscriptionUpdatePaymentMethodTransaction200ApplicationJSONOutput $getSubscriptionUpdatePaymentMethodTransaction200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransaction401ApplicationJSON $getSubscriptionUpdatePaymentMethodTransaction401ApplicationJSONObject
     */
	
    public ?GetSubscriptionUpdatePaymentMethodTransaction401ApplicationJSON $getSubscriptionUpdatePaymentMethodTransaction401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransaction403ApplicationJSON $getSubscriptionUpdatePaymentMethodTransaction403ApplicationJSONObject
     */
	
    public ?GetSubscriptionUpdatePaymentMethodTransaction403ApplicationJSON $getSubscriptionUpdatePaymentMethodTransaction403ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransaction409ApplicationJSON $getSubscriptionUpdatePaymentMethodTransaction409ApplicationJSONObject
     */
	
    public ?GetSubscriptionUpdatePaymentMethodTransaction409ApplicationJSON $getSubscriptionUpdatePaymentMethodTransaction409ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransaction500ApplicationJSON $getSubscriptionUpdatePaymentMethodTransaction500ApplicationJSONObject
     */
	
    public ?GetSubscriptionUpdatePaymentMethodTransaction500ApplicationJSON $getSubscriptionUpdatePaymentMethodTransaction500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getSubscriptionUpdatePaymentMethodTransaction200ApplicationJSONObject = null;
		$this->getSubscriptionUpdatePaymentMethodTransaction401ApplicationJSONObject = null;
		$this->getSubscriptionUpdatePaymentMethodTransaction403ApplicationJSONObject = null;
		$this->getSubscriptionUpdatePaymentMethodTransaction409ApplicationJSONObject = null;
		$this->getSubscriptionUpdatePaymentMethodTransaction500ApplicationJSONObject = null;
	}
}