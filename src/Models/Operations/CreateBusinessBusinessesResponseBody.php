<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


/**
 * CreateBusinessBusinessesResponseBody - Error response for validation
 * 
 * @package paddle\Paddle\Models\Operations
 * @access public
 */
class CreateBusinessBusinessesResponseBody
{
	#[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\ErrorValidation')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\ErrorValidation $error = null;
    
	public function __construct()
	{
		$this->error = null;
	}
}
