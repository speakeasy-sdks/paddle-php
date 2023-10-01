<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class ListTransactionsResponse
{
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
    
    /**
     * OK
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListTransactions200ApplicationJSON $listTransactions200ApplicationJSONObject
     */
	
    public ?ListTransactions200ApplicationJSON $listTransactions200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListTransactions401ApplicationJSON $listTransactions401ApplicationJSONObject
     */
	
    public ?ListTransactions401ApplicationJSON $listTransactions401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\ListTransactions500ApplicationJSON $listTransactions500ApplicationJSONObject
     */
	
    public ?ListTransactions500ApplicationJSON $listTransactions500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->listTransactions200ApplicationJSONObject = null;
		$this->listTransactions401ApplicationJSONObject = null;
		$this->listTransactions500ApplicationJSONObject = null;
	}
}
