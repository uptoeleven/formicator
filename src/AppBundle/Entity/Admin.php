<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="admins")
 * @ORM\Entity
 */

class Admin implements AdvancedUserInterface, \Serializable
{
    use \Fbeen\UserBundle\Model\UserTrait;
}
