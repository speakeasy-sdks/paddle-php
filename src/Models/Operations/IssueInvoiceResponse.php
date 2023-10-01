<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle\Models\Operations;


class IssueInvoiceResponse
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
     * @var ?\paddle\Paddle\Models\Operations\IssueInvoice200ApplicationJSON $issueInvoice200ApplicationJSONObject
     */
	
    public ?IssueInvoice200ApplicationJSON $issueInvoice200ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\IssueInvoice400ApplicationJSON $issueInvoice400ApplicationJSONObject
     */
	
    public ?IssueInvoice400ApplicationJSON $issueInvoice400ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\IssueInvoice401ApplicationJSON $issueInvoice401ApplicationJSONObject
     */
	
    public ?IssueInvoice401ApplicationJSON $issueInvoice401ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\IssueInvoice404ApplicationJSON $issueInvoice404ApplicationJSONObject
     */
	
    public ?IssueInvoice404ApplicationJSON $issueInvoice404ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\IssueInvoice422ApplicationJSON $issueInvoice422ApplicationJSONObject
     */
	
    public ?IssueInvoice422ApplicationJSON $issueInvoice422ApplicationJSONObject = null;
    
    /**
     * General error response
     * 
     * @var ?\paddle\Paddle\Models\Operations\IssueInvoice500ApplicationJSON $issueInvoice500ApplicationJSONObject
     */
	
    public ?IssueInvoice500ApplicationJSON $issueInvoice500ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->issueInvoice200ApplicationJSONObject = null;
		$this->issueInvoice400ApplicationJSONObject = null;
		$this->issueInvoice401ApplicationJSONObject = null;
		$this->issueInvoice404ApplicationJSONObject = null;
		$this->issueInvoice422ApplicationJSONObject = null;
		$this->issueInvoice500ApplicationJSONObject = null;
	}
}
