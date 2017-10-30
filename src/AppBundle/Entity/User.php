<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User implements AdvancedUserInterface, \Serializable
{
    use \Fbeen\UserBundle\Model\UserTrait;
}
