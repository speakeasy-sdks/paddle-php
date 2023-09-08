<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle;

/**
 * Paddle - Hashicups: Example Hashicups through Speakeasy
 * 
 * https://docs.speakeasyapi.dev - The Speakeasy Platform Documentation
 * 
 * @package paddle\Paddle
 * @access public
 * @see https://docs.speakeasyapi.dev
 */
class Paddle
{
	public const SERVERS = [
		'https://example.com',
	];
  	
	public Order $order;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return PaddleBuilder
	 */
	public static function builder(): PaddleBuilder
	{
		return new PaddleBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->order = new Order($this->sdkConfiguration);
	}
}