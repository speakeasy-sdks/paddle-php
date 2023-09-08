<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class TimePeriod
{
    /**
     * RFC 3339 datetime string.
     * 
     * @var \DateTime $endsAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('ends_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $endsAt;
    
    /**
     * RFC 3339 datetime string.
     * 
     * @var \DateTime $startsAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('starts_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $startsAt;
    
	public function __construct()
	{
		$this->endsAt = new \DateTime();
		$this->startsAt = new \DateTime();
	}
}
