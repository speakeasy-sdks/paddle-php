<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class ResumeSubscriptionResponse
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
     * If the subscription is locked and can not be changed. This happens 30 min before the renewal time.
     * 
     * @var ?\paddle\Paddle\Models\Shared\Error $error
     */
	
    public ?\paddle\Paddle\Models\Shared\Error $error = null;
    
    /**
     * OK
     * 
     * @var ?\paddle\Paddle\Models\Operations\ResumeSubscription200ApplicationJSON $resumeSubscription200ApplicationJSONObject
     */
	
    public ?ResumeSubscription200ApplicationJSON $resumeSubscription200ApplicationJSONObject = null;
    
    /**
     * Error response for validation
     * 
     * @var ?\paddle\Paddle\Models\Operations\ResumeSubscription400ApplicationJSON $resumeSubscription400ApplicationJSONObject
     */
	
    public ?ResumeSubscription400ApplicationJSON $resumeSubscription400ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ResumeSubscription401ApplicationJSON $resumeSubscription401ApplicationJSONObject
     */
	
    public ?ResumeSubscription401ApplicationJSON $resumeSubscription401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ResumeSubscription500ApplicationJSON $resumeSubscription500ApplicationJSONObject
     */
	
    public ?ResumeSubscription500ApplicationJSON $resumeSubscription500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->error = null;
		$this->resumeSubscription200ApplicationJSONObject = null;
		$this->resumeSubscription400ApplicationJSONObject = null;
		$this->resumeSubscription401ApplicationJSONObject = null;
		$this->resumeSubscription500ApplicationJSONObject = null;
	}
}
