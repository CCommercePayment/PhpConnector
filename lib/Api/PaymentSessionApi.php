<?php
/**
 * PaymentSessionApi
 * PHP version 5
 *
 * @category Class
 * @package  pachirapay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace pachirapay\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use pachirapay\ApiException;
use pachirapay\Configuration;
use pachirapay\HeaderSelector;
use pachirapay\ObjectSerializer;

/**
 * PaymentSessionApi Class Doc Comment
 *
 * @category Class
 * @package  pachirapay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentSessionApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v1PaymentSessionsByPaymentSessionIdPaymentResultGet
     *
     * Gets the payment result from its session id.
     *
     * @param  string $payment_session_id The payment session id. (required)
     * @param  string $auth_token Gets or sets the authentication token. (required)
     *
     * @throws \pachirapay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \pachirapay\Model\GetPaymentSessionResult
     */
    public function v1PaymentSessionsByPaymentSessionIdPaymentResultGet($payment_session_id, $auth_token)
    {
        list($response) = $this->v1PaymentSessionsByPaymentSessionIdPaymentResultGetWithHttpInfo($payment_session_id, $auth_token);
        return $response;
    }

    /**
     * Operation v1PaymentSessionsByPaymentSessionIdPaymentResultGetWithHttpInfo
     *
     * Gets the payment result from its session id.
     *
     * @param  string $payment_session_id The payment session id. (required)
     * @param  string $auth_token Gets or sets the authentication token. (required)
     *
     * @throws \pachirapay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \pachirapay\Model\GetPaymentSessionResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1PaymentSessionsByPaymentSessionIdPaymentResultGetWithHttpInfo($payment_session_id, $auth_token)
    {
        $request = $this->v1PaymentSessionsByPaymentSessionIdPaymentResultGetRequest($payment_session_id, $auth_token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\pachirapay\Model\GetPaymentSessionResult' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\pachirapay\Model\GetPaymentSessionResult', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\pachirapay\Model\GetPaymentSessionResult';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\pachirapay\Model\GetPaymentSessionResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1PaymentSessionsByPaymentSessionIdPaymentResultGetAsync
     *
     * Gets the payment result from its session id.
     *
     * @param  string $payment_session_id The payment session id. (required)
     * @param  string $auth_token Gets or sets the authentication token. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1PaymentSessionsByPaymentSessionIdPaymentResultGetAsync($payment_session_id, $auth_token)
    {
        return $this->v1PaymentSessionsByPaymentSessionIdPaymentResultGetAsyncWithHttpInfo($payment_session_id, $auth_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1PaymentSessionsByPaymentSessionIdPaymentResultGetAsyncWithHttpInfo
     *
     * Gets the payment result from its session id.
     *
     * @param  string $payment_session_id The payment session id. (required)
     * @param  string $auth_token Gets or sets the authentication token. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1PaymentSessionsByPaymentSessionIdPaymentResultGetAsyncWithHttpInfo($payment_session_id, $auth_token)
    {
        $returnType = '\pachirapay\Model\GetPaymentSessionResult';
        $request = $this->v1PaymentSessionsByPaymentSessionIdPaymentResultGetRequest($payment_session_id, $auth_token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1PaymentSessionsByPaymentSessionIdPaymentResultGet'
     *
     * @param  string $payment_session_id The payment session id. (required)
     * @param  string $auth_token Gets or sets the authentication token. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1PaymentSessionsByPaymentSessionIdPaymentResultGetRequest($payment_session_id, $auth_token)
    {
        // verify the required parameter 'payment_session_id' is set
        if ($payment_session_id === null || (is_array($payment_session_id) && count($payment_session_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_session_id when calling v1PaymentSessionsByPaymentSessionIdPaymentResultGet'
            );
        }
        // verify the required parameter 'auth_token' is set
        if ($auth_token === null || (is_array($auth_token) && count($auth_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $auth_token when calling v1PaymentSessionsByPaymentSessionIdPaymentResultGet'
            );
        }

        $resourcePath = '/v1/payment-sessions/{paymentSessionId}/paymentResult';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($auth_token !== null) {
            $headerParams['authToken'] = ObjectSerializer::toHeaderValue($auth_token);
        }

        // path params
        if ($payment_session_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentSessionId' . '}',
                ObjectSerializer::toPathValue($payment_session_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v1PaymentSessionsPost
     *
     * Creates a payment session.
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \pachirapay\Model\PaymentSessionRequest $payment_session_request The payment session request. (optional)
     *
     * @throws \pachirapay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \pachirapay\Model\PaymentSessionResponse
     */
    public function v1PaymentSessionsPost($auth_token, $payment_session_request = null)
    {
        list($response) = $this->v1PaymentSessionsPostWithHttpInfo($auth_token, $payment_session_request);
        return $response;
    }

    /**
     * Operation v1PaymentSessionsPostWithHttpInfo
     *
     * Creates a payment session.
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \pachirapay\Model\PaymentSessionRequest $payment_session_request The payment session request. (optional)
     *
     * @throws \pachirapay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \pachirapay\Model\PaymentSessionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1PaymentSessionsPostWithHttpInfo($auth_token, $payment_session_request = null)
    {
        $request = $this->v1PaymentSessionsPostRequest($auth_token, $payment_session_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\pachirapay\Model\PaymentSessionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\pachirapay\Model\PaymentSessionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\pachirapay\Model\PaymentSessionResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\pachirapay\Model\PaymentSessionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1PaymentSessionsPostAsync
     *
     * Creates a payment session.
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \pachirapay\Model\PaymentSessionRequest $payment_session_request The payment session request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1PaymentSessionsPostAsync($auth_token, $payment_session_request = null)
    {
        return $this->v1PaymentSessionsPostAsyncWithHttpInfo($auth_token, $payment_session_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1PaymentSessionsPostAsyncWithHttpInfo
     *
     * Creates a payment session.
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \pachirapay\Model\PaymentSessionRequest $payment_session_request The payment session request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1PaymentSessionsPostAsyncWithHttpInfo($auth_token, $payment_session_request = null)
    {
        $returnType = '\pachirapay\Model\PaymentSessionResponse';
        $request = $this->v1PaymentSessionsPostRequest($auth_token, $payment_session_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1PaymentSessionsPost'
     *
     * @param  string $auth_token Gets or sets the authentication token. (required)
     * @param  \pachirapay\Model\PaymentSessionRequest $payment_session_request The payment session request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v1PaymentSessionsPostRequest($auth_token, $payment_session_request = null)
    {
        // verify the required parameter 'auth_token' is set
        if ($auth_token === null || (is_array($auth_token) && count($auth_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $auth_token when calling v1PaymentSessionsPost'
            );
        }

        $resourcePath = '/v1/payment-sessions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($auth_token !== null) {
            $headerParams['authToken'] = ObjectSerializer::toHeaderValue($auth_token);
        }


        // body params
        $_tempBody = null;
        if (isset($payment_session_request)) {
            $_tempBody = $payment_session_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
