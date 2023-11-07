<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class CreateNotificationSettingResponse
{
    /**
     * Created
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateNotificationSettingResponseBody $twoHundredAndOneApplicationJsonObject
     */
	
    public ?CreateNotificationSettingResponseBody $twoHundredAndOneApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateNotificationSettingNotificationsResponseBody $fourHundredApplicationJsonObject
     */
	
    public ?CreateNotificationSettingNotificationsResponseBody $fourHundredApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateNotificationSettingNotificationsResponseResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?CreateNotificationSettingNotificationsResponseResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateNotificationSettingNotificationsResponse500ResponseBody $fiveHundredApplicationJsonObject
     */
	
    public ?CreateNotificationSettingNotificationsResponse500ResponseBody $fiveHundredApplicationJsonObject = null;
    
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
    
	public function __construct()
	{
		$this->twoHundredAndOneApplicationJsonObject = null;
		$this->fourHundredApplicationJsonObject = null;
		$this->fourHundredAndOneApplicationJsonObject = null;
		$this->fiveHundredApplicationJsonObject = null;
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
