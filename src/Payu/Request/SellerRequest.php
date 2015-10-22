<?php
namespace Payu\Request;

use Payu\Component\Seller;

class SellerRequest extends RequestAbstract
{

    private $seller;

    /**
     * @param $seller
     */
    public function __construct(Seller $seller)
    {
        $this->seller = $seller;
    }

    /**
     * @return Seller
     */
    public function getSeller()
    {
        return $this->seller;
    }

}
