<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * Business - Represents a business entity.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class Business
{
    /**
     * Company number for this business.
     * 
     * @var ?string $companyNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('company_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyNumber = null;
    
    /**
     * List of contacts related to this business, typically used for sending invoices.
     * 
     * @var ?array<\paddle\Paddle\Models\Shared\BusinessContacts> $contacts
     */
	#[\JMS\Serializer\Annotation\SerializedName('contacts')]
    #[\JMS\Serializer\Annotation\Type('array<paddle\Paddle\Models\Shared\BusinessContacts>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $contacts = null;
    
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
     * Unique Paddle ID for this business entity, prefixed with `biz_`.
     * 
     * @var ?string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
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
     * @var ?\paddle\Paddle\Models\Shared\Schemasstatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\Schemasstatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Schemasstatus $status = null;
    
    /**
     * Tax or VAT Number for this business.
     * 
     * @var ?string $taxIdentifier
     */
	#[\JMS\Serializer\Annotation\SerializedName('tax_identifier')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $taxIdentifier = null;
    
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
		$this->companyNumber = null;
		$this->contacts = null;
		$this->createdAt = null;
		$this->id = null;
		$this->name = null;
		$this->status = null;
		$this->taxIdentifier = null;
		$this->updatedAt = null;
	}
}