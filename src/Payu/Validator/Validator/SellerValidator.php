<?php
namespace Payu\Validator\Validator;

use Payu\Component\Seller;
use Payu\Exception\ValidationError;

class SellerValidator extends ValidatorAbstract
{

    /**
     * @throws ValidationError
     */
    protected function validateObject()
    {
        /** @var $object \Payu\Component\Seller */
        $object = $this->request->getSeller();
        if ( !$object || !$object instanceof Seller) {
            throw new ValidationError('Seller information does not be empty.');
        }
    }

    public function validate()
    {
        parent::validate();
    }

}
