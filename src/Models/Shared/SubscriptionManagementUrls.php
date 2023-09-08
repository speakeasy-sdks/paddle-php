<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * SubscriptionManagementUrls - Public URLs that customers can use to make changes to this subscription.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class SubscriptionManagementUrls
{
    /**
     * Public URL that lets customers cancel this subscription.
     * 
     * @var string $cancel
     */
	#[\JMS\Serializer\Annotation\SerializedName('cancel')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $cancel;
    
    /**
     * Public URL that lets customers update the payment method for this subscription.
     * 
     * @var ?string $updatePaymentMethod
     */
	#[\JMS\Serializer\Annotation\SerializedName('update_payment_method')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $updatePaymentMethod = null;
    
	public function __construct()
	{
		$this->cancel = "";
		$this->updatePaymentMethod = null;
	}
}