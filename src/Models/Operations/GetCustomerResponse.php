<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class GetCustomerResponse
{
    /**
     * OK
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetCustomerResponseBody $twoHundredApplicationJsonObject
     */
	
    public ?GetCustomerResponseBody $twoHundredApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetCustomerCustomersResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?GetCustomerCustomersResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetCustomerCustomersResponseResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?GetCustomerCustomersResponseResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetCustomerCustomersResponse404ResponseBody $fourHundredAndFourApplicationJsonObject
     */
	
    public ?GetCustomerCustomersResponse404ResponseBody $fourHundredAndFourApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\GetCustomerCustomersResponse500ResponseBody $fiveHundredApplicationJsonObject
     */
	
    public ?GetCustomerCustomersResponse500ResponseBody $fiveHundredApplicationJsonObject = null;
    
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
