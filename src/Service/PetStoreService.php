<?php

namespace CommonGateway\PetStoreBundle\Service;

/**
 * And axample service for adding bussnes logic to your class.
 */
class PetStoreService
{


    /**
     * An example handler that is triggerd by an action.
     *
     * @param array $data          A handler wil alway recieve the current data at that time
     * @param array $configuration A handler can recieve optional configuration from an action or cronjobg
     *
     * @return array A handler mus ALWAYS return an array
     */
    public function petStoreHandler(array $data, array $configuration): array
    {
        return ['response' => 'Hello. Your PetStoreBundle works'];

    }//end petStoreHandler()


}//end class
