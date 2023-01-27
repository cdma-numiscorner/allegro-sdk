<?php
/**
 * BlacklistManagementApi
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\AllegroSdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\AllegroSdk\ApiException;
use OpenAPI\AllegroSdk\Configuration;
use OpenAPI\AllegroSdk\HeaderSelector;
use OpenAPI\AllegroSdk\ObjectSerializer;

/**
 * BlacklistManagementApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BlacklistManagementApi
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
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
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
     * Operation doAddToBlackList
     *
     * Add a users to the blacklist
     *
     * @param  \OpenAPI\AllegroSdk\Model\BlacklistRequest $blacklist_request request (required)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\AllegroSdk\Model\BlackListResponse|\OpenAPI\AllegroSdk\Model\AuthError|\OpenAPI\AllegroSdk\Model\ErrorsHolder|\OpenAPI\AllegroSdk\Model\ErrorsHolder|\OpenAPI\AllegroSdk\Model\ErrorsHolder
     */
    public function doAddToBlackList($blacklist_request)
    {
        list($response) = $this->doAddToBlackListWithHttpInfo($blacklist_request);
        return $response;
    }

    /**
     * Operation doAddToBlackListWithHttpInfo
     *
     * Add a users to the blacklist
     *
     * @param  \OpenAPI\AllegroSdk\Model\BlacklistRequest $blacklist_request request (required)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\AllegroSdk\Model\BlackListResponse|\OpenAPI\AllegroSdk\Model\AuthError|\OpenAPI\AllegroSdk\Model\ErrorsHolder|\OpenAPI\AllegroSdk\Model\ErrorsHolder|\OpenAPI\AllegroSdk\Model\ErrorsHolder, HTTP status code, HTTP response headers (array of strings)
     */
    public function doAddToBlackListWithHttpInfo($blacklist_request)
    {
        $request = $this->doAddToBlackListRequest($blacklist_request);

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
                case 201:
                    if ('\OpenAPI\AllegroSdk\Model\BlackListResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\BlackListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\OpenAPI\AllegroSdk\Model\AuthError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\AuthError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\OpenAPI\AllegroSdk\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\AllegroSdk\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\OpenAPI\AllegroSdk\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\AllegroSdk\Model\BlackListResponse';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\AllegroSdk\Model\BlackListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\AllegroSdk\Model\AuthError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\AllegroSdk\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\AllegroSdk\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\AllegroSdk\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation doAddToBlackListAsync
     *
     * Add a users to the blacklist
     *
     * @param  \OpenAPI\AllegroSdk\Model\BlacklistRequest $blacklist_request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function doAddToBlackListAsync($blacklist_request)
    {
        return $this->doAddToBlackListAsyncWithHttpInfo($blacklist_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation doAddToBlackListAsyncWithHttpInfo
     *
     * Add a users to the blacklist
     *
     * @param  \OpenAPI\AllegroSdk\Model\BlacklistRequest $blacklist_request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function doAddToBlackListAsyncWithHttpInfo($blacklist_request)
    {
        $returnType = '\OpenAPI\AllegroSdk\Model\BlackListResponse';
        $request = $this->doAddToBlackListRequest($blacklist_request);

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
     * Create request for operation 'doAddToBlackList'
     *
     * @param  \OpenAPI\AllegroSdk\Model\BlacklistRequest $blacklist_request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function doAddToBlackListRequest($blacklist_request)
    {
        // verify the required parameter 'blacklist_request' is set
        if ($blacklist_request === null || (is_array($blacklist_request) && count($blacklist_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $blacklist_request when calling doAddToBlackList'
            );
        }

        $resourcePath = '/sale/blacklisted-users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.allegro.public.v1+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.allegro.public.v1+json'],
                ['application/vnd.allegro.public.v1+json']
            );
        }

        // for model (json/xml)
        if (isset($blacklist_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($blacklist_request));
            } else {
                $httpBody = $blacklist_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
     * Operation doRemoveFromBlackList
     *
     * Remove users from the blacklist
     *
     * @param  int $excluded_user_id Remove users from the blacklist. (required)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function doRemoveFromBlackList($excluded_user_id)
    {
        $this->doRemoveFromBlackListWithHttpInfo($excluded_user_id);
    }

    /**
     * Operation doRemoveFromBlackListWithHttpInfo
     *
     * Remove users from the blacklist
     *
     * @param  int $excluded_user_id Remove users from the blacklist. (required)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function doRemoveFromBlackListWithHttpInfo($excluded_user_id)
    {
        $request = $this->doRemoveFromBlackListRequest($excluded_user_id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\AllegroSdk\Model\AuthError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation doRemoveFromBlackListAsync
     *
     * Remove users from the blacklist
     *
     * @param  int $excluded_user_id Remove users from the blacklist. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function doRemoveFromBlackListAsync($excluded_user_id)
    {
        return $this->doRemoveFromBlackListAsyncWithHttpInfo($excluded_user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation doRemoveFromBlackListAsyncWithHttpInfo
     *
     * Remove users from the blacklist
     *
     * @param  int $excluded_user_id Remove users from the blacklist. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function doRemoveFromBlackListAsyncWithHttpInfo($excluded_user_id)
    {
        $returnType = '';
        $request = $this->doRemoveFromBlackListRequest($excluded_user_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'doRemoveFromBlackList'
     *
     * @param  int $excluded_user_id Remove users from the blacklist. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function doRemoveFromBlackListRequest($excluded_user_id)
    {
        // verify the required parameter 'excluded_user_id' is set
        if ($excluded_user_id === null || (is_array($excluded_user_id) && count($excluded_user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $excluded_user_id when calling doRemoveFromBlackList'
            );
        }
        if ($excluded_user_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$excluded_user_id" when calling BlacklistManagementApi.doRemoveFromBlackList, must be bigger than or equal to 1.');
        }


        $resourcePath = '/sale/blacklisted-users/{excludedUserId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($excluded_user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'excludedUserId' . '}',
                ObjectSerializer::toPathValue($excluded_user_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.allegro.public.v1+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.allegro.public.v1+json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'DELETE',
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
