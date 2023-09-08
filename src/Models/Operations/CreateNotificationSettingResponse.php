<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class CreateNotificationSettingResponse
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
     * @var ?\paddle\Paddle\Models\Operations\CreateNotificationSetting201ApplicationJSON $createNotificationSetting201ApplicationJSONObject
     */
	
    public ?CreateNotificationSetting201ApplicationJSON $createNotificationSetting201ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateNotificationSetting400ApplicationJSON $createNotificationSetting400ApplicationJSONObject
     */
	
    public ?CreateNotificationSetting400ApplicationJSON $createNotificationSetting400ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateNotificationSetting401ApplicationJSON $createNotificationSetting401ApplicationJSONObject
     */
	
    public ?CreateNotificationSetting401ApplicationJSON $createNotificationSetting401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateNotificationSetting500ApplicationJSON $createNotificationSetting500ApplicationJSONObject
     */
	
    public ?CreateNotificationSetting500ApplicationJSON $createNotificationSetting500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->createNotificationSetting201ApplicationJSONObject = null;
		$this->createNotificationSetting400ApplicationJSONObject = null;
		$this->createNotificationSetting401ApplicationJSONObject = null;
		$this->createNotificationSetting500ApplicationJSONObject = null;
	}
}
