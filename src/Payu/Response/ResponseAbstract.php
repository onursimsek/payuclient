<?php
namespace Payu\Response;

abstract class ResponseAbstract
{
    const STATUS_APPROVED = 200;
    const STATUS_INPUT_ERROR = 400;
    const STATUS_UNAUTHORIZED = 401;
    const STATUS_FAILED = 500;

    /**
     * @var integer
     */
    protected $status;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var string
     */
    protected $rawData;

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getRawData()
    {
        return $this->rawData;
    }

    /**
     * @param string $rawData
     * @return $this
     */
    public function setRawData($rawData)
    {
        $this->rawData = $rawData;
        return $this;
    }

    /**
     * @param integer $status
     * @param string $code
     * @param string $message
     * @param string $rawData
     */
    public function __construct($status, $code, $message, $rawData)
    {
        $this->setStatus($status);
        $this->setCode($code);
        $this->setMessage($message);
        $this->setRawData($rawData);
    }
} 