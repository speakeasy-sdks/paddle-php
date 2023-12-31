<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * NotificationSettingUpdate - Represents a notification destination.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class NotificationSettingUpdate
{
    /**
     * Whether Paddle should try to deliver events to this notification destination.
     * 
     * @var ?bool $active
     */
	#[\JMS\Serializer\Annotation\SerializedName('active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $active = null;
    
    /**
     * API version that returned objects for events should conform to. Must be a valid version of the Paddle API. Cannot be a version older than your account default. Defaults to your account default if not included.
     * 
     * @var ?int $apiVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('api_version')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $apiVersion = null;
    
    /**
     * Short description for this notification destination. Shown in the Paddle Dashboard.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * Webhook endpoint URL or email address.
     * 
     * @var ?string $destination
     */
	#[\JMS\Serializer\Annotation\SerializedName('destination')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $destination = null;
    
    /**
     * Whether potentially sensitive fields should be sent to this notification destination.
     * 
     * @var ?bool $includeSensitiveFields
     */
	#[\JMS\Serializer\Annotation\SerializedName('include_sensitive_fields')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $includeSensitiveFields = null;
    
    /**
     * Subscribed events for this notification destination. When creating or updating a notification destination, pass an array of event type names only. Paddle returns the complete event type object.
     * 
     * @var ?array<string> $subscribedEvents
     */
	#[\JMS\Serializer\Annotation\SerializedName('subscribed_events')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $subscribedEvents = null;
    
	public function __construct()
	{
		$this->active = null;
		$this->apiVersion = null;
		$this->description = null;
		$this->destination = null;
		$this->includeSensitiveFields = null;
		$this->subscribedEvents = null;
	}
}
