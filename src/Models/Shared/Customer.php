<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * Customer - Represents a customer entity.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class Customer
{
    /**
     * RFC 3339 datetime string of when this entity was created. Set automatically by Paddle.
     * 
     * @var ?\DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * Email address for this entity.
     * 
     * @var ?string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
    /**
     * Unique Paddle ID for this customer entity, prefixed with `ctm_`.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * Valid IETF BCP 47 short form locale tag. If omitted, defaults to `en`.
     * 
     * @var ?string $locale
     */
	#[\JMS\Serializer\Annotation\SerializedName('locale')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $locale = null;
    
    /**
     * Whether this customer opted into marketing from you. 
     * 
     * Set to `true` by Paddle where a customer checks the marketing consent box when using Paddle Checkout; `false` otherwise.
     * 
     * @var ?bool $marketingConsent
     */
	#[\JMS\Serializer\Annotation\SerializedName('marketing_consent')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $marketingConsent = null;
    
    /**
     * Full name.
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * Whether this entity can be used in Paddle.
     * 
     * @var ?\paddle\Paddle\Models\Shared\SchemaStatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\SchemaStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SchemaStatus $status = null;
    
    /**
     * RFC 3339 datetime string of when this entity was updated. Set automatically by Paddle.
     * 
     * @var ?\DateTime $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->createdAt = null;
		$this->email = null;
		$this->id = null;
		$this->locale = null;
		$this->marketingConsent = null;
		$this->name = null;
		$this->status = null;
		$this->updatedAt = null;
	}
}
