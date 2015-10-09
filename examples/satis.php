<?php

require '../vendor/autoload.php';

/**
 * PayU test hesabı ile standart satış örneği
 */
$config = new \Payu\Configuration();
$config->setMerchantId('OPU_TEST');
$config->setSecretKey('SECRET_KEY');
$config->setPaymentEndpointUrl('https://secure.payu.com.tr/order/alu/v3');

$client = new \Payu\Client($config);

$request = $client->createPaymentRequestBuilder()
                  ->buildCard('5571135571135575', '000', 12, 2018)
                  ->buildOrder(mb_convert_case(uniqid(), MB_CASE_UPPER), '127.0.0.1')
                  ->buildBilling('John', 'Smith', 'test@test.com', '05321231212')
                  ->buildAndAddProduct('The Product', 'PR1', 1, null, 0.1)
                  ->build();

$response = $client->makePayment($request);

if ($response->getStatus() == \Payu\Response\ResponseAbstract::STATUS_APPROVED) {
    // Odeme islemi basariyla gerceklesti.
    echo $response->getTransactionId();
} else {
    // Odeme islemi hatali oldu
    echo $response->getCode() . '<br>';
    echo $response->getMessage();
}
