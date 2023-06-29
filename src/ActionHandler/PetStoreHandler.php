<?php

namespace CommonGateway\PetStoreBundle\ActionHandler;

use CommonGateway\CoreBundle\ActionHandler\ActionHandlerInterface;
use CommonGateway\PetStoreBundle\Service\PetStoreService;

/**
 * An example handler for the per store.
 *
 * @author Conduction.nl <info@conduction.nl>
 *
 * @license EUPL-1.2 https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12
 */
class PetStoreHandler implements ActionHandlerInterface
{

    /**
     * The pet store service used by the handler
     *
     * @var PetStoreService
     */
    private PetStoreService $petStoreService;


    /**
     * The constructor
     *
     * @param PetStoreService $petStoreService The pet store service
     */
    public function __construct(PetStoreService $petStoreService)
    {
        $this->petStoreService = $petStoreService;

    }//end __construct()


    /**
     * Returns the required configuration as a https://json-schema.org array.
     *
     * @return array The configuration that this  action should comply to
     */
    public function getConfiguration(): array
    {
        return [
            '$id'         => 'https://example.com/ActionHandler/PetStoreHandler.ActionHandler.json',
            '$schema'     => 'https://docs.commongateway.nl/schemas/ActionHandler.schema.json',
            'title'       => 'PetStore ActionHandler',
            'description' => 'This handler returns a welcoming string',
            'required'    => [],
            'properties'  => [],
        ];

    }//end getConfiguration()


    /**
     * This function runs the service.
     *
     * @param array $data          The data from the call
     * @param array $configuration The configuration of the action
     *
     * @return array
     *
     * @SuppressWarnings("unused") Handlers ara strict implementations
     */
    public function run(array $data, array $configuration): array
    {
        return $this->petStoreService->petStoreHandler($data, $configuration);

    }//end run()


}//end class
