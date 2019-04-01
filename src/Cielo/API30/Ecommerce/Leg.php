<?php

namespace Cielo\API30\Ecommerce;

/**
 * Leg
 *
 * @author  Matheus Santos <matheus.santos@izap.com.br>
 * @version 1.0
 */
class Leg implements \JsonSerializable
{

    private $destination;

    private $origin;

    /**
     * @return array
     */
    function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     *
     * @return Leg
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     *
     * @return Leg
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }
}
