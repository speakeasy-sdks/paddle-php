<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class UpdateCustomerResponse
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
     * @var ?\paddle\Paddle\Models\Operations\UpdateCustomer200ApplicationJSON $updateCustomer200ApplicationJSONObject
     */
	
    public ?UpdateCustomer200ApplicationJSON $updateCustomer200ApplicationJSONObject = null;
    
    /**
     * Error response for validation
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateCustomer400ApplicationJSON $updateCustomer400ApplicationJSONObject
     */
	
    public ?UpdateCustomer400ApplicationJSON $updateCustomer400ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateCustomer401ApplicationJSON $updateCustomer401ApplicationJSONObject
     */
	
    public ?UpdateCustomer401ApplicationJSON $updateCustomer401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateCustomer403ApplicationJSON $updateCustomer403ApplicationJSONObject
     */
	
    public ?UpdateCustomer403ApplicationJSON $updateCustomer403ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateCustomer404ApplicationJSON $updateCustomer404ApplicationJSONObject
     */
	
    public ?UpdateCustomer404ApplicationJSON $updateCustomer404ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateCustomer500ApplicationJSON $updateCustomer500ApplicationJSONObject
     */
	
    public ?UpdateCustomer500ApplicationJSON $updateCustomer500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->updateCustomer200ApplicationJSONObject = null;
		$this->updateCustomer400ApplicationJSONObject = null;
		$this->updateCustomer401ApplicationJSONObject = null;
		$this->updateCustomer403ApplicationJSONObject = null;
		$this->updateCustomer404ApplicationJSONObject = null;
		$this->updateCustomer500ApplicationJSONObject = null;
	}
}
