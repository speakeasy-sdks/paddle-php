<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class ErrorValidationErrors
{
	#[\JMS\Serializer\Annotation\SerializedName('field')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $field;
    
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
	public function __construct()
	{
		$this->field = "";
		$this->message = "";
	}
}
