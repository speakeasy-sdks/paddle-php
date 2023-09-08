<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class GetAddressResponse
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
     * @var ?\paddle\Paddle\Models\Operations\GetAddress200ApplicationJSON $getAddress200ApplicationJSONObject
     */
	
    public ?GetAddress200ApplicationJSON $getAddress200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetAddress400ApplicationJSON $getAddress400ApplicationJSONObject
     */
	
    public ?GetAddress400ApplicationJSON $getAddress400ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetAddress401ApplicationJSON $getAddress401ApplicationJSONObject
     */
	
    public ?GetAddress401ApplicationJSON $getAddress401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetAddress403ApplicationJSON $getAddress403ApplicationJSONObject
     */
	
    public ?GetAddress403ApplicationJSON $getAddress403ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetAddress404ApplicationJSON $getAddress404ApplicationJSONObject
     */
	
    public ?GetAddress404ApplicationJSON $getAddress404ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetAddress500ApplicationJSON $getAddress500ApplicationJSONObject
     */
	
    public ?GetAddress500ApplicationJSON $getAddress500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getAddress200ApplicationJSONObject = null;
		$this->getAddress400ApplicationJSONObject = null;
		$this->getAddress401ApplicationJSONObject = null;
		$this->getAddress403ApplicationJSONObject = null;
		$this->getAddress404ApplicationJSONObject = null;
		$this->getAddress500ApplicationJSONObject = null;
	}
}