<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class ListNotificationsResponse
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
     * @var ?\paddle\Paddle\Models\Operations\ListNotifications200ApplicationJSON $listNotifications200ApplicationJSONObject
     */
	
    public ?ListNotifications200ApplicationJSON $listNotifications200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListNotifications401ApplicationJSON $listNotifications401ApplicationJSONObject
     */
	
    public ?ListNotifications401ApplicationJSON $listNotifications401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListNotifications500ApplicationJSON $listNotifications500ApplicationJSONObject
     */
	
    public ?ListNotifications500ApplicationJSON $listNotifications500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->listNotifications200ApplicationJSONObject = null;
		$this->listNotifications401ApplicationJSONObject = null;
		$this->listNotifications500ApplicationJSONObject = null;
	}
}
