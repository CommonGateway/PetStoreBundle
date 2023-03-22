<?php
/**
 * The installation service
 */

namespace CommonGateway\PetStoreBundle\Service;

use CommonGateway\CoreBundle\Installer\InstallerInterface;
use Doctrine\ORM\EntityManagerInterface;


class InstallationService implements InstallerInterface
{

    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;


    /**
     * The constructor
     *
     * @param EntityManagerInterface $entityManager The entity manager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

    }//end __construct()


    /**
     * @return void
     */
    public function install()
    {
        $this->checkDataConsistency();

    }//end install()


    /**
     * @return void
     */
    public function update()
    {
        $this->checkDataConsistency();

    }//end update()


    /**
     * @return void
     */
    public function uninstall()
    {
        // Do some cleanup
    }//end uninstall()


    /**
     * @return void
     */
    public function checkDataConsistency()
    {
        $this->entityManager->flush();

    }//end checkDataConsistency()


}//end class
