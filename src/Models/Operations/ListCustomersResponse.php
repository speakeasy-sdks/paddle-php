<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class ListCustomersResponse
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
     * @var ?\paddle\Paddle\Models\Operations\ListCustomers200ApplicationJSON $listCustomers200ApplicationJSONObject
     */
	
    public ?ListCustomers200ApplicationJSON $listCustomers200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListCustomers401ApplicationJSON $listCustomers401ApplicationJSONObject
     */
	
    public ?ListCustomers401ApplicationJSON $listCustomers401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListCustomers403ApplicationJSON $listCustomers403ApplicationJSONObject
     */
	
    public ?ListCustomers403ApplicationJSON $listCustomers403ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListCustomers404ApplicationJSON $listCustomers404ApplicationJSONObject
     */
	
    public ?ListCustomers404ApplicationJSON $listCustomers404ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListCustomers500ApplicationJSON $listCustomers500ApplicationJSONObject
     */
	
    public ?ListCustomers500ApplicationJSON $listCustomers500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->listCustomers200ApplicationJSONObject = null;
		$this->listCustomers401ApplicationJSONObject = null;
		$this->listCustomers403ApplicationJSONObject = null;
		$this->listCustomers404ApplicationJSONObject = null;
		$this->listCustomers500ApplicationJSONObject = null;
	}
}
