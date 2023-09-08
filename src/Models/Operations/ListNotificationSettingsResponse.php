<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class ListNotificationSettingsResponse
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
     * @var ?\paddle\Paddle\Models\Operations\ListNotificationSettings200ApplicationJSON $listNotificationSettings200ApplicationJSONObject
     */
	
    public ?ListNotificationSettings200ApplicationJSON $listNotificationSettings200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListNotificationSettings401ApplicationJSON $listNotificationSettings401ApplicationJSONObject
     */
	
    public ?ListNotificationSettings401ApplicationJSON $listNotificationSettings401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListNotificationSettings500ApplicationJSON $listNotificationSettings500ApplicationJSONObject
     */
	
    public ?ListNotificationSettings500ApplicationJSON $listNotificationSettings500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->listNotificationSettings200ApplicationJSONObject = null;
		$this->listNotificationSettings401ApplicationJSONObject = null;
		$this->listNotificationSettings500ApplicationJSONObject = null;
	}
}
