<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class CreateSubscriptionChargePreviewResponse
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
     * @var ?\paddle\Paddle\Models\Operations\CreateSubscriptionChargePreview200ApplicationJSON $createSubscriptionChargePreview200ApplicationJSONObject
     */
	
    public ?CreateSubscriptionChargePreview200ApplicationJSON $createSubscriptionChargePreview200ApplicationJSONObject = null;
    
    /**
     * Error response for validation
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateSubscriptionChargePreview400ApplicationJSON $createSubscriptionChargePreview400ApplicationJSONObject
     */
	
    public ?CreateSubscriptionChargePreview400ApplicationJSON $createSubscriptionChargePreview400ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateSubscriptionChargePreview500ApplicationJSON $createSubscriptionChargePreview500ApplicationJSONObject
     */
	
    public ?CreateSubscriptionChargePreview500ApplicationJSON $createSubscriptionChargePreview500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->createSubscriptionChargePreview200ApplicationJSONObject = null;
		$this->createSubscriptionChargePreview400ApplicationJSONObject = null;
		$this->createSubscriptionChargePreview500ApplicationJSONObject = null;
	}
}
