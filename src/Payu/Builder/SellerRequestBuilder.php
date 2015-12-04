<?php
namespace Payu\Builder;

use Payu\Component\Seller;
use Payu\Request\SellerRequest;
use Payu\Serializer\SellerRequestSerializer;
use Payu\Validator\SellerRequestValidator;

class SellerRequestBuilder extends BuilderAbstract
{

    protected $seller;

    /**
     * @param Seller $seller
     *
     * @return $this
     */
    public function setSeller(Seller $seller)
    {
        $this->seller = $seller;

        return $this;
    }

    /**
     * @return SellerRequest
     */
    public function build()
    {
        $request = new SellerRequest($this->seller);

        $validator = new SellerRequestValidator($request);
        $validator->validate();

        $serializer = new SellerRequestSerializer($request, $this->configuration);
        $request->setRawData($serializer->serialize());

        return $request;
    }

}
