<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Application;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="applicants")
 * @ORM\Entity
 */
class Applicant
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPrincipleApplicant;

    /**
     * @ORM\OneToOne(targetEntity="Application", inversedBy="applicant")
     * @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     */
    private $application;

    /**
     * @ORM\Column(type="string", length=255, name="full_name")
     */
    private $fullName;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forenames;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $surnames;

    /**
     * @ORM\Column(type="datetime", name="date_of_birth")
     */
    private $dob;

    /**
     * @ORM\Column(type="string", length=32, name="marital_status")
     */
    private $maritalStatus;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $nationality;

    /**
     * @ORM\Column(type="string", length=32, name="national_insurance_or_tax_id")
     */
    private $ni;

    /**
     * @ORM\Column(type="string", length=32, name="country_tax_residence")
     */
    private $countryTaxResidence;

    /**
     * @ORM\OneToOne(targetEntity="Application", inversedBy="jointApplicant")
     */
    private $jointApplicant;

    /**
     * @ORM\Column(type="text")
     */
    private $contactAtDanielStewart;

    /**
     * @ORM\Column(type="text")
     */
    private $mainWealthSource;

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
     * Set isPrincipleApplicant
     *
     * @param boolean $isPrincipleApplicant
     *
     * @return Applicant
     */
    public function setIsPrincipleApplicant($isPrincipleApplicant)
    {
        $this->isPrincipleApplicant = $isPrincipleApplicant;

        return $this;
    }

    /**
     * Get isPrincipleApplicant
     *
     * @return boolean
     */
    public function getIsPrincipleApplicant()
    {
        return $this->isPrincipleApplicant;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return Applicant
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Applicant
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set forenames
     *
     * @param string $forenames
     *
     * @return Applicant
     */
    public function setForenames($forenames)
    {
        $this->forenames = $forenames;

        return $this;
    }

    /**
     * Get forenames
     *
     * @return string
     */
    public function getForenames()
    {
        return $this->forenames;
    }

    /**
     * Set surnames
     *
     * @param string $surnames
     *
     * @return Applicant
     */
    public function setSurnames($surnames)
    {
        $this->surnames = $surnames;

        return $this;
    }

    /**
     * Get surnames
     *
     * @return string
     */
    public function getSurnames()
    {
        return $this->surnames;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     *
     * @return Applicant
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set maritalStatus
     *
     * @param string $maritalStatus
     *
     * @return Applicant
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return string
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return Applicant
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set ni
     *
     * @param string $ni
     *
     * @return Applicant
     */
    public function setNi($ni)
    {
        $this->ni = $ni;

        return $this;
    }

    /**
     * Get ni
     *
     * @return string
     */
    public function getNi()
    {
        return $this->ni;
    }

    /**
     * Set countryTaxResidence
     *
     * @param string $countryTaxResidence
     *
     * @return Applicant
     */
    public function setCountryTaxResidence($countryTaxResidence)
    {
        $this->countryTaxResidence = $countryTaxResidence;

        return $this;
    }

    /**
     * Get countryTaxResidence
     *
     * @return string
     */
    public function getCountryTaxResidence()
    {
        return $this->countryTaxResidence;
    }

    /**
     * Set contactAtDanielStewart
     *
     * @param string $contactAtDanielStewart
     *
     * @return Applicant
     */
    public function setContactAtDanielStewart($contactAtDanielStewart)
    {
        $this->contactAtDanielStewart = $contactAtDanielStewart;

        return $this;
    }

    /**
     * Get contactAtDanielStewart
     *
     * @return string
     */
    public function getContactAtDanielStewart()
    {
        return $this->contactAtDanielStewart;
    }

    /**
     * Set mainWealthSource
     *
     * @param string $mainWealthSource
     *
     * @return Applicant
     */
    public function setMainWealthSource($mainWealthSource)
    {
        $this->mainWealthSource = $mainWealthSource;

        return $this;
    }

    /**
     * Get mainWealthSource
     *
     * @return string
     */
    public function getMainWealthSource()
    {
        return $this->mainWealthSource;
    }

    /**
     * Set application
     *
     * @param \AppBundle\Entity\Application $application
     *
     * @return Applicant
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

    /**
     * Set jointApplicant
     *
     * @param \AppBundle\Entity\Application $jointApplicant
     *
     * @return Applicant
     */
    public function setJointApplicant(\AppBundle\Entity\Application $jointApplicant = null)
    {
        $this->jointApplicant = $jointApplicant;

        return $this;
    }

    /**
     * Get jointApplicant
     *
     * @return \AppBundle\Entity\Application
     */
    public function getJointApplicant()
    {
        return $this->jointApplicant;
    }
}
