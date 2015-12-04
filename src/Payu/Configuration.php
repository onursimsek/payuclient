<?php
namespace Payu;

class Configuration
{
    /**
     * @var string
     */
    private $merchantId;

    /**
     * @var string
     */
    private $secretKey;

    /**
     * @var string
     */
    private $paymentEndpointUrl;

    /**
     * @var string
     */
    private $loyaltyInquiryEndPointUrl;

    /**
     * @var string
     */
    private $paymentReturnPointUrl;

    /**
     * @var string
     */
    private $marketplaceEndpointUrl;

    public function __construct(
        $merchantId = null,
        $secretKey = null,
        $paymentEndpointUrl = null,
        $loyaltyInquiryEndPointUrl = null,
        $paymentReturnPointUrl = null,
        $marketplaceEndpointUrl = null
    )
    {
        $this->merchantId = $merchantId;
        $this->secretKey = $secretKey;
        $this->paymentEndpointUrl = $paymentEndpointUrl;
        $this->loyaltyInquiryEndPointUrl = $loyaltyInquiryEndPointUrl;
        $this->paymentReturnPointUrl = $paymentReturnPointUrl;
        $this->marketplaceEndpointUrl = $marketplaceEndpointUrl;
    }

    /**
     * @param string $loyaltyInquiryEndPointUrl
     * @return $this
     */
    public function setLoyaltyInquiryEndPointUrl($loyaltyInquiryEndPointUrl)
    {
        $this->loyaltyInquiryEndPointUrl = $loyaltyInquiryEndPointUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getLoyaltyInquiryEndPointUrl()
    {
        return $this->loyaltyInquiryEndPointUrl;
    }

    /**
     * @param string $merchantId
     * @return $this
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param string $paymentEndpointUrl
     * @return $this
     */
    public function setPaymentEndpointUrl($paymentEndpointUrl)
    {
        $this->paymentEndpointUrl = $paymentEndpointUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentEndpointUrl()
    {
        return $this->paymentEndpointUrl;
    }

    /**
     * @param string $secretKey
     * @return $this
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @return string
     */
    public function getPaymentReturnPointUrl()
    {
        return $this->paymentReturnPointUrl;
    }

    /**
     * @param string $paymentReturnPointUrl
     */
    public function setPaymentReturnPointUrl($paymentReturnPointUrl)
    {
        $this->paymentReturnPointUrl = $paymentReturnPointUrl;
    }

    /**
     * @return string
     */
    public function getMarketplaceEndpointUrl()
    {
        return $this->marketplaceEndpointUrl;
    }

    /**
     * @param string $marketplaceEndpointUrl
     *
     * @return $this
     */
    public function setMarketplaceEndpointUrl($marketplaceEndpointUrl)
    {
        $this->marketplaceEndpointUrl = $marketplaceEndpointUrl;

        return $this;
    }
}