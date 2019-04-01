<?php

namespace Cielo\API30\Ecommerce;

/**
 * Browser
 *
 * @author  Matheus Santos <matheus.santos@izap.com.br>
 * @version 1.0
 */
class Browser implements \JsonSerializable
{

    private $cookiesAccepted;

    private $email;

    private $hostName;

    private $ipAddress;

    private $type;

    /**
     * @return array
     */
    function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data)
    {
        $this->cookiesAccepted = isset($data->CookiesAccepted) ? $data->CookiesAccepted : null;
        $this->email = isset($data->Email) ? $data->Email : null;
        $this->hostName = isset($data->HostName) ? $data->HostName : null;
        $this->ipAddress = isset($data->IpAddress) ? $data->IpAddress : null;
        $this->type = isset($data->Type) ? $data->Type : null;
    }

    /**
     * @return mixed
     */
    public function getCookiesAccepted()
    {
        return $this->cookiesAccepted;
    }

    /**
     * @param mixed $cookiesAccepted
     *
     * @return Browser
     */
    public function setCookiesAccepted($cookiesAccepted)
    {
        $this->cookiesAccepted = $cookiesAccepted;
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
     * @return Browser
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * @param mixed $hostName
     *
     * @return Browser
     */
    public function setHostName($hostName)
    {
        $this->hostName = $hostName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param mixed $ipAddress
     *
     * @return Browser
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
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
     * @return Browser
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
