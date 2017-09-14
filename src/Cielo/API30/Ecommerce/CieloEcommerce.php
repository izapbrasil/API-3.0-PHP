<?php
namespace Cielo\API30\Ecommerce;

use Cielo\API30\Ecommerce\Request\CieloRequestException;
use Cielo\API30\Ecommerce\Request\CreateCardRequest;
use Cielo\API30\Merchant;
use Cielo\API30\Ecommerce\Request\CreateSaleRequest;
use Cielo\API30\Ecommerce\Request\QuerySaleRequest;
use Cielo\API30\Ecommerce\Request\UpdateSaleRequest;
use Cielo\API30\Ecommerce\Request\QueryRecurrentPaymentRequest;
use Psr\Log\LoggerInterface;

/**
 * The Cielo Ecommerce SDK front-end;
 */
class CieloEcommerce
{

    private $merchant;

    private $environment;

    /** @var LoggerInterface */
    private $logger;

    /**
     * Create an instance of CieloEcommerce choosing the environment where the
     * requests will be send
     *
     * @param Merchant $merchant
     *            The merchant credentials
     * @param Environment environment
     *            The environment: {@link Environment::production()} or
     *            {@link Environment::sandbox()}
     * @param Psr\Log\LoggerInterface $logger
     *            The logger
     */
    public function __construct(Merchant $merchant, Environment $environment = null, LoggerInterface $logger = null)
    {
        if ($environment == null) {
            $environment = Environment::production();
        }

        $this->merchant = $merchant;
        $this->environment = $environment;
        $this->logger = $logger;
    }

    /**
     * Creates a card token.
     *
     * @param \Cielo\API30\Ecommerce\CreditCard $card The credit card data
     *
     * @return \Cielo\API30\Ecommerce\CreditCard The credit card object with token.
     * @throws CieloRequestException if anything gets wrong.
     * @see <a href="https://developercielo.github.io/Webservice-3.0/english.html#error-codes">Error Codes</a>
     */
    public function createCard(CreditCard $card)
    {
        $createCardRequest = new CreateCardRequest($this->merchant, $this->environment);
        $createCardRequest->setLogger($this->logger);

        return $createCardRequest->execute($card);
    }

    /**
     * Send the Sale to be created and return the Sale with tid and the status
     * returned by Cielo.
     *
     * @param Sale $sale
     *            The preconfigured Sale
     *
     * @return Sale The Sale with authorization, tid, etc. returned by Cielo.
     *
     * @throws \Cielo\API30\Ecommerce\Request\CieloRequestException if anything gets wrong.
     *
     * @see <a href=
     *      "https://developercielo.github.io/Webservice-3.0/english.html#error-codes">Error
     *      Codes</a>
     */
    public function createSale(Sale $sale)
    {
        $createSaleRequest = new CreateSaleRequest($this->merchant, $this->environment);
        $createSaleRequest->setLogger($this->logger);

        return $createSaleRequest->execute($sale);
    }

    /**
     * Query a Sale on Cielo by paymentId
     *
     * @param string $paymentId
     *            The paymentId to be queried
     * @return \Cielo\API30\Ecommerce\Sale The Sale with authorization, tid, etc. returned by Cielo.
     * @throws CieloRequestException if anything gets wrong.
     * @see <a href=
     *      "https://developercielo.github.io/Webservice-3.0/english.html#error-codes">Error
     *      Codes</a>
     */
    public function getSale($paymentId)
    {
        $querySaleRequest = new QuerySaleRequest($this->merchant, $this->environment);
        $querySaleRequest->setLogger($this->logger);

        return $querySaleRequest->execute($paymentId);
    }

    /**
     * Query a RecurrentPayment on Cielo by RecurrentPaymentId
     *
     * @param string $recurrentPaymentId
     *            The RecurrentPaymentId to be queried
     *
     * @return \Cielo\API30\Ecommerce\RecurrentPayment
     *            The RecurrentPayment with authorization, tid, etc. returned by Cielo.
     *
     * @throws \Cielo\API30\Ecommerce\Request\CieloRequestException if anything gets wrong.
     *
     * @see <a href=
     *      "https://developercielo.github.io/Webservice-3.0/english.html#error-codes">Error
     *      Codes</a>
     */
    public function getRecurrentPayment($recurrentPaymentId)
    {
        $queryRecurrentPaymentRequest = new queryRecurrentPaymentRequest($this->merchant, $this->environment);
        $queryRecurrentPaymentRequest->setLogger($this->logger);

        return $queryRecurrentPaymentRequest->execute($recurrentPaymentId);
    }

    /**
     * Cancel a Sale on Cielo by paymentId and speficying the amount
     *
     * @param string $paymentId
     *            The paymentId to be queried
     * @param integer $amount
     *            Order value in cents
     *
     * @return Sale The Sale with authorization, tid, etc. returned by Cielo.
     *
     * @throws \Cielo\API30\Ecommerce\Request\CieloRequestException if anything gets wrong.
     *
     * @see <a href=
     *      "https://developercielo.github.io/Webservice-3.0/english.html#error-codes">Error
     *      Codes</a>
     */
    public function cancelSale($paymentId, $amount = null)
    {
        $updateSaleRequest = new UpdateSaleRequest('void', $this->merchant, $this->environment);
        $updateSaleRequest->setLogger($this->logger);

        $updateSaleRequest->setAmount($amount);

        return $updateSaleRequest->execute($paymentId);
    }

    /**
     * Capture a Sale on Cielo by paymentId and specifying the amount and the
     * serviceTaxAmount
     *
     * @param string $paymentId
     *            The paymentId to be captured
     * @param integer $amount
     *            Amount of the authorization to be captured
     * @param integer $serviceTaxAmount
     *            Amount of the authorization should be destined for the service
     *            charge
     *
     * @return \Cielo\API30\Ecommerce\Payment The captured Payment.
     *
     *
     * @throws \Cielo\API30\Ecommerce\Request\CieloRequestException if anything gets wrong.
     *
     * @see <a href=
     *      "https://developercielo.github.io/Webservice-3.0/english.html#error-codes">Error
     *      Codes</a>
     */
    public function captureSale($paymentId, $amount = null, $serviceTaxAmount = null)
    {
        $updateSaleRequest = new UpdateSaleRequest('capture', $this->merchant, $this->environment);
        $updateSaleRequest->setLogger($this->logger);

        $updateSaleRequest->setAmount($amount);
        $updateSaleRequest->setServiceTaxAmount($serviceTaxAmount);

        return $updateSaleRequest->execute($paymentId);
    }

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }
}
