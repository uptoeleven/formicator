<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="bank_details")
 * @ORM\Entity
 */

class BankDetails
{
    private $id;
    private $application;
    private $accountName;
    private $accountNumber;
    private $sortcode;
    private $nameOfBank;
    private $bankAddress;
    private $iban;
    private $swift;
}