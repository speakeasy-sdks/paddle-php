<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


/**
 * UpdateDiscount200ApplicationJSON - OK
 * 
 * @package paddle\Paddle\Models\Operations
 * @access public
 */
class UpdateDiscount200ApplicationJSON
{
    /**
     * Represents a discount entity.
     * 
     * @var \paddle\Paddle\Models\Shared\Discount $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Discount')]
    public \paddle\Paddle\Models\Shared\Discount $data;
    
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
		$this->data = new \paddle\Paddle\Models\Shared\Discount();
		$this->meta = new \paddle\Paddle\Models\Shared\Meta();
	}
}
