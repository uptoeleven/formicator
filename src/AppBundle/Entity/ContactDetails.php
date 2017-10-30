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
     * @ORM\Column(type="text")
     */
    private $postalAddress;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $postcode;

    /**
     * @ORM\Column(type="string", length=32, name="home_phone")
     */
    private $homePhnone;

    /**
     * @ORM\Column(type="string", length=32, name="business_phone")
     */
    private $businessPhone;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

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
     * Set postalAddress
     *
     * @param string $postalAddress
     *
     * @return ContactDetails
     */
    public function setPostalAddress($postalAddress)
    {
        $this->postalAddress = $postalAddress;

        return $this;
    }

    /**
     * Get postalAddress
     *
     * @return string
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return ContactDetails
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set homePhnone
     *
     * @param string $homePhnone
     *
     * @return ContactDetails
     */
    public function setHomePhnone($homePhnone)
    {
        $this->homePhnone = $homePhnone;

        return $this;
    }

    /**
     * Get homePhnone
     *
     * @return string
     */
    public function getHomePhnone()
    {
        return $this->homePhnone;
    }

    /**
     * Set businessPhone
     *
     * @param string $businessPhone
     *
     * @return ContactDetails
     */
    public function setBusinessPhone($businessPhone)
    {
        $this->businessPhone = $businessPhone;

        return $this;
    }

    /**
     * Get businessPhone
     *
     * @return string
     */
    public function getBusinessPhone()
    {
        return $this->businessPhone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return ContactDetails
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return ContactDetails
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set application
     *
     * @param \AppBundle\Entity\Application $application
     *
     * @return ContactDetails
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
