<?php
namespace Payu;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use Payu\Builder\LoyaltyInquiryRequestBuilder;
use Payu\Builder\PaymentRequestBuilder;
use Payu\Builder\SellerRequestBuilder;
use Payu\Exception\ConnectionError;
use Payu\Parser\LoyaltyInquiryResponseParser;
use Payu\Parser\PaymentResponseParser;
use Payu\Parser\ResponseParser;
use Payu\Parser\SellerCreateResponseParser;
use Payu\Parser\SellerGetterResponseParser;
use Payu\Request\LoyaltyInquiryRequest;
use Payu\Request\PaymentRequest;
use Payu\Request\RequestAbstract;
use Payu\Request\SellerRequest;

class Client
{
    /**
     * @var \Payu\Configuration
     */
    private $configuration;

    /**
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return PaymentRequestBuilder
     */
    public function createPaymentRequestBuilder()
    {
        return new PaymentRequestBuilder($this->configuration);
    }

    /**
     * @return LoyaltyInquiryRequestBuilder
     */
    public function createLoyaltyInquiryRequestBuilder()
    {
        return new LoyaltyInquiryRequestBuilder($this->configuration);
    }

    public function createMarketplaceSellerBuilder()
    {
        return new SellerRequestBuilder($this->configuration);
    }

    /**
     * @param RequestAbstract $request
     * @param string          $endpointUrl
     *
     * @return string
     * @throws Exception\ConnectionError
     */
    private function sendRequest(RequestAbstract $request, $endpointUrl)
    {
        $client = new \GuzzleHttp\Client([
            'defaults' => [
                'verify'               => false,
                CURLOPT_SSL_VERIFYHOST => false,
            ],
        ]);

        try {
            $httpRequest = $client->request('POST', $endpointUrl, [
                'form_params' => $request->getRawData(),
            ]);

            return $httpRequest->getBody()->getContents();

        } catch (ClientException $e) {
            return $e->getResponse()->getBody()->getContents();
        } catch (RequestException $e) {
            throw new ConnectionError($e->getMessage());
        }
    }

    /**
     * @param PaymentRequest $request
     *
     * @return Response\PaymentResponse
     */
    public function makePayment(PaymentRequest $request)
    {
        $rawResponse = $this->sendRequest($request, $this->configuration->getPaymentEndpointUrl());
        $parser      = new ResponseParser(new PaymentResponseParser(), $rawResponse);

        return $parser->parse();
    }

    /**
     * @param LoyaltyInquiryRequest $request
     *
     * @return Response\LoyaltyInquiryResponse
     */
    public function makeLoyaltyInquiry(LoyaltyInquiryRequest $request)
    {
        $rawResponse = $this->sendRequest($request, $this->configuration->getLoyaltyInquiryEndPointUrl());
        $parser      = new ResponseParser(new LoyaltyInquiryResponseParser(), $rawResponse);

        return $parser->parse();
    }

    /**
     * @param SellerRequest $request
     *
     * @return Response\SellerCreateResponse
     * @throws ConnectionError
     */
    public function createSeller(SellerRequest $request)
    {
        $response = $this->sendRequest($request, $this->configuration->getMarketplaceEndpointUrl());
        $parser   = new ResponseParser(new SellerCreateResponseParser(), $response);

        return $parser->parse();
    }

    public function getSeller(SellerRequest $request)
    {
        $response = $this->sendRequest($request, $this->configuration->getMarketplaceEndpointUrl());
        $parser   = new ResponseParser(new SellerGetterResponseParser(), $response);

        return $parser->parse();
    }
}
