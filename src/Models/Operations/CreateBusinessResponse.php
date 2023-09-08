<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class CreateBusinessResponse
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
     * Created
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateBusiness201ApplicationJSON $createBusiness201ApplicationJSONObject
     */
	
    public ?CreateBusiness201ApplicationJSON $createBusiness201ApplicationJSONObject = null;
    
    /**
     * Error response for validation
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateBusiness400ApplicationJSON $createBusiness400ApplicationJSONObject
     */
	
    public ?CreateBusiness400ApplicationJSON $createBusiness400ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateBusiness401ApplicationJSON $createBusiness401ApplicationJSONObject
     */
	
    public ?CreateBusiness401ApplicationJSON $createBusiness401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateBusiness403ApplicationJSON $createBusiness403ApplicationJSONObject
     */
	
    public ?CreateBusiness403ApplicationJSON $createBusiness403ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateBusiness404ApplicationJSON $createBusiness404ApplicationJSONObject
     */
	
    public ?CreateBusiness404ApplicationJSON $createBusiness404ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateBusiness500ApplicationJSON $createBusiness500ApplicationJSONObject
     */
	
    public ?CreateBusiness500ApplicationJSON $createBusiness500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->createBusiness201ApplicationJSONObject = null;
		$this->createBusiness400ApplicationJSONObject = null;
		$this->createBusiness401ApplicationJSONObject = null;
		$this->createBusiness403ApplicationJSONObject = null;
		$this->createBusiness404ApplicationJSONObject = null;
		$this->createBusiness500ApplicationJSONObject = null;
	}
}