<?php

// src/Service/PetStoreService.php

namespace CommonGateway\PetStoreBundle\Service;

class PetStoreService
{

    /*
     * Returns a welcoming string
     * 
     * @return string 
     */
    public function test(array $data, array $configuration): string
    {
        return 'Hello. Your PetStoreBundle works';
    }
}
