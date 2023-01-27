<?php
/**
 * FulfillmentStockApi
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
 * FulfillmentStockApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentStockApi
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
     * Operation getFulfillmentStock
     *
     * Get available stock
     *
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending) (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability (optional)
     * @param  string $product_status Filtering search results by status (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal (optional)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\AllegroSdk\Model\StockProductList|\OpenAPI\AllegroSdk\Model\ErrorsHolder
     */
    public function getFulfillmentStock($offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null)
    {
        list($response) = $this->getFulfillmentStockWithHttpInfo($offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to);
        return $response;
    }

    /**
     * Operation getFulfillmentStockWithHttpInfo
     *
     * Get available stock
     *
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending) (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability (optional)
     * @param  string $product_status Filtering search results by status (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal (optional)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\AllegroSdk\Model\StockProductList|\OpenAPI\AllegroSdk\Model\ErrorsHolder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFulfillmentStockWithHttpInfo($offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null)
    {
        $request = $this->getFulfillmentStockRequest($offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to);

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
                    if ('\OpenAPI\AllegroSdk\Model\StockProductList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\StockProductList', []),
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

            $returnType = '\OpenAPI\AllegroSdk\Model\StockProductList';
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
                        '\OpenAPI\AllegroSdk\Model\StockProductList',
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
     * Operation getFulfillmentStockAsync
     *
     * Get available stock
     *
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending) (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability (optional)
     * @param  string $product_status Filtering search results by status (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentStockAsync($offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null)
    {
        return $this->getFulfillmentStockAsyncWithHttpInfo($offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFulfillmentStockAsyncWithHttpInfo
     *
     * Get available stock
     *
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending) (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability (optional)
     * @param  string $product_status Filtering search results by status (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentStockAsyncWithHttpInfo($offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null)
    {
        $returnType = '\OpenAPI\AllegroSdk\Model\StockProductList';
        $request = $this->getFulfillmentStockRequest($offset, $limit, $phrase, $sort, $product_id, $product_availability, $product_status, $storage_fee, $asn_status, $out_of_stock_in_from, $out_of_stock_in_to);

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
     * Create request for operation 'getFulfillmentStock'
     *
     * @param  int $offset The offset of elements in the response. Ignored for text/csv content type. (optional, default to 0)
     * @param  int $limit Maximum number of elements in response. Ignored for text/csv content type. (optional, default to 50)
     * @param  string $phrase Filtering search results by product name. (optional)
     * @param  string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type. Possible values for the \&quot;sort\&quot; parameter:   * -available - sorting by quantity of available products (descending)   * available - sorting by quantity of available products (ascending)   * -unfulfillable - sorting by quantity of unfulfillable products (descending)   * unfulfillable - sorting by quantity of unfulfillable products (ascending)   * -name - sorting by product’s name (descending)   * name - sorting by product’s name (ascending)   * lastWeekSalesAverage - sorting by product last week average sales (ascending)   * -lastWeekSalesAverage - sorting by product last week average sales (descending)   * reserve - sorting by reserve.outOfStockIn field (ascending)   * -reserve - sorting by reserve.outOfStockIn field (descending)   * lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)   * -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending) (optional, default to 'name')
     * @param  string $product_id Filtering search results by fulfillment product identifier. Ignored for text/csv content type. (optional)
     * @param  string[] $product_availability Filtering search results by availability (optional)
     * @param  string $product_status Filtering search results by status (optional)
     * @param  string $storage_fee Filtering search results storage fee. Two values are possible: FREE - products storage fee is included in basic fee or merchant is in grace period PAID - products for which an extra storage fee is calculated (optional)
     * @param  string $asn_status Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don&#39;t have related ASN with products on it are returned. (optional)
     * @param  int $out_of_stock_in_from Filter by products with outOfStockIn greater than or equal (optional)
     * @param  int $out_of_stock_in_to Filter by products with outOfStockIn less than or equal (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFulfillmentStockRequest($offset = 0, $limit = 50, $phrase = null, $sort = 'name', $product_id = null, $product_availability = null, $product_status = null, $storage_fee = null, $asn_status = null, $out_of_stock_in_from = null, $out_of_stock_in_to = null)
    {
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling FulfillmentStockApi.getFulfillmentStock, must be bigger than or equal to 0.');
        }

        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling FulfillmentStockApi.getFulfillmentStock, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling FulfillmentStockApi.getFulfillmentStock, must be bigger than or equal to 1.');
        }

        if ($phrase !== null && strlen($phrase) < 3) {
            throw new \InvalidArgumentException('invalid length for "$phrase" when calling FulfillmentStockApi.getFulfillmentStock, must be bigger than or equal to 3.');
        }


        $resourcePath = '/fulfillment/stock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
        if ($phrase !== null) {
            if('form' === 'form' && is_array($phrase)) {
                foreach($phrase as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['phrase'] = $phrase;
            }
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort'] = $sort;
            }
        }
        // query params
        if ($product_id !== null) {
            if('form' === 'form' && is_array($product_id)) {
                foreach($product_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['productId'] = $product_id;
            }
        }
        // query params
        if ($product_availability !== null) {
            if('form' === 'form' && is_array($product_availability)) {
                foreach($product_availability as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['productAvailability'] = $product_availability;
            }
        }
        // query params
        if ($product_status !== null) {
            if('form' === 'form' && is_array($product_status)) {
                foreach($product_status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['productStatus'] = $product_status;
            }
        }
        // query params
        if ($storage_fee !== null) {
            if('form' === 'form' && is_array($storage_fee)) {
                foreach($storage_fee as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['storageFee'] = $storage_fee;
            }
        }
        // query params
        if ($asn_status !== null) {
            if('form' === 'form' && is_array($asn_status)) {
                foreach($asn_status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['asnStatus'] = $asn_status;
            }
        }
        // query params
        if ($out_of_stock_in_from !== null) {
            if('form' === 'form' && is_array($out_of_stock_in_from)) {
                foreach($out_of_stock_in_from as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['outOfStockInFrom'] = $out_of_stock_in_from;
            }
        }
        // query params
        if ($out_of_stock_in_to !== null) {
            if('form' === 'form' && is_array($out_of_stock_in_to)) {
                foreach($out_of_stock_in_to as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['outOfStockInTo'] = $out_of_stock_in_to;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.allegro.public.v1+json', 'text/csv', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.allegro.public.v1+json', 'text/csv', 'application/json'],
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
