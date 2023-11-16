<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle;

class IPAddresses 
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
     * Get Paddle IP addresses
     * 
     * Returns Paddle IP addresses. You can add these IP addresses to your allowlist.
     * 
     * IP addresses returned are for the environment that you're making the request in. For example, making the request to the production base URL returns all production IP addresses.
     * 
     * @return \paddle\Paddle\Models\Operations\GetIpAddressesResponse
     */
	public function get(
    ): \paddle\Paddle\Models\Operations\GetIpAddressesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ips');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \paddle\Paddle\Models\Operations\GetIpAddressesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->twoHundredApplicationJsonObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetIpAddressesResponseBody', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fiveHundredApplicationJsonObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetIPAddressesIPAddressesResponseBody', 'json');
            }
        }

        return $response;
    }
}