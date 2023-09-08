<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;

use \paddle\Paddle\Utils\SpeakeasyMetadata;
class PostNotificationSettingsNotificationSettingIdReplayRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?PostNotificationSettingsNotificationSettingIdReplayRequestBody $requestBody = null;
    
    /**
     * Paddle ID of the notification setting entity (notification destination) to work with.
     * 
     * @var string $notificationSettingId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=notification_setting_id')]
    public string $notificationSettingId;
    
	public function __construct()
	{
		$this->requestBody = null;
		$this->notificationSettingId = "";
	}
}