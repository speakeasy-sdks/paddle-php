<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


/**
 * CreateAddress201ApplicationJSON - Created
 * 
 * @package paddle\Paddle\Models\Operations
 * @access public
 */
class CreateAddress201ApplicationJSON
{
    /**
     * Represents an address entity.
     * 
     * @var \paddle\Paddle\Models\Shared\Address $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Address')]
    public \paddle\Paddle\Models\Shared\Address $data;
    
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
		$this->data = new \paddle\Paddle\Models\Shared\Address();
		$this->meta = new \paddle\Paddle\Models\Shared\Meta();
	}
}
