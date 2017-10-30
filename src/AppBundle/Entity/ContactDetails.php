<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="contact_details")
 * @ORM\Entity
 */

class ContactDetails
{
    private $id;
    private $application;
    private $postalAddress;
    private $postcode;
    private $homePhnone;
    private $bizPhone;
    private $mobile;
    private $email;
}
