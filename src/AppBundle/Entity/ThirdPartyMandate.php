<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="third_party_mandate")
 * @ORM\Entity
 */


class ThirdPartyMandate
{
    private $id;
    private $application;
    private $nameOfThirdParty;
    private $relationshipToYou;
    private $thirdPartyAddress;
}