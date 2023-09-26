<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class ListNotificationLogsResponse
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
     * @var ?\paddle\Paddle\Models\Operations\ListNotificationLogs200ApplicationJSON $listNotificationLogs200ApplicationJSONObject
     */
	
    public ?ListNotificationLogs200ApplicationJSON $listNotificationLogs200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListNotificationLogs401ApplicationJSON $listNotificationLogs401ApplicationJSONObject
     */
	
    public ?ListNotificationLogs401ApplicationJSON $listNotificationLogs401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListNotificationLogs404ApplicationJSON $listNotificationLogs404ApplicationJSONObject
     */
	
    public ?ListNotificationLogs404ApplicationJSON $listNotificationLogs404ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListNotificationLogs500ApplicationJSON $listNotificationLogs500ApplicationJSONObject
     */
	
    public ?ListNotificationLogs500ApplicationJSON $listNotificationLogs500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->listNotificationLogs200ApplicationJSONObject = null;
		$this->listNotificationLogs401ApplicationJSONObject = null;
		$this->listNotificationLogs404ApplicationJSONObject = null;
		$this->listNotificationLogs500ApplicationJSONObject = null;
	}
}
