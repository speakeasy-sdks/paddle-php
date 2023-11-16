<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * CustomerCreate - Represents a customer entity.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class CustomerCreate
{
    /**
     * Email address for this entity.
     * 
     * @var string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;
    
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
     * Full name.
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	public function __construct()
	{
		$this->email = "";
		$this->id = null;
		$this->locale = null;
		$this->name = null;
	}
}
