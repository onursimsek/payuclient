<?php
namespace Payu\Parser;

use Guzzle\Http\EntityBody;
use Payu\Exception\BadResponseError;
use Payu\Response\PaymentResponse;
use Payu\Response\ResponseAbstract;
use \SimpleXMLElement;
use \Exception;

class PaymentResponseParser implements ParserInterface
{
    /**
     * @param EntityBody|string|array $rawData
     * @return PaymentResponse|ResponseAbstract
     * @throws \Payu\Exception\BadResponseError
     */
    public function parse($rawData)
    {
        try {
            $xml = ($rawData instanceof EntityBody || is_string($rawData)) ?
                                    new SimpleXMLElement($rawData) : (object) $rawData;
        } catch(Exception $e) {
            throw new BadResponseError('Unexpected response received from provider. Response: ' . $rawData);
        }

        $status = (string) $xml->STATUS;
        $code = (string) $xml->RETURN_CODE;
        $message = (string) $xml->RETURN_MESSAGE;
        $statusCode = $this->parseStatusCode($status, $code);
        $transactionId = $this->parseTransactionId($xml->REFNO, $statusCode);
        $hash = isset($xml->HASH) ? (string) $xml->HASH : null;
        $url3DS = isset($xml->URL_3DS) ? (string) $xml->URL_3DS : null;

        return new PaymentResponse($statusCode, $code, $message, $transactionId, $hash, $url3DS, $rawData);
    }

    private function parseStatusCode($status, $code)
    {
        switch ($status) {
            case 'SUCCESS':
                switch ($code) {
                    case '3DS_ENROLLED':
                        return ResponseAbstract::STATUS_UNAUTHORIZED;
                        break;
                    case 'AUTHORIZED':
                    default:
                        return ResponseAbstract::STATUS_APPROVED;
                        break;
                }
                break;
            case 'FAILED':
                return ResponseAbstract::STATUS_FAILED;
                break;
            case 'INPUT_ERROR':
                return ResponseAbstract::STATUS_INPUT_ERROR;
                break;
            default:
                return ResponseAbstract::STATUS_FAILED;
                break;
        }
    }

    private function parseTransactionId($refNo, $statusCode)
    {
        return in_array($statusCode, array(ResponseAbstract::STATUS_APPROVED, ResponseAbstract::STATUS_UNAUTHORIZED)) ?
                (string) $refNo : null;
    }
}