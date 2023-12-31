<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Shared;


/**
 * TransactionIncludesCheckout - Paddle Checkout details for this transaction. Always included for automatically-collected transactions. Included where `billing_details.enable_checkout` is `true` for manually-collected transactions.
 * 
 * @package paddle\Paddle\Models\Shared
 * @access public
 */
class TransactionIncludesCheckout
{
    /**
     * Paddle Checkout URL for this transaction, composed of your default payment URL + `_?txn=` and the Paddle ID for this transaction.
     * 
     * @var ?string $url
     */
	#[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $url = null;
    
	public function __construct()
	{
		$this->url = null;
	}
}
