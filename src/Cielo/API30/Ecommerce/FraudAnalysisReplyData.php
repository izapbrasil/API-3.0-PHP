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
}
