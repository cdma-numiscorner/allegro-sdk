<?php
/**
 * BillingApi
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
 * BillingApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BillingApi
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
     * Operation getBillingEntries
     *
     * Get a list of billing entries
     *
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  string $order_id Order UUID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\AllegroSdk\Model\BillingEntries|\OpenAPI\AllegroSdk\Model\AuthError|\OpenAPI\AllegroSdk\Model\ErrorsHolder|\OpenAPI\AllegroSdk\Model\ErrorsHolder
     */
    public function getBillingEntries($occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $order_id = null, $limit = 100, $offset = 0)
    {
        list($response) = $this->getBillingEntriesWithHttpInfo($occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $order_id, $limit, $offset);
        return $response;
    }

    /**
     * Operation getBillingEntriesWithHttpInfo
     *
     * Get a list of billing entries
     *
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  string $order_id Order UUID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\AllegroSdk\Model\BillingEntries|\OpenAPI\AllegroSdk\Model\AuthError|\OpenAPI\AllegroSdk\Model\ErrorsHolder|\OpenAPI\AllegroSdk\Model\ErrorsHolder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBillingEntriesWithHttpInfo($occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $order_id = null, $limit = 100, $offset = 0)
    {
        $request = $this->getBillingEntriesRequest($occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $order_id, $limit, $offset);

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
                    if ('\OpenAPI\AllegroSdk\Model\BillingEntries' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\BillingEntries', []),
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
                case 406:
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

            $returnType = '\OpenAPI\AllegroSdk\Model\BillingEntries';
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
                        '\OpenAPI\AllegroSdk\Model\BillingEntries',
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
                case 406:
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
     * Operation getBillingEntriesAsync
     *
     * Get a list of billing entries
     *
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  string $order_id Order UUID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingEntriesAsync($occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $order_id = null, $limit = 100, $offset = 0)
    {
        return $this->getBillingEntriesAsyncWithHttpInfo($occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $order_id, $limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBillingEntriesAsyncWithHttpInfo
     *
     * Get a list of billing entries
     *
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  string $order_id Order UUID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingEntriesAsyncWithHttpInfo($occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $order_id = null, $limit = 100, $offset = 0)
    {
        $returnType = '\OpenAPI\AllegroSdk\Model\BillingEntries';
        $request = $this->getBillingEntriesRequest($occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $order_id, $limit, $offset);

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
     * Create request for operation 'getBillingEntries'
     *
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  string $order_id Order UUID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBillingEntriesRequest($occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $order_id = null, $limit = 100, $offset = 0)
    {
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling BillingApi.getBillingEntries, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling BillingApi.getBillingEntries, must be bigger than or equal to 1.');
        }

        if ($offset !== null && $offset > 10000) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling BillingApi.getBillingEntries, must be smaller than or equal to 10000.');
        }
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling BillingApi.getBillingEntries, must be bigger than or equal to 0.');
        }


        $resourcePath = '/billing/billing-entries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($occurred_at_gte !== null) {
            if('form' === 'form' && is_array($occurred_at_gte)) {
                foreach($occurred_at_gte as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['occurredAt.gte'] = $occurred_at_gte;
            }
        }
        // query params
        if ($occurred_at_lte !== null) {
            if('form' === 'form' && is_array($occurred_at_lte)) {
                foreach($occurred_at_lte as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['occurredAt.lte'] = $occurred_at_lte;
            }
        }
        // query params
        if ($type_id !== null) {
            if('form' === 'form' && is_array($type_id)) {
                foreach($type_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['type.id'] = $type_id;
            }
        }
        // query params
        if ($offer_id !== null) {
            if('form' === 'form' && is_array($offer_id)) {
                foreach($offer_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['offer.id'] = $offer_id;
            }
        }
        // query params
        if ($order_id !== null) {
            if('form' === 'form' && is_array($order_id)) {
                foreach($order_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order.id'] = $order_id;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($offset !== null) {
            if('form' === 'form' && is_array($offset)) {
                foreach($offset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['offset'] = $offset;
            }
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getBillingTypes
     *
     * Get a list of billing types
     *
     * @param  string $accept_language Expected language of name translations. Only Polish and English are currently supported. (optional)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\AllegroSdk\Model\BillingType[]|\OpenAPI\AllegroSdk\Model\AuthError
     */
    public function getBillingTypes($accept_language = null)
    {
        list($response) = $this->getBillingTypesWithHttpInfo($accept_language);
        return $response;
    }

    /**
     * Operation getBillingTypesWithHttpInfo
     *
     * Get a list of billing types
     *
     * @param  string $accept_language Expected language of name translations. Only Polish and English are currently supported. (optional)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\AllegroSdk\Model\BillingType[]|\OpenAPI\AllegroSdk\Model\AuthError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBillingTypesWithHttpInfo($accept_language = null)
    {
        $request = $this->getBillingTypesRequest($accept_language);

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
                    if ('\OpenAPI\AllegroSdk\Model\BillingType[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\BillingType[]', []),
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
            }

            $returnType = '\OpenAPI\AllegroSdk\Model\BillingType[]';
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
                        '\OpenAPI\AllegroSdk\Model\BillingType[]',
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
            }
            throw $e;
        }
    }

    /**
     * Operation getBillingTypesAsync
     *
     * Get a list of billing types
     *
     * @param  string $accept_language Expected language of name translations. Only Polish and English are currently supported. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingTypesAsync($accept_language = null)
    {
        return $this->getBillingTypesAsyncWithHttpInfo($accept_language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBillingTypesAsyncWithHttpInfo
     *
     * Get a list of billing types
     *
     * @param  string $accept_language Expected language of name translations. Only Polish and English are currently supported. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingTypesAsyncWithHttpInfo($accept_language = null)
    {
        $returnType = '\OpenAPI\AllegroSdk\Model\BillingType[]';
        $request = $this->getBillingTypesRequest($accept_language);

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
     * Create request for operation 'getBillingTypes'
     *
     * @param  string $accept_language Expected language of name translations. Only Polish and English are currently supported. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBillingTypesRequest($accept_language = null)
    {

        $resourcePath = '/billing/billing-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
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
            'GET',
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
