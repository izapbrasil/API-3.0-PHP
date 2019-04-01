<?php

namespace Cielo\API30\Ecommerce;

/**
 * Travel
 *
 * @author  Matheus Santos <matheus.santos@izap.com.br>
 * @version 1.0
 */
class Travel implements \JsonSerializable
{

    private $departureTime;

    private $journeyType;

    private $route;

    private $legs;

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
        $this->departureTime = isset($data->DepartureTime) ? $data->DepartureTime : null;
        $this->journeyType = isset($data->JourneyType) ? $data->JourneyType : null;
        $this->route = isset($data->Route) ? $data->Route : null;
        $this->legs = isset($data->Legs) ? $data->Legs : null;
    }

    /**
     * @return mixed
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @param mixed $departureTime
     *
     * @return Travel
     */
    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJourneyType()
    {
        return $this->journeyType;
    }

    /**
     * @param mixed $journeyType
     *
     * @return Travel
     */
    public function setJourneyType($journeyType)
    {
        $this->journeyType = $journeyType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param mixed $route
     *
     * @return Travel
     */
    public function setRoute($route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLegs()
    {
        return $this->legs;
    }

    /**
     * @param mixed $legs
     *
     * @return Travel
     */
    public function setLegs($legs)
    {
        $this->legs = $legs;
        return $this;
    }
}
