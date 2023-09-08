<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class CreateAdjustmentResponse
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
     * @var ?\paddle\Paddle\Models\Operations\CreateAdjustment201ApplicationJSON $createAdjustment201ApplicationJSONObject
     */
	
    public ?CreateAdjustment201ApplicationJSON $createAdjustment201ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateAdjustment400ApplicationJSON $createAdjustment400ApplicationJSONObject
     */
	
    public ?CreateAdjustment400ApplicationJSON $createAdjustment400ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateAdjustment404ApplicationJSON $createAdjustment404ApplicationJSONObject
     */
	
    public ?CreateAdjustment404ApplicationJSON $createAdjustment404ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateAdjustment409ApplicationJSON $createAdjustment409ApplicationJSONObject
     */
	
    public ?CreateAdjustment409ApplicationJSON $createAdjustment409ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateAdjustment500ApplicationJSON $createAdjustment500ApplicationJSONObject
     */
	
    public ?CreateAdjustment500ApplicationJSON $createAdjustment500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->createAdjustment201ApplicationJSONObject = null;
		$this->createAdjustment400ApplicationJSONObject = null;
		$this->createAdjustment404ApplicationJSONObject = null;
		$this->createAdjustment409ApplicationJSONObject = null;
		$this->createAdjustment500ApplicationJSONObject = null;
	}
}
