<?php
namespace Payu\Component;

class Seller
{

    private $type;

    private $homepage;

    private $companyName;

    private $fiscalCode;

    private $registrationNumber;

    private $address;

    private $city;

    private $state;

    private $zip;

    private $countryCode;

    private $phone;

    private $fax;

    private $techPhone;

    private $techEmail;

    private $techWeb;

    private $firstName;

    private $lastName;

    private $email;

    private $automaticEmail;

    /**
     * @param $type
     * @param $homepage
     * @param $companyName
     * @param $fiscalCode
     * @param $registrationNumber
     * @param $address
     * @param $city
     * @param $state
     * @param $zip
     * @param $countryCode
     * @param $phone
     * @param $fax
     * @param $techPhone
     * @param $techEmail
     * @param $techWeb
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $automaticEmail
     */
    public function __construct(
        $type,
        $email,
        $firstName,
        $lastName,
        $registrationNumber,
        $address,
        $city,
        $zip,
        $countryCode,
        $phone,
        $companyName = null,
        $homepage = null,
        $fiscalCode = null,
        $state = null,
        $fax = null,
        $techPhone = null,
        $techEmail = null,
        $techWeb = null,
        $automaticEmail = null
    ) {
        $this->type               = $type;
        $this->email              = $email;
        $this->firstName          = $firstName;
        $this->lastName           = $lastName;
        $this->registrationNumber = $registrationNumber;
        $this->address            = $address;
        $this->city               = $city;
        $this->zip                = $zip;
        $this->countryCode        = $countryCode;
        $this->phone              = $phone;
        $this->companyName        = $companyName;
        $this->homepage           = $homepage;
        $this->fiscalCode         = $fiscalCode;
        $this->state              = $state;
        $this->fax                = $fax;
        $this->techPhone          = $techPhone;
        $this->techEmail          = $techEmail;
        $this->techWeb            = $techWeb;
        $this->automaticEmail     = $automaticEmail ?: $this->email;
    }


    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * @param mixed $homepage
     *
     * @return $this
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFiscalCode()
    {
        return $this->fiscalCode;
    }

    /**
     * @param mixed $fiscalCode
     *
     * @return $this
     */
    public function setFiscalCode($fiscalCode)
    {
        $this->fiscalCode = $fiscalCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * @param mixed $registrationNumber
     *
     * @return $this
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTechPhone()
    {
        return $this->techPhone;
    }

    /**
     * @param mixed $techPhone
     *
     * @return $this
     */
    public function setTechPhone($techPhone)
    {
        $this->techPhone = $techPhone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTechEmail()
    {
        return $this->techEmail;
    }

    /**
     * @param mixed $techEmail
     *
     * @return $this
     */
    public function setTechEmail($techEmail)
    {
        $this->techEmail = $techEmail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTechWeb()
    {
        return $this->techWeb;
    }

    /**
     * @param mixed $techWeb
     *
     * @return $this
     */
    public function setTechWeb($techWeb)
    {
        $this->techWeb = $techWeb;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutomaticEmail()
    {
        return $this->automaticEmail;
    }

    /**
     * @param mixed $automaticEmail
     *
     * @return $this
     */
    public function setAutomaticEmail($automaticEmail)
    {
        $this->automaticEmail = $automaticEmail;

        return $this;
    }
}
