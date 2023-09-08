<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class GetBusinessResponse
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
     * @var ?\paddle\Paddle\Models\Operations\GetBusiness200ApplicationJSON $getBusiness200ApplicationJSONObject
     */
	
    public ?GetBusiness200ApplicationJSON $getBusiness200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetBusiness401ApplicationJSON $getBusiness401ApplicationJSONObject
     */
	
    public ?GetBusiness401ApplicationJSON $getBusiness401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetBusiness403ApplicationJSON $getBusiness403ApplicationJSONObject
     */
	
    public ?GetBusiness403ApplicationJSON $getBusiness403ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetBusiness404ApplicationJSON $getBusiness404ApplicationJSONObject
     */
	
    public ?GetBusiness404ApplicationJSON $getBusiness404ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetBusiness500ApplicationJSON $getBusiness500ApplicationJSONObject
     */
	
    public ?GetBusiness500ApplicationJSON $getBusiness500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getBusiness200ApplicationJSONObject = null;
		$this->getBusiness401ApplicationJSONObject = null;
		$this->getBusiness403ApplicationJSONObject = null;
		$this->getBusiness404ApplicationJSONObject = null;
		$this->getBusiness500ApplicationJSONObject = null;
	}
}