<?php
namespace Payu\Parser;

use Payu\Exception\BadResponseError;
use Payu\Response\ResponseAbstract;
use Payu\Response\SellerGetterResponse;

class SellerGetterResponseParser implements ParserInterface
{

    public function parse($response)
    {
        $json = json_decode($response);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new BadResponseError('Unexpected response received from provider. Response: ' . $response);
        }

        return new SellerGetterResponse(
            $json->meta->response->httpCode,
            $json->meta->response->httpMessage,
            $json->meta->status->message,
            $json->seller->sellerType,
            $json->seller->sellerCode,
            $json->seller->homePage,
            $json->seller->companyName,
            $json->seller->fiscalCode,
            $json->seller->registrationNumber,
            $json->seller->address,
            $json->seller->city,
            $json->seller->state,
            $json->seller->zip,
            $json->seller->countryCode,
            $json->seller->phone,
            $json->seller->fax,
            $json->seller->techPhone,
            $json->seller->techEmail,
            $json->seller->techWeb,
            $json->seller->firstName,
            $json->seller->lastName,
            $json->seller->email,
            $json->seller->kycStatus,
            $json->seller->accountBalance,
            $json->meta->response->httpCode == ResponseAbstract::STATUS_INPUT_ERROR ? $json->errors : [],
            $response
        );
    }

}
