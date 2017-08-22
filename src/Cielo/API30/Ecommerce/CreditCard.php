<?php
namespace Cielo\API30\Ecommerce;

class CreditCard implements \JsonSerializable
{

    private $cardNumber;

    private $holder;

    private $expirationDate;

    private $securityCode;

    private $saveCard = false;

    private $brand;

    private $cardToken;

    private $customerName;

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function populate(\stdClass $data)
    {
        $this->cardNumber = isset($data->CardNumber)? $data->CardNumber: null;
        $this->holder = isset($data->Holder)? $data->Holder: null;
        $this->expirationDate = isset($data->ExpirationDate)? $data->ExpirationDate: null;
        $this->securityCode = isset($data->SecurityCode)? $data->SecurityCode: null;
        $this->saveCard = isset($data->SaveCard)? !!$data->SaveCard: false;
        $this->brand = isset($data->Brand)? $data->Brand: null;
        $this->cardToken = isset($data->CardToken)? $data->CardToken: null;
        $this->customerName = isset($data->CustomerName)? $data->CustomerName: null;
    }

    public static function fromJson($json)
    {
        $object = json_decode($json);

        $card = new CreditCard();
        $card->populate($object);

        return $card;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    public function getHolder()
    {
        return $this->holder;
    }

    public function setHolder($holder)
    {
        $this->holder = $holder;
        return $this;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
        return $this;
    }

    public function getSaveCard()
    {
        return $this->saveCard;
    }

    public function setSaveCard($saveCard)
    {
        $this->saveCard = $saveCard;
        return $this;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    public function getCardToken()
    {
        return $this->cardToken;
    }

    public function setCardToken($cardToken)
    {
        $this->cardToken = $cardToken;
        return $this;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }
}
