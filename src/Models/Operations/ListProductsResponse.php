<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class ListProductsResponse
{
    /**
     * OK
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListProductsResponseBody $twoHundredApplicationJsonObject
     */
	
    public ?ListProductsResponseBody $twoHundredApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListProductsProductsResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?ListProductsProductsResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListProductsProductsResponseResponseBody $fiveHundredApplicationJsonObject
     */
	
    public ?ListProductsProductsResponseResponseBody $fiveHundredApplicationJsonObject = null;
    
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
		$this->fiveHundredApplicationJsonObject = null;
		$this->contentType = "";
		$this->headers = [];
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
