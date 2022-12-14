<?php
/**
 * TransactionLedgerApi
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * wallet-api
 *
 * API
 *
 * The version of the OpenAPI document: 2.1.528
 * Contact: development@wallet.inc
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * TransactionLedgerApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionLedgerApi
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
    public function setHostIndex($hostIndex): void
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
     * Operation fetchAllLedgerTransactions
     *
     * Fetch ledger transactions by page
     *
     * @param  \DateTime $start_date_time start_date_time (required)
     * @param  \DateTime $end_date_time end_date_time (required)
     * @param  double $page_num page_num (required)
     * @param  double $page_size page_size (required)
     * @param  \OpenAPI\Client\Model\ApplicableTerminals $register_type register_type (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\InlineResponse2005|\OpenAPI\Client\Model\AuthError|\OpenAPI\Client\Model\FalsumError|\OpenAPI\Client\Model\InternalServerError
     */
    public function fetchAllLedgerTransactions($start_date_time, $end_date_time, $page_num, $page_size, $register_type = null)
    {
        list($response) = $this->fetchAllLedgerTransactionsWithHttpInfo($start_date_time, $end_date_time, $page_num, $page_size, $register_type);
        return $response;
    }

    /**
     * Operation fetchAllLedgerTransactionsWithHttpInfo
     *
     * Fetch ledger transactions by page
     *
     * @param  \DateTime $start_date_time (required)
     * @param  \DateTime $end_date_time (required)
     * @param  double $page_num (required)
     * @param  double $page_size (required)
     * @param  \OpenAPI\Client\Model\ApplicableTerminals $register_type (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\InlineResponse2005|\OpenAPI\Client\Model\AuthError|\OpenAPI\Client\Model\FalsumError|\OpenAPI\Client\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchAllLedgerTransactionsWithHttpInfo($start_date_time, $end_date_time, $page_num, $page_size, $register_type = null)
    {
        $request = $this->fetchAllLedgerTransactionsRequest($start_date_time, $end_date_time, $page_num, $page_size, $register_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\InlineResponse2005' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse2005', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\OpenAPI\Client\Model\AuthError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\AuthError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\OpenAPI\Client\Model\FalsumError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\FalsumError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InternalServerError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\InlineResponse2005';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\OpenAPI\Client\Model\InlineResponse2005',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\AuthError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\FalsumError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fetchAllLedgerTransactionsAsync
     *
     * Fetch ledger transactions by page
     *
     * @param  \DateTime $start_date_time (required)
     * @param  \DateTime $end_date_time (required)
     * @param  double $page_num (required)
     * @param  double $page_size (required)
     * @param  \OpenAPI\Client\Model\ApplicableTerminals $register_type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchAllLedgerTransactionsAsync($start_date_time, $end_date_time, $page_num, $page_size, $register_type = null)
    {
        return $this->fetchAllLedgerTransactionsAsyncWithHttpInfo($start_date_time, $end_date_time, $page_num, $page_size, $register_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fetchAllLedgerTransactionsAsyncWithHttpInfo
     *
     * Fetch ledger transactions by page
     *
     * @param  \DateTime $start_date_time (required)
     * @param  \DateTime $end_date_time (required)
     * @param  double $page_num (required)
     * @param  double $page_size (required)
     * @param  \OpenAPI\Client\Model\ApplicableTerminals $register_type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchAllLedgerTransactionsAsyncWithHttpInfo($start_date_time, $end_date_time, $page_num, $page_size, $register_type = null)
    {
        $returnType = '\OpenAPI\Client\Model\InlineResponse2005';
        $request = $this->fetchAllLedgerTransactionsRequest($start_date_time, $end_date_time, $page_num, $page_size, $register_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'fetchAllLedgerTransactions'
     *
     * @param  \DateTime $start_date_time (required)
     * @param  \DateTime $end_date_time (required)
     * @param  double $page_num (required)
     * @param  double $page_size (required)
     * @param  \OpenAPI\Client\Model\ApplicableTerminals $register_type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function fetchAllLedgerTransactionsRequest($start_date_time, $end_date_time, $page_num, $page_size, $register_type = null)
    {
        // verify the required parameter 'start_date_time' is set
        if ($start_date_time === null || (is_array($start_date_time) && count($start_date_time) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date_time when calling fetchAllLedgerTransactions'
            );
        }
        // verify the required parameter 'end_date_time' is set
        if ($end_date_time === null || (is_array($end_date_time) && count($end_date_time) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date_time when calling fetchAllLedgerTransactions'
            );
        }
        // verify the required parameter 'page_num' is set
        if ($page_num === null || (is_array($page_num) && count($page_num) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $page_num when calling fetchAllLedgerTransactions'
            );
        }
        // verify the required parameter 'page_size' is set
        if ($page_size === null || (is_array($page_size) && count($page_size) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $page_size when calling fetchAllLedgerTransactions'
            );
        }

        $resourcePath = '/v2/pos/ledger/transactions/all';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start_date_time !== null) {
            if('form' === 'form' && is_array($start_date_time)) {
                foreach($start_date_time as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['startDateTime'] = $start_date_time;
            }
        }
        // query params
        if ($end_date_time !== null) {
            if('form' === 'form' && is_array($end_date_time)) {
                foreach($end_date_time as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['endDateTime'] = $end_date_time;
            }
        }
        // query params
        if ($page_num !== null) {
            if('form' === 'form' && is_array($page_num)) {
                foreach($page_num as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['pageNum'] = $page_num;
            }
        }
        // query params
        if ($page_size !== null) {
            if('form' === 'form' && is_array($page_size)) {
                foreach($page_size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['pageSize'] = $page_size;
            }
        }
        // query params
        if ($register_type !== null) {
            if('form' === 'form' && is_array($register_type)) {
                foreach($register_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['registerType'] = $register_type;
            }
        }




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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
