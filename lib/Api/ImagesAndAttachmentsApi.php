<?php
/**
 * ImagesAndAttachmentsApi
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
 * ImagesAndAttachmentsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\AllegroSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ImagesAndAttachmentsApi
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
     * Operation createOfferAttachmentUsingPOST
     *
     * Create an offer attachment
     *
     * @param  \OpenAPI\AllegroSdk\Model\OfferAttachmentRequest $offer_attachment_request offer attachment (required)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\AllegroSdk\Model\OfferAttachment
     */
    public function createOfferAttachmentUsingPOST($offer_attachment_request)
    {
        list($response) = $this->createOfferAttachmentUsingPOSTWithHttpInfo($offer_attachment_request);
        return $response;
    }

    /**
     * Operation createOfferAttachmentUsingPOSTWithHttpInfo
     *
     * Create an offer attachment
     *
     * @param  \OpenAPI\AllegroSdk\Model\OfferAttachmentRequest $offer_attachment_request offer attachment (required)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\AllegroSdk\Model\OfferAttachment, HTTP status code, HTTP response headers (array of strings)
     */
    public function createOfferAttachmentUsingPOSTWithHttpInfo($offer_attachment_request)
    {
        $request = $this->createOfferAttachmentUsingPOSTRequest($offer_attachment_request);

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
                    if ('\OpenAPI\AllegroSdk\Model\OfferAttachment' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\OfferAttachment', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\AllegroSdk\Model\OfferAttachment';
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
                        '\OpenAPI\AllegroSdk\Model\OfferAttachment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createOfferAttachmentUsingPOSTAsync
     *
     * Create an offer attachment
     *
     * @param  \OpenAPI\AllegroSdk\Model\OfferAttachmentRequest $offer_attachment_request offer attachment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOfferAttachmentUsingPOSTAsync($offer_attachment_request)
    {
        return $this->createOfferAttachmentUsingPOSTAsyncWithHttpInfo($offer_attachment_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createOfferAttachmentUsingPOSTAsyncWithHttpInfo
     *
     * Create an offer attachment
     *
     * @param  \OpenAPI\AllegroSdk\Model\OfferAttachmentRequest $offer_attachment_request offer attachment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOfferAttachmentUsingPOSTAsyncWithHttpInfo($offer_attachment_request)
    {
        $returnType = '\OpenAPI\AllegroSdk\Model\OfferAttachment';
        $request = $this->createOfferAttachmentUsingPOSTRequest($offer_attachment_request);

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
     * Create request for operation 'createOfferAttachmentUsingPOST'
     *
     * @param  \OpenAPI\AllegroSdk\Model\OfferAttachmentRequest $offer_attachment_request offer attachment (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createOfferAttachmentUsingPOSTRequest($offer_attachment_request)
    {
        // verify the required parameter 'offer_attachment_request' is set
        if ($offer_attachment_request === null || (is_array($offer_attachment_request) && count($offer_attachment_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $offer_attachment_request when calling createOfferAttachmentUsingPOST'
            );
        }

        $resourcePath = '/sale/offer-attachments';
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
        if (isset($offer_attachment_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($offer_attachment_request));
            } else {
                $httpBody = $offer_attachment_request;
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
     * Operation uploadOfferAttachmentUsingPUT
     *
     * Upload an offer attachment
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://upload.{environment}
     *
     * @param  string $attachment_id The ID of the attachment. (required)
     * @param  \SplFileObject $body body (optional)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\AllegroSdk\Model\OfferAttachment
     */
    public function uploadOfferAttachmentUsingPUT($attachment_id, $body = null)
    {
        list($response) = $this->uploadOfferAttachmentUsingPUTWithHttpInfo($attachment_id, $body);
        return $response;
    }

    /**
     * Operation uploadOfferAttachmentUsingPUTWithHttpInfo
     *
     * Upload an offer attachment
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://upload.{environment}
     *
     * @param  string $attachment_id The ID of the attachment. (required)
     * @param  \SplFileObject $body (optional)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\AllegroSdk\Model\OfferAttachment, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadOfferAttachmentUsingPUTWithHttpInfo($attachment_id, $body = null)
    {
        $request = $this->uploadOfferAttachmentUsingPUTRequest($attachment_id, $body);

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
                    if ('\OpenAPI\AllegroSdk\Model\OfferAttachment' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\OfferAttachment', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\AllegroSdk\Model\OfferAttachment';
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
                        '\OpenAPI\AllegroSdk\Model\OfferAttachment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadOfferAttachmentUsingPUTAsync
     *
     * Upload an offer attachment
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://upload.{environment}
     *
     * @param  string $attachment_id The ID of the attachment. (required)
     * @param  \SplFileObject $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadOfferAttachmentUsingPUTAsync($attachment_id, $body = null)
    {
        return $this->uploadOfferAttachmentUsingPUTAsyncWithHttpInfo($attachment_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadOfferAttachmentUsingPUTAsyncWithHttpInfo
     *
     * Upload an offer attachment
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://upload.{environment}
     *
     * @param  string $attachment_id The ID of the attachment. (required)
     * @param  \SplFileObject $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadOfferAttachmentUsingPUTAsyncWithHttpInfo($attachment_id, $body = null)
    {
        $returnType = '\OpenAPI\AllegroSdk\Model\OfferAttachment';
        $request = $this->uploadOfferAttachmentUsingPUTRequest($attachment_id, $body);

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
     * Create request for operation 'uploadOfferAttachmentUsingPUT'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://upload.{environment}
     *
     * @param  string $attachment_id The ID of the attachment. (required)
     * @param  \SplFileObject $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function uploadOfferAttachmentUsingPUTRequest($attachment_id, $body = null)
    {
        // verify the required parameter 'attachment_id' is set
        if ($attachment_id === null || (is_array($attachment_id) && count($attachment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $attachment_id when calling uploadOfferAttachmentUsingPUT'
            );
        }

        $resourcePath = '/sale/offer-attachments/{attachmentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($attachment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'attachmentId' . '}',
                ObjectSerializer::toPathValue($attachment_id),
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
                ['application/pdf', 'image/jpeg', 'image/png']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
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

        $operationHosts = ["https://upload.{environment}"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation uploadOfferImageUsingPOST
     *
     * Upload an offer image
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://upload.{environment}
     *
     * @param  \OpenAPI\AllegroSdk\Model\OfferImageLinkUploadRequest $offer_image_link_upload_request offer_image_link_upload_request (required)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\AllegroSdk\Model\OfferImageUploadResponse
     */
    public function uploadOfferImageUsingPOST($offer_image_link_upload_request)
    {
        list($response) = $this->uploadOfferImageUsingPOSTWithHttpInfo($offer_image_link_upload_request);
        return $response;
    }

    /**
     * Operation uploadOfferImageUsingPOSTWithHttpInfo
     *
     * Upload an offer image
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://upload.{environment}
     *
     * @param  \OpenAPI\AllegroSdk\Model\OfferImageLinkUploadRequest $offer_image_link_upload_request (required)
     *
     * @throws \OpenAPI\AllegroSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\AllegroSdk\Model\OfferImageUploadResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadOfferImageUsingPOSTWithHttpInfo($offer_image_link_upload_request)
    {
        $request = $this->uploadOfferImageUsingPOSTRequest($offer_image_link_upload_request);

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
                    if ('\OpenAPI\AllegroSdk\Model\OfferImageUploadResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\AllegroSdk\Model\OfferImageUploadResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\AllegroSdk\Model\OfferImageUploadResponse';
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
                        '\OpenAPI\AllegroSdk\Model\OfferImageUploadResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadOfferImageUsingPOSTAsync
     *
     * Upload an offer image
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://upload.{environment}
     *
     * @param  \OpenAPI\AllegroSdk\Model\OfferImageLinkUploadRequest $offer_image_link_upload_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadOfferImageUsingPOSTAsync($offer_image_link_upload_request)
    {
        return $this->uploadOfferImageUsingPOSTAsyncWithHttpInfo($offer_image_link_upload_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadOfferImageUsingPOSTAsyncWithHttpInfo
     *
     * Upload an offer image
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://upload.{environment}
     *
     * @param  \OpenAPI\AllegroSdk\Model\OfferImageLinkUploadRequest $offer_image_link_upload_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadOfferImageUsingPOSTAsyncWithHttpInfo($offer_image_link_upload_request)
    {
        $returnType = '\OpenAPI\AllegroSdk\Model\OfferImageUploadResponse';
        $request = $this->uploadOfferImageUsingPOSTRequest($offer_image_link_upload_request);

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
     * Create request for operation 'uploadOfferImageUsingPOST'
     *
     * This oepration contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://upload.{environment}
     *
     * @param  \OpenAPI\AllegroSdk\Model\OfferImageLinkUploadRequest $offer_image_link_upload_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function uploadOfferImageUsingPOSTRequest($offer_image_link_upload_request)
    {
        // verify the required parameter 'offer_image_link_upload_request' is set
        if ($offer_image_link_upload_request === null || (is_array($offer_image_link_upload_request) && count($offer_image_link_upload_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $offer_image_link_upload_request when calling uploadOfferImageUsingPOST'
            );
        }

        $resourcePath = '/sale/images';
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
                ['application/vnd.allegro.public.v1+json', 'image/jpeg', 'image/png', 'image/webp']
            );
        }

        // for model (json/xml)
        if (isset($offer_image_link_upload_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($offer_image_link_upload_request));
            } else {
                $httpBody = $offer_image_link_upload_request;
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

        $operationHosts = ["https://upload.{environment}"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
