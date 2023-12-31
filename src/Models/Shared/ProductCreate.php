<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class ProductCreate
{
    /**
     * Your own structured key-value data.
     * 
     * @var ?\paddle\Paddle\Models\Shared\CustomData $customData
     */
	#[\JMS\Serializer\Annotation\SerializedName('custom_data')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\CustomData')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CustomData $customData = null;
    
    /**
     * Short description for this product. Included in the checkout and on some customer documents.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * Image for this product. Included in the checkout and on some customer documents.
     * 
     * @var ?string $imageUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('image_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $imageUrl = null;
    
    /**
     * Name of this product.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * Tax category for this product. Used for charging the correct rate of tax. Selected tax category must be enabled on your Paddle account.
     * 
     * @var \paddle\Paddle\Models\Shared\TaxCategory1 $taxCategory
     */
	#[\JMS\Serializer\Annotation\SerializedName('tax_category')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\TaxCategory1>')]
    public TaxCategory1 $taxCategory;
    
	public function __construct()
	{
		$this->customData = null;
		$this->description = null;
		$this->imageUrl = null;
		$this->name = "";
		$this->taxCategory = \paddle\Paddle\Models\Shared\TaxCategory1::DigitalGoods;
	}
}
