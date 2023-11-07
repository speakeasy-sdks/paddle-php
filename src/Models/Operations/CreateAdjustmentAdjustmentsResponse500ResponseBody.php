<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


/**
 * CreateAdjustmentAdjustmentsResponse500ResponseBody - General error response
 * 
 * @package paddle\Paddle\Models\Operations
 * @access public
 */
class CreateAdjustmentAdjustmentsResponse500ResponseBody
{
	#[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('paddle\Paddle\Models\Shared\Error')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\paddle\Paddle\Models\Shared\Error $error = null;
    
	public function __construct()
	{
		$this->error = null;
	}
}
