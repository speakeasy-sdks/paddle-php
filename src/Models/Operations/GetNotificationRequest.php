<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;

use \paddle\Paddle\Utils\SpeakeasyMetadata;
class GetNotificationRequest
{
    /**
     * Paddle ID of the notification entity to work with.
     * 
     * @var string $notificationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=notification_id')]
    public string $notificationId;
    
	public function __construct()
	{
		$this->notificationId = "";
	}
}
