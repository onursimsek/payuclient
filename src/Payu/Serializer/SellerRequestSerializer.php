<?php
namespace Payu\Serializer;

class SellerRequestSerializer extends SerializerAbstract
{

    /**
     * @return array
     */
    public function serialize()
    {
        $filteredData = array_filter($this->serializeSeller());

        return $filteredData + [
            'signature' => $this->calculateHashForMerchant($filteredData),
        ];
    }

    /**
     * @param $rawData
     *
     * @return string
     */
    protected function calculateHashForMerchant(&$rawData)
    {
        ksort($rawData);
        $rawData['timestamp'] = time();

        $buffer = '';
        foreach ($rawData as $r) {
            $buffer .= $r;
        }

        return hash_hmac('sha256', $buffer, $this->configuration->getSecretKey());
    }

    /**
     * @return array
     */
    private function serializeSeller()
    {
        /** @var $seller \Payu\Component\Seller */
        $seller = $this->request->getSeller();

        return [
            'merchant'           => $this->configuration->getMerchantId(),
            'sellerType'         => $seller->getType(),
            'homepage'           => $seller->getHomepage(),
            'companyName'        => $seller->getCompanyName(),
            'fiscalCode'         => $seller->getFiscalCode(),
            'registrationNumber' => $seller->getRegistrationNumber(),
            'address'            => $seller->getAddress(),
            'city'               => $seller->getCity(),
            'state'              => $seller->getState(),
            'zip'                => $seller->getZip(),
            'countryCode'        => $seller->getCountryCode(),
            'phone'              => $seller->getPhone(),
            'fax'                => $seller->getFax(),
            'techPhone'          => $seller->getTechPhone(),
            'techEmail'          => $seller->getTechEmail(),
            'techWeb'            => $seller->getTechWeb(),
            'firstName'          => $seller->getFirstName(),
            'lastName'           => $seller->getLastName(),
            'email'              => $seller->getEmail(),
            'automaticEmail'     => $seller->getAutomaticEmail(),
        ];
    }

}
