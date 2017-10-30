<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="applicants")
 * @ORM\Entity
 */
class Applicant
{
    private $id;
    private $application;
    private $fullName;
    private $title;
    private $forenames;
    private $surnames;
    private $dob;
    private $maritalStatus;
    private $nationality;
    private $ni;
    private $countryTaxResidence;
    private $jointApplicant;
    private $contactAtDanielStewart;
    private $mainWealthSource;
    private $contactDetails;
}
