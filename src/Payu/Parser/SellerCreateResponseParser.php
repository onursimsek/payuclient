<?php
namespace Payu\Parser;

use Payu\Exception\BadResponseError;
use Payu\Response\ResponseAbstract;
use Payu\Response\SellerCreateResponse;

class SellerCreateResponseParser implements ParserInterface
{

    public function parse($response)
    {
        $json = json_decode($response);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new BadResponseError('Unexpected response received from provider. Response: ' . $response);
        }

        return new SellerCreateResponse(
            $json->meta->response->httpCode,
            $json->meta->response->httpMessage,
            $json->meta->status->message,
            !empty($json->sellerCode) ? $json->sellerCode : null,
            $json->meta->response->httpCode == ResponseAbstract::STATUS_INPUT_ERROR ? $json->errors : []
        );
    }

}
