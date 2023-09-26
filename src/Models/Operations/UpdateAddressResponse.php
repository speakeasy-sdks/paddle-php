<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class UpdateAddressResponse
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
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddress200ApplicationJSON $updateAddress200ApplicationJSONObject
     */
	
    public ?UpdateAddress200ApplicationJSON $updateAddress200ApplicationJSONObject = null;
    
    /**
     * Error response for validation
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddress400ApplicationJSON $updateAddress400ApplicationJSONObject
     */
	
    public ?UpdateAddress400ApplicationJSON $updateAddress400ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddress401ApplicationJSON $updateAddress401ApplicationJSONObject
     */
	
    public ?UpdateAddress401ApplicationJSON $updateAddress401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddress403ApplicationJSON $updateAddress403ApplicationJSONObject
     */
	
    public ?UpdateAddress403ApplicationJSON $updateAddress403ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddress404ApplicationJSON $updateAddress404ApplicationJSONObject
     */
	
    public ?UpdateAddress404ApplicationJSON $updateAddress404ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddress500ApplicationJSON $updateAddress500ApplicationJSONObject
     */
	
    public ?UpdateAddress500ApplicationJSON $updateAddress500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->updateAddress200ApplicationJSONObject = null;
		$this->updateAddress400ApplicationJSONObject = null;
		$this->updateAddress401ApplicationJSONObject = null;
		$this->updateAddress403ApplicationJSONObject = null;
		$this->updateAddress404ApplicationJSONObject = null;
		$this->updateAddress500ApplicationJSONObject = null;
	}
}
