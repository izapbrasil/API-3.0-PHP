<?php

namespace Cielo\API30\Ecommerce\Request;

/**
 * Item
 *
 * @author  Matheus Santos <matheus.santos@izap.com.br>
 * @version 1.0
 */
class Item implements \JsonSerializable
{
    private $giftCategory;

    private $hostHedge;

    private $nonSensicalHedge;

    private $obscenitiesHedge;

    private $phoneHedge;

    private $name;

    private $quantity;

    private $sku;

    private $unitPrice;

    private $risk;

    private $timeHedge;

    private $type;

    private $velocityHedge;

    private $passenger;

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
    public function getGiftCategory()
    {
        return $this->giftCategory;
    }

    /**
     * @param mixed $giftCategory
     *
     * @return Item
     */
    public function setGiftCategory($giftCategory)
    {
        $this->giftCategory = $giftCategory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHostHedge()
    {
        return $this->hostHedge;
    }

    /**
     * @param mixed $hostHedge
     *
     * @return Item
     */
    public function setHostHedge($hostHedge)
    {
        $this->hostHedge = $hostHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNonSensicalHedge()
    {
        return $this->nonSensicalHedge;
    }

    /**
     * @param mixed $nonSensicalHedge
     *
     * @return Item
     */
    public function setNonSensicalHedge($nonSensicalHedge)
    {
        $this->nonSensicalHedge = $nonSensicalHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObscenitiesHedge()
    {
        return $this->obscenitiesHedge;
    }

    /**
     * @param mixed $obscenitiesHedge
     *
     * @return Item
     */
    public function setObscenitiesHedge($obscenitiesHedge)
    {
        $this->obscenitiesHedge = $obscenitiesHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneHedge()
    {
        return $this->phoneHedge;
    }

    /**
     * @param mixed $phoneHedge
     *
     * @return Item
     */
    public function setPhoneHedge($phoneHedge)
    {
        $this->phoneHedge = $phoneHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     *
     * @return Item
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     *
     * @return Item
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param mixed $unitPrice
     *
     * @return Item
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRisk()
    {
        return $this->risk;
    }

    /**
     * @param mixed $risk
     *
     * @return Item
     */
    public function setRisk($risk)
    {
        $this->risk = $risk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeHedge()
    {
        return $this->timeHedge;
    }

    /**
     * @param mixed $timeHedge
     *
     * @return Item
     */
    public function setTimeHedge($timeHedge)
    {
        $this->timeHedge = $timeHedge;
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
     * @return Item
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVelocityHedge()
    {
        return $this->velocityHedge;
    }

    /**
     * @param mixed $velocityHedge
     *
     * @return Item
     */
    public function setVelocityHedge($velocityHedge)
    {
        $this->velocityHedge = $velocityHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * @param mixed $passenger
     *
     * @return Item
     */
    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;
        return $this;
    }
}
