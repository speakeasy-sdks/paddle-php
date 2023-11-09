<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


class BillingPeriod
{
	#[\JMS\Serializer\Annotation\SerializedName('ends_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    public \DateTime $endsAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('starts_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    public \DateTime $startsAt;
    
    /**
     * The billing period type is set to `billing` for subscriptions.
     * 
     * @var \paddle\Paddle\Models\Shared\InvoiceType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<paddle\Paddle\Models\Shared\InvoiceType>')]
    public InvoiceType $type;
    
	public function __construct()
	{
		$this->endsAt = new \DateTime();
		$this->startsAt = new \DateTime();
		$this->type = \paddle\Paddle\Models\Shared\InvoiceType::Billing;
	}
}