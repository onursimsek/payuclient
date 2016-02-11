<?php
namespace Payu\Response;

class SellerCreateResponse extends ResponseAbstract
{

    /**
     * @var string
     */
    protected $sellerCode;

    /**
     * @var array
     */
    protected $errorFields;

    /**
     * @param int $status
     * @param string $code
     * @param string $message
     * @param string $sellerCode
     * @param array $errorFields
     * @param $rawData
     */
    public function __construct($status, $code, $message, $sellerCode, $errorFields = [], $rawData)
    {
        parent::__construct($status, $code, $message, $rawData);

        $this->sellerCode  = $sellerCode;
        $this->errorFields = $errorFields;
    }

    /**
     * @return string
     */
    public function getSellerCode()
    {
        return $this->sellerCode;
    }

    /**
     * @return array
     */
    public function getErrorFields()
    {
        return $this->errorFields;
    }

}
