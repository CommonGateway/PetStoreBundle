<?php

namespace CommonGateway\PetStoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Defining the core class.
 */
class PetStoreBundle extends Bundle
{


    /**
     * Returns the path the bundle is in
     *
     * @return string
     */
    public function getPath(): string
    {
        return \dirname(__DIR__);

    }//end getPath()


}//end class
