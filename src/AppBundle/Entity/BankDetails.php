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
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Application", inversedBy="applicant")
     * @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     */
    private $application;

    /**
     * @ORM\Column(type="string", length=255, name="account_name")
     */
    private $accountName;

    /**
     * @ORM\Column(type="string", length=32, name="account_number")
     */
    private $accountNumber;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $sortcode;

    /**
     * @ORM\Column(type="string", length=255, name="name_of_bank")
     */
    private $nameOfBank;

    /**
     * @ORM\Column(type="text")
     */
    private $bankAddress;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $iban;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $swift;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set accountName
     *
     * @param string $accountName
     *
     * @return BankDetails
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Get accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set accountNumber
     *
     * @param string $accountNumber
     *
     * @return BankDetails
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Set sortcode
     *
     * @param string $sortcode
     *
     * @return BankDetails
     */
    public function setSortcode($sortcode)
    {
        $this->sortcode = $sortcode;

        return $this;
    }

    /**
     * Get sortcode
     *
     * @return string
     */
    public function getSortcode()
    {
        return $this->sortcode;
    }

    /**
     * Set nameOfBank
     *
     * @param string $nameOfBank
     *
     * @return BankDetails
     */
    public function setNameOfBank($nameOfBank)
    {
        $this->nameOfBank = $nameOfBank;

        return $this;
    }

    /**
     * Get nameOfBank
     *
     * @return string
     */
    public function getNameOfBank()
    {
        return $this->nameOfBank;
    }

    /**
     * Set bankAddress
     *
     * @param string $bankAddress
     *
     * @return BankDetails
     */
    public function setBankAddress($bankAddress)
    {
        $this->bankAddress = $bankAddress;

        return $this;
    }

    /**
     * Get bankAddress
     *
     * @return string
     */
    public function getBankAddress()
    {
        return $this->bankAddress;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return BankDetails
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set swift
     *
     * @param string $swift
     *
     * @return BankDetails
     */
    public function setSwift($swift)
    {
        $this->swift = $swift;

        return $this;
    }

    /**
     * Get swift
     *
     * @return string
     */
    public function getSwift()
    {
        return $this->swift;
    }

    /**
     * Set application
     *
     * @param \AppBundle\Entity\Application $application
     *
     * @return BankDetails
     */
    public function setApplication(\AppBundle\Entity\Application $application = null)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return \AppBundle\Entity\Application
     */
    public function getApplication()
    {
        return $this->application;
    }
}
