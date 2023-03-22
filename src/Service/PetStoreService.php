<?php
/**
 * And axample service for adding bussnes logic to your class.
 *
 * @author  Conduction.nl <info@conduction.nl>
 * @license EUPL-1.2 https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12
 */

namespace CommonGateway\PetStoreBundle\Service;


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
