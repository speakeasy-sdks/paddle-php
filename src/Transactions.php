<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle;

class Transactions 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Create a transaction
     * 
     * Creates a new transaction.
     * 
     * Transactions are typically created with the status of `draft` or `ready` initially:
     * 
     * * Draft transactions have `items` against them, but don't have all of the required fields for billing. Paddle creates draft transactions automatically when a checkout is opened.
     * * Paddle automatically marks transactions as `ready` when all of the required fields are present for billing. This includes `customer_id` and `address_id` for automatically-collected transactions, and `billing_details` for manually-collected transactions.
     * 
     * The `collection_mode` against a transaction determines how Paddle tries to collect for payment:
     * 
     * * Manually-collected transactions are for sales-assisted billing. Paddle sends an invoice to your customer when a transaction is `billed`. Payment is often by wire transfer.
     * * Automatically-collected transactions are for self-serve checkouts. Paddle tries to collect using a payment method on file, or you may pass the transaction to a checkout to collect for payment.
     * 
     * When a manually-collected transaction is marked as `billed` or an automatically-collected transaction is `completed`, Paddle automatically creates a related subscription for the items on the transaction.
     * 
     * If successful, your response includes a copy of the new transaction entity.
     * 
     * Use the `include` parameter to include related entities in the response.
     * 
     * @param \paddle\Paddle\Models\Operations\CreateTransactionRequest $request
     * @return \paddle\Paddle\Models\Operations\CreateTransactionResponse
     */
	public function create(
        ?\paddle\Paddle\Models\Operations\CreateTransactionRequest $request,
    ): \paddle\Paddle\Models\Operations\CreateTransactionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/transactions');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "transactionCreateInput", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\paddle\Paddle\Models\Operations\CreateTransactionRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\CreateTransactionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createTransaction201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateTransaction201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createTransaction401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateTransaction401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createTransaction500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateTransaction500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a transaction
     * 
     * Returns a transaction using its ID.
     * 
     * Use the `include` parameter to include related entities in the response.
     * 
     * @param \paddle\Paddle\Models\Operations\GetTransactionRequest $request
     * @return \paddle\Paddle\Models\Operations\GetTransactionResponse
     */
	public function get(
        ?\paddle\Paddle\Models\Operations\GetTransactionRequest $request,
    ): \paddle\Paddle\Models\Operations\GetTransactionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/transactions/{transaction_id}', \paddle\Paddle\Models\Operations\GetTransactionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\paddle\Paddle\Models\Operations\GetTransactionRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\GetTransactionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getTransaction200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetTransaction200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getTransaction401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetTransaction401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getTransaction404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetTransaction404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getTransaction500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetTransaction500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a PDF invoice for a transaction
     * 
     * Returns a link to an invoice PDF for a transaction.
     * 
     * Invoice PDFs are created for both automatically and manually-collected transactions.
     * 
     * * The PDF for manually-collected transactions includes payment terms, purchase order number, and notes for your customer. It's a demand for payment from your customer.
     * * The PDF for automatically-collected transactions lets your customer know that payment was taken successfully. Customers may require this for for tax-reporting purposes.
     * 
     * The link returned is not a permanent link. It expires at the date and time returned in the `Expires` header.
     * 
     * @param \paddle\Paddle\Models\Operations\GetTransactionInvoiceRequest $request
     * @return \paddle\Paddle\Models\Operations\GetTransactionInvoiceResponse
     */
	public function getInvoice(
        ?\paddle\Paddle\Models\Operations\GetTransactionInvoiceRequest $request,
    ): \paddle\Paddle\Models\Operations\GetTransactionInvoiceResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/transactions/{transaction_id}/invoice', \paddle\Paddle\Models\Operations\GetTransactionInvoiceRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\GetTransactionInvoiceResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getTransactionInvoice200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetTransactionInvoice200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getTransactionInvoice401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetTransactionInvoice401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getTransactionInvoice404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetTransactionInvoice404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getTransactionInvoice500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetTransactionInvoice500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List transactions
     * 
     * Returns a paginated list of transactions. Use the query parameters to page through results.
     * 
     * Use the `include` parameter to include related entities in the response.
     * 
     * @param \paddle\Paddle\Models\Operations\ListTransactionsRequest $request
     * @return \paddle\Paddle\Models\Operations\ListTransactionsResponse
     */
	public function list(
        ?\paddle\Paddle\Models\Operations\ListTransactionsRequest $request,
    ): \paddle\Paddle\Models\Operations\ListTransactionsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/transactions');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\paddle\Paddle\Models\Operations\ListTransactionsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\ListTransactionsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listTransactions200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListTransactions200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listTransactions401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListTransactions401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listTransactions500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListTransactions500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Preview a transaction
     * 
     * Previews a transaction without creating a transaction entity. Typically used for creating more advanced, dynamic pricing pages where users can build their own plans.
     * 
     * Consider using [the preview prices operation](/api-reference/transactions/preview-prices) for simpler pricing pages.
     * 
     * You can provide location information to preview a transaction. Paddle uses this to calculate tax. You can provide one of:
     * 
     * * `customer_ip_address`: Paddle fetches location using the IP address to calculate totals.
     * * `address`: Paddle uses the country and ZIP code (where supplied) to calculate totals.
     * * `customer_id`, `address_id`, `business_id`: Paddle uses existing customer data to calculate totals. Typically used for logged-in customers.
     * 
     * When supplying items, you can exclude items from the total calculation using the `include_in_totals` boolean.
     * 
     * By default, recurring items with trials are considered to have a zero charge when previewing. Set `ignore_trials` to `true` to ignore trial periods against prices for transaction preview calculations.
     * 
     * If successful, your response includes the data you sent with a `details` object that includes totals for the supplied prices.
     * 
     * Transaction previews do not create transactions, so no `id` is returned.
     * 
     * @param \paddle\Paddle\Models\Shared\TransactionPreviewInput $request
     * @return \paddle\Paddle\Models\Operations\PreviewTransactionResponse
     */
	public function previewTransaction(
        ?\paddle\Paddle\Models\Shared\TransactionPreviewInput $request,
    ): \paddle\Paddle\Models\Operations\PreviewTransactionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/transactions/preview');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\PreviewTransactionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->previewTransaction200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PreviewTransaction200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->previewTransaction401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PreviewTransaction401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->previewTransaction500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PreviewTransaction500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Preview prices
     * 
     * Previews calculations for one or more prices. Typically used for building pricing pages.
     * 
     * You can provide location information when previewing prices. Paddle uses this to calculate tax. You can provide one of:
     * 
     * * `customer_ip_address`: Paddle fetches location using the IP address to calculate totals.
     * * `address`: Paddle uses the country and ZIP code (where supplied) to calculate totals.
     * * `customer_id`, `address_id`, `business_id`: Paddle uses existing customer data to calculate totals. Typically used for logged-in customers.
     * 
     * If successful, your response includes the data you sent with a `details` object that includes totals for the supplied prices. 
     * 
     * Each line item includes `formatted_unit_totals` and `formatted_totals` objects that return totals formatted for the country or region you're working with, including the currency symbol.
     * 
     * @param \paddle\Paddle\Models\Shared\TransactionPricingPreviewInput $request
     * @return \paddle\Paddle\Models\Operations\PricePreviewResponse
     */
	public function pricePreview(
        ?\paddle\Paddle\Models\Shared\TransactionPricingPreviewInput $request,
    ): \paddle\Paddle\Models\Operations\PricePreviewResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/pricing-preview');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\PricePreviewResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->pricePreview200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PricePreview200ApplicationJSONOutput', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->pricePreview401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PricePreview401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->pricePreview500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PricePreview500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a transaction
     * 
     * Updates a transaction using its ID.
     * 
     * You can update transactions that are `draft` or `ready`. `billed` and `completed` transactions are considered records for tax and legal purposes, so they can't be changed. You can either:
     * 
     * * Create [an adjustment](/api-reference/adjustments/overview) to record a refund or credit for a transaction.
     * * Cancel a `billed` transaction by sending a PATCH request to set `status` to `canceled`.
     * 
     * The transaction `status` may only be set to `billed` or `canceled`. Other statuses are set automatically by Paddle. Set a manually-collected transaction to `billed` to mark it as finalized. This is essentially issuing an invoice. At this point, it becomes a legal record so you can't make changes to it. Paddle automatically assigns an invoice number, creates [a related subscription](/api-reference/subscriptions/overview), and sends it to your customer.
     * 
     * When making changes to items on a transaction, send the complete list of items that you'd like to be on a transaction — including existing items. For each item, send an object containing `price_id` and `quantity`. Paddle responds with the full `price` object for each item. See: [Work with lists](/api-reference/about/lists)
     * 
     * If successful, your response includes a copy of the updated transaction entity.
     * 
     * @param \paddle\Paddle\Models\Operations\UpdateTransactionRequest $request
     * @return \paddle\Paddle\Models\Operations\UpdateTransactionResponse
     */
	public function update(
        ?\paddle\Paddle\Models\Operations\UpdateTransactionRequest $request,
    ): \paddle\Paddle\Models\Operations\UpdateTransactionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/transactions/{transaction_id}', \paddle\Paddle\Models\Operations\UpdateTransactionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "transactionUpdateInput", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\UpdateTransactionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateTransaction200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateTransaction200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateTransaction401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateTransaction401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateTransaction404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateTransaction404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateTransaction500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateTransaction500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}