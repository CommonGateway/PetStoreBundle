<?php

namespace CommonGateway\PetStoreBundle\ActionHandler;

use CommonGateway\PetStoreBundle\Service\PetStoreService;

/**
 * An example handler for the per store.
 */
class PetStoreHandler
{

    /**
     * @var PetStoreService
     */
    private PetStoreService $petStoreService;


    /**
     * @param PetStoreService $petStoreService
     */
    public function __construct(PetStoreService $petStoreService)
    {
        $this->petStoreService = $petStoreService;

    }//end __construct()


    /**
     *  This function returns the requered configuration as a [json-schema](https://json-schema.org/) array.
     *
     * @return array a [json-schema](https://json-schema.org/) that this  action should comply to
     */
    public function getConfiguration(): array
    {
        return [
            '$id'         => 'https://example.com/person.schema.json',
            '$schema'     => 'https://json-schema.org/draft/2020-12/schema',
            'title'       => 'PetStore Action',
            'description' => 'This handler returns a welcoming string',
            'required'    => [],
            'properties'  => [],
        ];

    }//end getConfiguration()


    /**
     * This function runs the service.
     *
     * @SuppressWarnings Handlers ara strict implementations and therefore dont require code cleanup
     *
     * @param array $data          The data from the call
     * @param array $configuration The configuration of the action
     *
     * @throws GatewayException
     * @throws CacheException
     * @throws InvalidArgumentException
     * @throws ComponentException
     *
     * @return array
     */
    public function run(array $data, array $configuration): array
    {
        return $this->petStoreService->petStoreHandler();

    }//end run()


}//end class
