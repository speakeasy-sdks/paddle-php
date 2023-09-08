<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class GetDiscountResponse
{
	
    public string $contentType;
    
    /**
     * $headers
     * 
     * @var ?array<string, array<string>> $headers
     */
	
    public ?array $headers = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * OK
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetDiscount200ApplicationJSON $getDiscount200ApplicationJSONObject
     */
	
    public ?GetDiscount200ApplicationJSON $getDiscount200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetDiscount404ApplicationJSON $getDiscount404ApplicationJSONObject
     */
	
    public ?GetDiscount404ApplicationJSON $getDiscount404ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getDiscount200ApplicationJSONObject = null;
		$this->getDiscount404ApplicationJSONObject = null;
	}
}