<?php
namespace Payu\Response;

class SellerGetterResponse extends ResponseAbstract
{

    /**
     * @var string
     */
    protected $sellerType;

    /**
     * @var string
     */
    protected $sellerCode;

    /**
     * @var string
     */
    protected $homePage;

    /**
     * @var string
     */
    protected $companyName;

    /**
     * @var string
     */
    protected $fiscalCode;

    /**
     * @var string
     */
    protected $registrationNumber;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $zip;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $fax;

    /**
     * @var string
     */
    protected $techPhone;

    /**
     * @var string
     */
    protected $techEmail;

    /**
     * @var string
     */
    protected $techWeb;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $kycStatus;

    /**
     * @var integer
     */
    protected $accountBalance;

    /**
     * @var array
     */
    protected $errorFields;

    /**
     * SellerGetterResponse constructor.
     *
     * @param int $status
     * @param string $code
     * @param string $message
     * @param string $sellerType
     * @param string $sellerCode
     * @param string $homePage
     * @param string $companyName
     * @param string $fiscalCode
     * @param string $registrationNumber
     * @param string $address
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $countryCode
     * @param string $phone
     * @param string $fax
     * @param string $techPhone
     * @param string $techEmail
     * @param string $techWeb
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $kycStatus
     * @param int $accountBalance
     * @param array $errorFields
     * @param $rawData
     */
    public function __construct(
        $status,
        $code,
        $message,
        $sellerType,
        $sellerCode,
        $homePage,
        $companyName,
        $fiscalCode,
        $registrationNumber,
        $address,
        $city,
        $state,
        $zip,
        $countryCode,
        $phone,
        $fax,
        $techPhone,
        $techEmail,
        $techWeb,
        $firstName,
        $lastName,
        $email,
        $kycStatus,
        $accountBalance,
        $errorFields = [],
        $rawData
    ) {
        parent::__construct($status, $code, $message, $rawData);

        $this->sellerType = $sellerType;
        $this->sellerCode = $sellerCode;
        $this->homePage = $homePage;
        $this->companyName = $companyName;
        $this->fiscalCode = $fiscalCode;
        $this->registrationNumber = $registrationNumber;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->countryCode = $countryCode;
        $this->phone = $phone;
        $this->fax = $fax;
        $this->techPhone = $techPhone;
        $this->techEmail = $techEmail;
        $this->techWeb = $techWeb;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->kycStatus = $kycStatus;
        $this->accountBalance = $accountBalance;
        $this->errorFields = $errorFields;
    }

    /**
     * @return string
     */
    public function getSellerType()
    {
        return $this->sellerType;
    }

    /**
     * @param string $sellerType
     */
    public function setSellerType($sellerType)
    {
        $this->sellerType = $sellerType;
    }

    /**
     * @return string
     */
    public function getSellerCode()
    {
        return $this->sellerCode;
    }

    /**
     * @param string $sellerCode
     */
    public function setSellerCode($sellerCode)
    {
        $this->sellerCode = $sellerCode;
    }

    /**
     * @return string
     */
    public function getHomePage()
    {
        return $this->homePage;
    }

    /**
     * @param string $homePage
     */
    public function setHomePage($homePage)
    {
        $this->homePage = $homePage;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string
     */
    public function getFiscalCode()
    {
        return $this->fiscalCode;
    }

    /**
     * @param string $fiscalCode
     */
    public function setFiscalCode($fiscalCode)
    {
        $this->fiscalCode = $fiscalCode;
    }

    /**
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * @param string $registrationNumber
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return string
     */
    public function getTechPhone()
    {
        return $this->techPhone;
    }

    /**
     * @param string $techPhone
     */
    public function setTechPhone($techPhone)
    {
        $this->techPhone = $techPhone;
    }

    /**
     * @return string
     */
    public function getTechEmail()
    {
        return $this->techEmail;
    }

    /**
     * @param string $techEmail
     */
    public function setTechEmail($techEmail)
    {
        $this->techEmail = $techEmail;
    }

    /**
     * @return string
     */
    public function getTechWeb()
    {
        return $this->techWeb;
    }

    /**
     * @param string $techWeb
     */
    public function setTechWeb($techWeb)
    {
        $this->techWeb = $techWeb;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getKycStatus()
    {
        return $this->kycStatus;
    }

    /**
     * @param string $kycStatus
     */
    public function setKycStatus($kycStatus)
    {
        $this->kycStatus = $kycStatus;
    }

    /**
     * @return int
     */
    public function getAccountBalance()
    {
        return $this->accountBalance;
    }

    /**
     * @param int $accountBalance
     */
    public function setAccountBalance($accountBalance)
    {
        $this->accountBalance = $accountBalance;
    }

}
