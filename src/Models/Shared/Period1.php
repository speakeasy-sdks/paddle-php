<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * Period1 - Defines a period of time
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class Period1
{
	#[\JMS\Serializer\Annotation\SerializedName('frequency')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $frequency;
    
	#[\JMS\Serializer\Annotation\SerializedName('interval')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\Interval>')]
    public Interval $interval;
    
	public function __construct()
	{
		$this->frequency = 0;
		$this->interval = \paddle\Paddle\Models\Shared\Interval::Day;
	}
}
