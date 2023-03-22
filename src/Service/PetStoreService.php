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
     * @return array A handler mus ALWAYS return an array
     */
    public function petStoreHandler(): array
    {
        return ['response' => 'Hello. Your PetStoreBundle works'];

    }//end petStoreHandler()


}//end class
