<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle;

class Products 
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
     * Create a product
     * 
     * Creates a new product.
     * 
     * Paddle does not upload product images to a CDN. For `image_url`, you should host images on an HTTPS server that's publicly accessible. We recommend using square images (`1:1` ratio).
     * 
     * If successful, your response includes a copy of the new product entity.
     * 
     * @param array<string, mixed> $request
     * @return \paddle\Paddle\Models\Operations\CreateProductResponse
     */
	public function create(
        ?array $request,
    ): \paddle\Paddle\Models\Operations\CreateProductResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/products');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\CreateProductResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createProduct201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateProduct201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createProduct400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateProduct400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createProduct401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateProduct401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createProduct500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateProduct500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a product
     * 
     * Returns a product using its ID.
     * 
     * Use the `include` parameter to include related price entities in the response.
     * 
     * @param \paddle\Paddle\Models\Operations\GetProductRequest $request
     * @return \paddle\Paddle\Models\Operations\GetProductResponse
     */
	public function get(
        ?\paddle\Paddle\Models\Operations\GetProductRequest $request,
    ): \paddle\Paddle\Models\Operations\GetProductResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/products/{product_id}', \paddle\Paddle\Models\Operations\GetProductRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\paddle\Paddle\Models\Operations\GetProductRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\GetProductResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProduct200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetProduct200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProduct401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetProduct401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProduct404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetProduct404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getProduct500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetProduct500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List products
     * 
     * Returns a paginated list of products. Use the query parameters to page through results.
     * 
     * By default, Paddle returns products that are `active`. Use the `status` query parameter to return products that are archived.
     * 
     * Use the `include` parameter to include related price entities in the response.
     * 
     * @param \paddle\Paddle\Models\Operations\ListProductsRequest $request
     * @return \paddle\Paddle\Models\Operations\ListProductsResponse
     */
	public function list(
        ?\paddle\Paddle\Models\Operations\ListProductsRequest $request,
    ): \paddle\Paddle\Models\Operations\ListProductsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/products');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\paddle\Paddle\Models\Operations\ListProductsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\ListProductsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listProducts200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListProducts200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listProducts401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListProducts401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listProducts500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListProducts500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a product
     * 
     * Updates a product using its ID.
     * 
     * Paddle does not upload product images to a CDN. For `image_url`, you should host images on an HTTPS server that's publicly accessible. We recommend using square images (`1:1` ratio).
     * 
     * If successful, your response includes a copy of the updated product entity.
     * 
     * @param \paddle\Paddle\Models\Operations\UpdateProductRequest $request
     * @return \paddle\Paddle\Models\Operations\UpdateProductResponse
     */
	public function update(
        ?\paddle\Paddle\Models\Operations\UpdateProductRequest $request,
    ): \paddle\Paddle\Models\Operations\UpdateProductResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/products/{product_id}', \paddle\Paddle\Models\Operations\UpdateProductRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\UpdateProductResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateProduct200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateProduct200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateProduct400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateProduct400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateProduct401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateProduct401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateProduct404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateProduct404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateProduct500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateProduct500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}