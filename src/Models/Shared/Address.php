<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * Address - Represents an address entity.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class Address
{
    /**
     * City of this address.
     * 
     * @var ?string $city
     */
	#[\JMS\Serializer\Annotation\SerializedName('city')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $city = null;
    
    /**
     * Supported two-letter ISO 3166-1 alpha-2 country code.
     * 
     * @var ?\paddle\Paddle\Models\Shared\CountryCode2 $countryCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('country_code')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\CountryCode2>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CountryCode2 $countryCode = null;
    
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
     * Memorable description for this address.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * First line of this address.
     * 
     * @var ?string $firstLine
     */
	#[\JMS\Serializer\Annotation\SerializedName('first_line')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $firstLine = null;
    
    /**
     * Unique Paddle ID for this address entity, prefixed with `add_`.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * ZIP or postal code of this address. Required for some countries.
     * 
     * @var ?string $postalCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('postal_code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $postalCode = null;
    
    /**
     * State, county, or region of this address.
     * 
     * @var ?string $region
     */
	#[\JMS\Serializer\Annotation\SerializedName('region')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $region = null;
    
    /**
     * Second line of this address.
     * 
     * @var ?string $secondLine
     */
	#[\JMS\Serializer\Annotation\SerializedName('second_line')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $secondLine = null;
    
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
		$this->city = null;
		$this->countryCode = null;
		$this->createdAt = null;
		$this->description = null;
		$this->firstLine = null;
		$this->id = null;
		$this->postalCode = null;
		$this->region = null;
		$this->secondLine = null;
		$this->status = null;
		$this->updatedAt = null;
	}
}
