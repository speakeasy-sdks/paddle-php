<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle;

class Customers 
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
     * Create a customer
     * 
     * Creates a new customer.
     * 
     * If successful, your response includes a copy of the new customer entity.
     * 
     * @param \paddle\Paddle\Models\Shared\CustomerCreateInput $request
     * @return \paddle\Paddle\Models\Operations\CreateCustomerResponse
     */
	public function create(
        ?\paddle\Paddle\Models\Shared\CustomerCreateInput $request,
    ): \paddle\Paddle\Models\Operations\CreateCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/customers');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\CreateCustomerResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createCustomer201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateCustomer201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createCustomer400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateCustomer400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createCustomer401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateCustomer401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createCustomer403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateCustomer403ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createCustomer500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateCustomer500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a customer
     * 
     * Returns a customer using its ID.
     * 
     * @param \paddle\Paddle\Models\Operations\GetCustomerRequest $request
     * @return \paddle\Paddle\Models\Operations\GetCustomerResponse
     */
	public function get(
        ?\paddle\Paddle\Models\Operations\GetCustomerRequest $request,
    ): \paddle\Paddle\Models\Operations\GetCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/customers/{customer_id}', \paddle\Paddle\Models\Operations\GetCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\GetCustomerResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getCustomer200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetCustomer200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getCustomer401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetCustomer401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getCustomer403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetCustomer403ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getCustomer404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetCustomer404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getCustomer500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetCustomer500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List customers
     * 
     * Returns a paginated list of customers. Use the query parameters to page through results.
     * 
     * By default, Paddle returns customers that are `active`. Use the `status` query parameter to return customers that are archived.
     * 
     * @param \paddle\Paddle\Models\Operations\ListCustomersRequest $request
     * @return \paddle\Paddle\Models\Operations\ListCustomersResponse
     */
	public function list(
        ?\paddle\Paddle\Models\Operations\ListCustomersRequest $request,
    ): \paddle\Paddle\Models\Operations\ListCustomersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/customers');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\paddle\Paddle\Models\Operations\ListCustomersRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\ListCustomersResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCustomers200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListCustomers200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCustomers401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListCustomers401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCustomers403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListCustomers403ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCustomers404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListCustomers404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCustomers500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListCustomers500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List credit balances for a customer
     * 
     * Returns a list of credit balances for each currency for a customer. Each balance has three totals:
     * 
     * * `available`: total available to use.
     * * `reserved`: total temporarily reserved for billed transactions.
     * * `used`: total amount of credit used.
     * 
     * Credit is added to the `available` total initially. When used, it moves to the `used` total.
     * 
     * The `reserved` total is used when a credit balance is applied to a transaction that's marked as `billed`, like when working with an issued invoice. It's not available for other transactions at this point, but isn't considered `used` until the transaction is completed. If a `billed` transaction is `canceled`, any reserved credit moves back to `available`.
     * 
     * The response is not paginated.
     * 
     * @param \paddle\Paddle\Models\Operations\ListCreditBalancesRequest $request
     * @return \paddle\Paddle\Models\Operations\ListCreditBalancesResponse
     */
	public function listCreditBalances(
        ?\paddle\Paddle\Models\Operations\ListCreditBalancesRequest $request,
    ): \paddle\Paddle\Models\Operations\ListCreditBalancesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/customers/{customer_id}/credit-balances', \paddle\Paddle\Models\Operations\ListCreditBalancesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\paddle\Paddle\Models\Operations\ListCreditBalancesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\ListCreditBalancesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCreditBalances200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListCreditBalances200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCreditBalances400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListCreditBalances400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCreditBalances404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListCreditBalances404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCreditBalances500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListCreditBalances500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a customer
     * 
     * Updates a customer using its ID.
     * 
     * If successful, your response includes a copy of the updated customer entity.
     * 
     * @param \paddle\Paddle\Models\Operations\UpdateCustomerRequest $request
     * @return \paddle\Paddle\Models\Operations\UpdateCustomerResponse
     */
	public function update(
        ?\paddle\Paddle\Models\Operations\UpdateCustomerRequest $request,
    ): \paddle\Paddle\Models\Operations\UpdateCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/customers/{customer_id}', \paddle\Paddle\Models\Operations\UpdateCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "customerInput", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\UpdateCustomerResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateCustomer200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateCustomer200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateCustomer400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateCustomer400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateCustomer401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateCustomer401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateCustomer403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateCustomer403ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateCustomer404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateCustomer404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateCustomer500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateCustomer500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}