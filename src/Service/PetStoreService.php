<?php

namespace CommonGateway\PetStoreBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * An example service for adding business logic to your class.
 *
 * @author Conduction.nl <info@conduction.nl>
 *
 * @license EUPL-1.2 https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12
 *
 * @category Service
 */
class PetStoreService
{

    /**
     * The configuration array.
     *
     * @var array
     */
    private array $configuration;

    /**
     * The data array.
     *
     * @var array
     */
    private array $data;

    /**
     * The Entity Manager.
     *
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    /**
     * The plugin logger.
     *
     * @var LoggerInterface
     */
    private LoggerInterface $logger;


    /**
     * @param EntityManagerInterface $entityManager The Entity Manager.
     * @param LoggerInterface        $pluginLogger  The plugin version of the logger interface.
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        LoggerInterface $pluginLogger
    ) {
        $this->entityManager = $entityManager;
        $this->logger        = $pluginLogger;
        $this->configuration = [];
        $this->data          = [];

    }//end __construct()


    /**
     * An example handler that is triggered by an action.
     *
     * @param array $data          The data array
     * @param array $configuration The configuration array
     *
     * @return array A handler must ALWAYS return an array
     */
    public function petStoreHandler(array $data, array $configuration): array
    {
        $this->data          = $data;
        $this->configuration = $configuration;

        $this->logger->debug("PetStoreService -> petStoreHandler()", ['plugin' => 'common-gateway/pet-store-bundle']);

        $response         = ['Message' => 'Hello. Your PetStoreBundle works'];
        $data['response'] = new Response(json_encode($response), 200, ['Content-type' => 'application/json']);

        return $data;

    }//end petStoreHandler()


}//end class
