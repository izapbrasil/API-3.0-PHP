<?php

namespace Cielo\API30\Ecommerce;

/**
 * FraudAnalysis
 *
 * @author  Matheus Santos <matheus.santos@izap.com.br>
 * @version 1.0
 */
class FraudAnalysis implements \JsonSerializable
{
    const SEQUENCE_ANALYSE_FIRST = 'AnalyseFirst';

    const SEQUENCE_AUTHORIZE_FIRST = 'AuthorizeFirst';

    const SEQUENCE_CRITERIA_ON_SUCCESS = 'OnSuccess';

    const SEQUENCE_CRITERIA_ALWAYS = 'Always';

    private $sequence;

    private $sequenceCriteria;

    private $captureOnLowRisk;

    private $voidOnHighRisk;

    private $totalOrderAmount;

    private $fingerPrintId;

    private $browser;

    private $cart;

    private $merchantDefinedFields;

    private $shipping;

    private $travel;

    private $id;

    private $status;

    private $replyData;

    private $provider;

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
        if (isset($data->Cart)) {
            $this->cart = new Cart();
            $this->cart->populate($data->Cart);
        }

        if (isset($data->Travel)) {
            $this->travel = new Travel();
            $this->travel->populate($data->Travel);
        }

        if (isset($data->Browser)) {
            $this->browser = new Browser();
            $this->browser->populate($data->Browser);
        }

        if (isset($data->Shipping)) {
            $this->shipping = new Shipping();
            $this->shipping->populate($data->Shipping);
        }

        if (isset($data->ReplyData)) {
            $this->replyData = new FraudAnalysisReplyData();
            $this->replyData->populate($data->ReplyData);
        }

        $this->sequence = isset($data->Sequence) ? $data->Sequence : null;
        $this->sequenceCriteria = isset($data->SequenceCriteria) ? $data->SequenceCriteria : null;
        $this->fingerPrintId = isset($data->FingerPrintId) ? $data->FingerPrintId : null;
        $this->merchantDefinedFields = isset($data->MerchantDefinedFields) ? $data->MerchantDefinedFields : null;
        $this->id = isset($data->Id) ? $data->Id : null;
        $this->status = isset($data->Status) ? $data->Status : null;
        $this->provider = isset($data->Provider) ? $data->Provider : null;
    }

    /**
     * @return mixed
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param mixed $sequence
     *
     * @return FraudAnalysis
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSequenceCriteria()
    {
        return $this->sequenceCriteria;
    }

    /**
     * @param mixed $sequenceCriteria
     *
     * @return FraudAnalysis
     */
    public function setSequenceCriteria($sequenceCriteria)
    {
        $this->sequenceCriteria = $sequenceCriteria;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaptureOnLowRisk()
    {
        return $this->captureOnLowRisk;
    }

    /**
     * @param mixed $captureOnLowRisk
     *
     * @return FraudAnalysis
     */
    public function setCaptureOnLowRisk($captureOnLowRisk)
    {
        $this->captureOnLowRisk = $captureOnLowRisk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVoidOnHighRisk()
    {
        return $this->voidOnHighRisk;
    }

    /**
     * @param mixed $voidOnHighRisk
     *
     * @return FraudAnalysis
     */
    public function setVoidOnHighRisk($voidOnHighRisk)
    {
        $this->voidOnHighRisk = $voidOnHighRisk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalOrderAmount()
    {
        return $this->totalOrderAmount;
    }

    /**
     * @param mixed $totalOrderAmount
     *
     * @return FraudAnalysis
     */
    public function setTotalOrderAmount($totalOrderAmount)
    {
        $this->totalOrderAmount = $totalOrderAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFingerPrintId()
    {
        return $this->fingerPrintId;
    }

    /**
     * @param mixed $fingerPrintId
     *
     * @return FraudAnalysis
     */
    public function setFingerPrintId($fingerPrintId)
    {
        $this->fingerPrintId = $fingerPrintId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * @param mixed $browser
     *
     * @return FraudAnalysis
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @param mixed $cart
     *
     * @return FraudAnalysis
     */
    public function setCart($cart)
    {
        $this->cart = $cart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantDefinedFields()
    {
        return $this->merchantDefinedFields;
    }

    /**
     * @param mixed $merchantDefinedFields
     *
     * @return FraudAnalysis
     */
    public function setMerchantDefinedFields($merchantDefinedFields)
    {
        $this->merchantDefinedFields = $merchantDefinedFields;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param mixed $shipping
     *
     * @return FraudAnalysis
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTravel()
    {
        return $this->travel;
    }

    /**
     * @param mixed $travel
     *
     * @return FraudAnalysis
     */
    public function setTravel($travel)
    {
        $this->travel = $travel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return FraudAnalysis
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     *
     * @return FraudAnalysis
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReplyData()
    {
        return $this->replyData;
    }

    /**
     * @param mixed $replyData
     *
     * @return FraudAnalysis
     */
    public function setReplyData($replyData)
    {
        $this->replyData = $replyData;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param $provider
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }
}
