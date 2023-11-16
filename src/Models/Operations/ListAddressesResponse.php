<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class ListAddressesResponse
{
    /**
     * OK
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListAddressesResponseBody $twoHundredApplicationJsonObject
     */
	
    public ?ListAddressesResponseBody $twoHundredApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListAddressesAddressesResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?ListAddressesAddressesResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListAddressesAddressesResponseResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?ListAddressesAddressesResponseResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListAddressesAddressesResponse404ResponseBody $fourHundredAndFourApplicationJsonObject
     */
	
    public ?ListAddressesAddressesResponse404ResponseBody $fourHundredAndFourApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListAddressesAddressesResponse500ResponseBody $fiveHundredApplicationJsonObject
     */
	
    public ?ListAddressesAddressesResponse500ResponseBody $fiveHundredApplicationJsonObject = null;
    
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * $headers
     * 
     * @var array<string, array<string>> $headers
     */
	
    public array $headers;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;
    
	public function __construct()
	{
		$this->twoHundredApplicationJsonObject = null;
		$this->fourHundredAndOneApplicationJsonObject = null;
		$this->fourHundredAndThreeApplicationJsonObject = null;
		$this->fourHundredAndFourApplicationJsonObject = null;
		$this->fiveHundredApplicationJsonObject = null;
		$this->contentType = "";
		$this->headers = [];
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
