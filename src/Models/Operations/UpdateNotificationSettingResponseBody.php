<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


/**
 * UpdateNotificationSettingResponseBody - OK
 * 
 * @package paddle\Paddle\Models\Operations
 * @access public
 */
class UpdateNotificationSettingResponseBody
{
    /**
     * Represents a notification destination.
     * 
     * @var \paddle\Paddle\Models\Shared\NotificationSettingComplete $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\NotificationSettingComplete')]
    public \paddle\Paddle\Models\Shared\NotificationSettingComplete $data;
    
    /**
     * Information about this response.
     * 
     * @var \paddle\Paddle\Models\Shared\Meta $meta
     */
	#[\JMS\Serializer\Annotation\SerializedName('meta')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Meta')]
    public \paddle\Paddle\Models\Shared\Meta $meta;
    
	public function __construct()
	{
		$this->data = new \paddle\Paddle\Models\Shared\NotificationSettingComplete();
		$this->meta = new \paddle\Paddle\Models\Shared\Meta();
	}
}
