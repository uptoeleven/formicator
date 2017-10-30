<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="applications")
 * @ORM\Entity
 */

class Application
{
    private $id;
    private $description;
    private $sharesValueTransferIn;
    private $cashValueTransferIn;
    private $user;
    private $applicant;
    private $jointApplicant;
    private $contactDetails;
    private $bankDetails;
    private $thirdPartyMandate;
}
