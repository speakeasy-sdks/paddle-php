<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace paddle\Paddle;

class Subscriptions 
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
     * Cancel a subscription
     * 
     * Cancels a subscription using its ID.
     * 
     * For active subscriptions, cancellation takes place at the end of a subscription billing period. If successful, your response includes a copy of the updated subscription entity with a `schedule_change` to say that the subscription should cancel at the end of the billing period. Its `status` remains the same until after the effective date of the scheduled change, at which point it changes to `canceled`.
     * 
     * For paused subscriptions, cancellation takes place immediately. If successful, your response includes a copy of the updated subscription entity with the `status` of `canceled`.
     * 
     * You cannot reactivate a canceled subscription.
     * 
     * @param \paddle\Paddle\Models\Operations\CancelSubscriptionRequest $request
     * @return \paddle\Paddle\Models\Operations\CancelSubscriptionResponse
     */
	public function cancel(
        ?\paddle\Paddle\Models\Operations\CancelSubscriptionRequest $request,
    ): \paddle\Paddle\Models\Operations\CancelSubscriptionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subscriptions/{subscription_id}/cancel', \paddle\Paddle\Models\Operations\CancelSubscriptionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\CancelSubscriptionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->cancelSubscription200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CancelSubscription200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->cancelSubscription400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CancelSubscription400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->cancelSubscription401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CancelSubscription401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Shared\Error', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->cancelSubscription500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CancelSubscription500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a one-time charge for a subscription
     * 
     * Creates a new one-time charge for a subscription. Use to bill non-recurring items to a subscription. Non-recurring items are price entities where the `billing_cycle` is `null`.
     * 
     * If successful, Paddle responds with the updated subscription entity. However, one-time charges aren't held against the subscription entity, so the charges billed aren't returned in the response.
     * 
     * Once created, to get details of a one-time charge:
     * 
     * * When created with `effective_from` as `next_billing_period`, get the subscription the charge was billed to and use the `include` query parameter with the `next_transaction` value.
     * * When created with `effective_from` as `immediately`, list transactions and use the `subscription_id` query parameter with the subscription ID of the subscription the charge was billed to.
     * 
     * @param \paddle\Paddle\Models\Operations\CreateSubscriptionChargeRequest $request
     * @return \paddle\Paddle\Models\Operations\CreateSubscriptionChargeResponse
     */
	public function create(
        ?\paddle\Paddle\Models\Operations\CreateSubscriptionChargeRequest $request,
    ): \paddle\Paddle\Models\Operations\CreateSubscriptionChargeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subscriptions/{subscription_id}/charge', \paddle\Paddle\Models\Operations\CreateSubscriptionChargeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\CreateSubscriptionChargeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createSubscriptionCharge201ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateSubscriptionCharge201ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createSubscriptionCharge400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateSubscriptionCharge400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createSubscriptionCharge500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateSubscriptionCharge500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Preview one-off charge for a subscription
     * 
     * Previews a new one-off charge for a subscription. Use to preview the outcome of adding non-recurring items to a subscription.
     * 
     * @param \paddle\Paddle\Models\Operations\CreateSubscriptionChargePreviewRequest $request
     * @return \paddle\Paddle\Models\Operations\CreateSubscriptionChargePreviewResponse
     */
	public function createPreview(
        ?\paddle\Paddle\Models\Operations\CreateSubscriptionChargePreviewRequest $request,
    ): \paddle\Paddle\Models\Operations\CreateSubscriptionChargePreviewResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subscriptions/{subscription_id}/charge/preview', \paddle\Paddle\Models\Operations\CreateSubscriptionChargePreviewRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\CreateSubscriptionChargePreviewResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createSubscriptionChargePreview200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateSubscriptionChargePreview200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createSubscriptionChargePreview400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateSubscriptionChargePreview400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createSubscriptionChargePreview500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\CreateSubscriptionChargePreview500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a subscription
     * 
     * Returns a subscription using its ID.
     * 
     * Use the `include` parameter to include transaction information in the response.
     * 
     * @param \paddle\Paddle\Models\Operations\GetSubscriptionRequest $request
     * @return \paddle\Paddle\Models\Operations\GetSubscriptionResponse
     */
	public function get(
        ?\paddle\Paddle\Models\Operations\GetSubscriptionRequest $request,
    ): \paddle\Paddle\Models\Operations\GetSubscriptionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subscriptions/{subscription_id}', \paddle\Paddle\Models\Operations\GetSubscriptionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\paddle\Paddle\Models\Operations\GetSubscriptionRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\GetSubscriptionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSubscription200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetSubscription200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSubscription401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetSubscription401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSubscription404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetSubscription404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSubscription500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetSubscription500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get a transaction to update payment method
     * 
     * Returns a transaction that you can pass to a checkout to let customers update their payment details. Only for subscriptions where `collection_mode` is `automatic`.
     * 
     * The transaction returned depends on the status of the related subscription:
     * 
     * * Where a subscription is `past_due`, it returns the most recent `past_due` transaction.
     * * Where a subscription is `active`, it creates a new zero amount transaction for the items on a subscription.
     * 
     * You can use the returned `checkout.url`, or pass the returned transaction ID to Paddle.js to open a checkout to present customers with a way of updating their payment details.
     * 
     * @param \paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransactionRequest $request
     * @return \paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransactionResponse
     */
	public function getUpdatedPaymentMethodTransaction(
        ?\paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransactionRequest $request,
    ): \paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransactionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subscriptions/{subscription_id}/update-payment-method-transaction', \paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransactionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransactionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSubscriptionUpdatePaymentMethodTransaction200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransaction200ApplicationJSONOutput', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSubscriptionUpdatePaymentMethodTransaction401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransaction401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSubscriptionUpdatePaymentMethodTransaction403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransaction403ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSubscriptionUpdatePaymentMethodTransaction409ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransaction409ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSubscriptionUpdatePaymentMethodTransaction500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\GetSubscriptionUpdatePaymentMethodTransaction500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List subscriptions
     * 
     * Returns a paginated list of subscriptions. Use the query parameters to page through results.
     * 
     * @param \paddle\Paddle\Models\Operations\ListSubscriptionsRequest $request
     * @return \paddle\Paddle\Models\Operations\ListSubscriptionsResponse
     */
	public function list(
        ?\paddle\Paddle\Models\Operations\ListSubscriptionsRequest $request,
    ): \paddle\Paddle\Models\Operations\ListSubscriptionsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subscriptions');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\paddle\Paddle\Models\Operations\ListSubscriptionsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\ListSubscriptionsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listSubscriptions200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListSubscriptions200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listSubscriptions401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListSubscriptions401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listSubscriptions500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ListSubscriptions500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Pause a subscription
     * 
     * Pauses a subscription using its ID.
     * 
     * To create an open-ended pause, send an empty request body. The subscription remains paused until you send a resume request.
     * 
     * To set a resume date, include the `resume_at` field in your request. The subscription remains paused until the resume date, or until you send a resume request.
     * 
     * Pauses take place at the end of a subscription billing period. If successful, your response includes a copy of the updated subscription entity with a `schedule_change` to say that the subscription should pause at the end of the billing period. Its `status` remains the same until after the effective date of the scheduled change, at which point it changes to `paused`.
     * 
     * @param \paddle\Paddle\Models\Operations\PauseSubscriptionRequest $request
     * @return \paddle\Paddle\Models\Operations\PauseSubscriptionResponse
     */
	public function pause(
        ?\paddle\Paddle\Models\Operations\PauseSubscriptionRequest $request,
    ): \paddle\Paddle\Models\Operations\PauseSubscriptionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subscriptions/{subscription_id}/pause', \paddle\Paddle\Models\Operations\PauseSubscriptionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\PauseSubscriptionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->pauseSubscription200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PauseSubscription200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->pauseSubscription400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PauseSubscription400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->pauseSubscription401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PauseSubscription401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Shared\Error', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->pauseSubscription500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PauseSubscription500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Preview an update to a subscription
     * 
     * Previews an update for a subscription without applying those changes. Typically used for previewing proration before making changes to a subscription.
     * 
     * If successful, your response includes `immediate_transaction`, `next_transaction`, and `recurring_transaction_details` so you can see expected transactions for the changes.
     * 
     * @param \paddle\Paddle\Models\Operations\PreviewSubscriptionRequest $request
     * @return \paddle\Paddle\Models\Operations\PreviewSubscriptionResponse
     */
	public function previewSubscription(
        ?\paddle\Paddle\Models\Operations\PreviewSubscriptionRequest $request,
    ): \paddle\Paddle\Models\Operations\PreviewSubscriptionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subscriptions/{subscription_id}/preview', \paddle\Paddle\Models\Operations\PreviewSubscriptionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "subscriptionUpdate", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\PreviewSubscriptionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->previewSubscription200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\PreviewSubscription200ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Resume a paused subscription
     * 
     * Resumes a paused subscription using its ID. Only `paused` subscriptions can be resumed. You cannot resume a `canceled` subscription.
     * 
     * On resume, Paddle bills for a subscription immediately. Subscription billing dates are recalculated based on the resume date.
     * 
     * If successful, Paddle returns a copy of the updated subscription entity. The subscription status is `active`, and billing dates are updated to reflect the resume date.
     * 
     * @param \paddle\Paddle\Models\Operations\ResumeSubscriptionRequest $request
     * @return \paddle\Paddle\Models\Operations\ResumeSubscriptionResponse
     */
	public function resumeSubscription(
        ?\paddle\Paddle\Models\Operations\ResumeSubscriptionRequest $request,
    ): \paddle\Paddle\Models\Operations\ResumeSubscriptionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subscriptions/{subscription_id}/resume', \paddle\Paddle\Models\Operations\ResumeSubscriptionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\ResumeSubscriptionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->resumeSubscription200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ResumeSubscription200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->resumeSubscription400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ResumeSubscription400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->resumeSubscription401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ResumeSubscription401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Shared\Error', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->resumeSubscription500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\ResumeSubscription500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a subscription
     * 
     * Updates a subscription using its ID.
     * 
     * When making changes to items on a subscription, you must include the `proration_billing_mode` field to tell Paddle how to bill for those changes. Paddle returns an error if this field is missing when sending `items`.
     * 
     * Send the complete list of items that you'd like to be on a subscription — including existing items. If you omit items, they're removed from the subscription.
     * 
     * For each item, send `price_id` and `quantity`. Paddle responds with the full price object for each price. If you're updating an existing item, you can omit the `quantity` if you don't want to update it.
     * 
     * If successful, your response includes a copy of the updated subscription entity.
     * 
     * @param \paddle\Paddle\Models\Operations\UpdateSubscriptionRequest $request
     * @return \paddle\Paddle\Models\Operations\UpdateSubscriptionResponse
     */
	public function update(
        ?\paddle\Paddle\Models\Operations\UpdateSubscriptionRequest $request,
    ): \paddle\Paddle\Models\Operations\UpdateSubscriptionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/subscriptions/{subscription_id}', \paddle\Paddle\Models\Operations\UpdateSubscriptionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "subscriptionUpdate", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \paddle\Paddle\Models\Operations\UpdateSubscriptionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateSubscription200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateSubscription200ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateSubscription400ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateSubscription400ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateSubscription401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateSubscription401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Shared\Error', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateSubscription500ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'paddle\Paddle\Models\Operations\UpdateSubscription500ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}