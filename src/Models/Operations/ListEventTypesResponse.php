<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class ListEventTypesResponse
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
     * @var ?\paddle\Paddle\Models\Operations\ListEventTypes200ApplicationJSON $listEventTypes200ApplicationJSONObject
     */
	
    public ?ListEventTypes200ApplicationJSON $listEventTypes200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListEventTypes401ApplicationJSON $listEventTypes401ApplicationJSONObject
     */
	
    public ?ListEventTypes401ApplicationJSON $listEventTypes401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListEventTypes500ApplicationJSON $listEventTypes500ApplicationJSONObject
     */
	
    public ?ListEventTypes500ApplicationJSON $listEventTypes500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->listEventTypes200ApplicationJSONObject = null;
		$this->listEventTypes401ApplicationJSONObject = null;
		$this->listEventTypes500ApplicationJSONObject = null;
	}
}
