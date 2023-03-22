<?php
/**
 * The pet store bundle aims at providing an example symfony bundle for use with the common gateway
 *
 * @author  Conduction.nl
 * @license EUPL-1.2
 */

namespace CommonGateway\PetStoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

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
