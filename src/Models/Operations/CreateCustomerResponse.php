<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class CreateCustomerResponse
{
    /**
     * Created
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateCustomerResponseBody $twoHundredAndOneApplicationJsonObject
     */
	
    public ?CreateCustomerResponseBody $twoHundredAndOneApplicationJsonObject = null;
    
    /**
     * Error response for validation
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateCustomerCustomersResponseBody $fourHundredApplicationJsonObject
     */
	
    public ?CreateCustomerCustomersResponseBody $fourHundredApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateCustomerCustomersResponseResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?CreateCustomerCustomersResponseResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateCustomerCustomersResponse403ResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?CreateCustomerCustomersResponse403ResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\CreateCustomerCustomersResponse500ResponseBody $fiveHundredApplicationJsonObject
     */
	
    public ?CreateCustomerCustomersResponse500ResponseBody $fiveHundredApplicationJsonObject = null;
    
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * $headers
     * 
     * @var ?array<string, array<string>> $headers
     */
	
    public ?array $headers = null;
    
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
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->twoHundredAndOneApplicationJsonObject = null;
		$this->fourHundredApplicationJsonObject = null;
		$this->fourHundredAndOneApplicationJsonObject = null;
		$this->fourHundredAndThreeApplicationJsonObject = null;
		$this->fiveHundredApplicationJsonObject = null;
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
