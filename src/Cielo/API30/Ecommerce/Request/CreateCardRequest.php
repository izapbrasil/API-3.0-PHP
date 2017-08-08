<?php

namespace Cielo\API30\Ecommerce\Request;

use Cielo\API30\Ecommerce\CreditCard;
use Cielo\API30\Environment;
use Cielo\API30\Merchant;

/**
 * CreateCardRequest
 *
 * @author  Valdeci Jr <valdeci.junior@izap.com.br>
 * @version 1.0
 */
class CreateCardRequest extends AbstractSaleRequest
{

    private $environment;

    public function __construct(Merchant $merchant, Environment $environment)
    {
        parent::__construct($merchant);

        $this->environment = $environment;
    }

    public function execute($card)
    {
        $url = $this->environment->getApiUrl() . '1/card/';

        return $this->sendRequest('POST', $url, $card);
    }

    protected function unserialize($json)
    {
        return CreditCard::fromJson($json);
    }
}
