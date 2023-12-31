<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class UpdateAddressResponse
{
    /**
     * OK
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddressResponseBody $twoHundredApplicationJsonObject
     */
	
    public ?UpdateAddressResponseBody $twoHundredApplicationJsonObject = null;
    
    /**
     * Error response for validation
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddressAddressesResponseBody $fourHundredApplicationJsonObject
     */
	
    public ?UpdateAddressAddressesResponseBody $fourHundredApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddressAddressesResponseResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?UpdateAddressAddressesResponseResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddressAddressesResponse403ResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?UpdateAddressAddressesResponse403ResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddressAddressesResponse404ResponseBody $fourHundredAndFourApplicationJsonObject
     */
	
    public ?UpdateAddressAddressesResponse404ResponseBody $fourHundredAndFourApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\UpdateAddressAddressesResponse500ResponseBody $fiveHundredApplicationJsonObject
     */
	
    public ?UpdateAddressAddressesResponse500ResponseBody $fiveHundredApplicationJsonObject = null;
    
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
		$this->fourHundredApplicationJsonObject = null;
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
