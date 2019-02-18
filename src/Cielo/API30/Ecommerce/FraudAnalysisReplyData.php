<?php

namespace Cielo\API30\Ecommerce;

/**
 * FraudAnalysisReplyData
 *
 * @author  Matheus Santos <matheus.santos@izap.com.br>
 * @version 1.0
 */
class FraudAnalysisReplyData implements \JsonSerializable
{
    private $addressInfoCode;

    private $factorCode;

    private $score;

    private $binCountry;

    private $cardIssuer;

    private $cardScheme;

    private $hostSeverity;

    private $internetInfoCode;

    private $ipRoutingMethod;

    private $scoreModelUsed;

    private $casePriority;

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
        $this->addressInfoCode = isset($data->AddressInfoCode) ? $data->AddressInfoCode : null;
        $this->factorCode = isset($data->FactorCode) ? $data->FactorCode : null;
        $this->score = isset($data->Score) ? $data->Score : null;
        $this->binCountry = isset($data->BinCountry) ? $data->BinCountry : null;
        $this->cardIssuer = isset($data->CardIssuer) ? $data->CardIssuer : null;
        $this->cardScheme = isset($data->CardScheme) ? $data->CardScheme : null;
        $this->hostSeverity = isset($data->HostSeverity) ? $data->HostSeverity : null;
        $this->internetInfoCode = isset($data->InternetInfoCode) ? $data->InternetInfoCode : null;
        $this->ipRoutingMethod = isset($data->IpRoutingMethod) ? $data->IpRoutingMethod : null;
        $this->scoreModelUsed = isset($data->ScoreModelUsed) ? $data->ScoreModelUsed : null;
        $this->casePriority = isset($data->CasePriority) ? $data->CasePriority : null;
    }

    /**
     * @return mixed
     */
    public function getAddressInfoCode()
    {
        return $this->addressInfoCode;
    }

    /**
     * @param mixed $addressInfoCode
     *
     * @return FraudAnalysisReplyData
     */
    public function setAddressInfoCode($addressInfoCode)
    {
        $this->addressInfoCode = $addressInfoCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFactorCode()
    {
        return $this->factorCode;
    }

    /**
     * @param mixed $factorCode
     *
     * @return FraudAnalysisReplyData
     */
    public function setFactorCode($factorCode)
    {
        $this->factorCode = $factorCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     *
     * @return FraudAnalysisReplyData
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBinCountry()
    {
        return $this->binCountry;
    }

    /**
     * @param mixed $binCountry
     *
     * @return FraudAnalysisReplyData
     */
    public function setBinCountry($binCountry)
    {
        $this->binCountry = $binCountry;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardIssuer()
    {
        return $this->cardIssuer;
    }

    /**
     * @param mixed $cardIssuer
     *
     * @return FraudAnalysisReplyData
     */
    public function setCardIssuer($cardIssuer)
    {
        $this->cardIssuer = $cardIssuer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardScheme()
    {
        return $this->cardScheme;
    }

    /**
     * @param mixed $cardScheme
     *
     * @return FraudAnalysisReplyData
     */
    public function setCardScheme($cardScheme)
    {
        $this->cardScheme = $cardScheme;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHostSeverity()
    {
        return $this->hostSeverity;
    }

    /**
     * @param mixed $hostSeverity
     *
     * @return FraudAnalysisReplyData
     */
    public function setHostSeverity($hostSeverity)
    {
        $this->hostSeverity = $hostSeverity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInternetInfoCode()
    {
        return $this->internetInfoCode;
    }

    /**
     * @param mixed $internetInfoCode
     *
     * @return FraudAnalysisReplyData
     */
    public function setInternetInfoCode($internetInfoCode)
    {
        $this->internetInfoCode = $internetInfoCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIpRoutingMethod()
    {
        return $this->ipRoutingMethod;
    }

    /**
     * @param mixed $ipRoutingMethod
     *
     * @return FraudAnalysisReplyData
     */
    public function setIpRoutingMethod($ipRoutingMethod)
    {
        $this->ipRoutingMethod = $ipRoutingMethod;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScoreModelUsed()
    {
        return $this->scoreModelUsed;
    }

    /**
     * @param mixed $scoreModelUsed
     *
     * @return FraudAnalysisReplyData
     */
    public function setScoreModelUsed($scoreModelUsed)
    {
        $this->scoreModelUsed = $scoreModelUsed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCasePriority()
    {
        return $this->casePriority;
    }

    /**
     * @param mixed $casePriority
     *
     * @return FraudAnalysisReplyData
     */
    public function setCasePriority($casePriority)
    {
        $this->casePriority = $casePriority;
        return $this;
    }
}
