<?php
namespace Payu\Validator;

class SellerRequestValidator extends ValidatorAbstract
{

    private $validators = [
        '\\Payu\\Validator\\Validator\\SellerValidator',
    ];

    public function validate()
    {
        foreach ($this->validators as $validator) {
            /** @var $instance \Payu\Validator\Validator\ValidatorAbstract */
            $instance = new $validator($this->request);
            $instance->validate();
            unset($instance);
        }
    }

}
