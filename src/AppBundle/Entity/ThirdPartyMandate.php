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
     * @ORM\Column(type="string", length=255, name="name_of_third_party")
     */
    private $nameOfThirdParty;

    /**
     * @ORM\Column(type="text", name="relationship_to_you")
     */
    private $relationshipToYou;

    /**
     * @ORM\Column(type="text", name="third_party_address")
     */
    private $thirdPartyAddress;

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
     * Set nameOfThirdParty
     *
     * @param string $nameOfThirdParty
     *
     * @return ThirdPartyMandate
     */
    public function setNameOfThirdParty($nameOfThirdParty)
    {
        $this->nameOfThirdParty = $nameOfThirdParty;

        return $this;
    }

    /**
     * Get nameOfThirdParty
     *
     * @return string
     */
    public function getNameOfThirdParty()
    {
        return $this->nameOfThirdParty;
    }

    /**
     * Set relationshipToYou
     *
     * @param string $relationshipToYou
     *
     * @return ThirdPartyMandate
     */
    public function setRelationshipToYou($relationshipToYou)
    {
        $this->relationshipToYou = $relationshipToYou;

        return $this;
    }

    /**
     * Get relationshipToYou
     *
     * @return string
     */
    public function getRelationshipToYou()
    {
        return $this->relationshipToYou;
    }

    /**
     * Set thirdPartyAddress
     *
     * @param string $thirdPartyAddress
     *
     * @return ThirdPartyMandate
     */
    public function setThirdPartyAddress($thirdPartyAddress)
    {
        $this->thirdPartyAddress = $thirdPartyAddress;

        return $this;
    }

    /**
     * Get thirdPartyAddress
     *
     * @return string
     */
    public function getThirdPartyAddress()
    {
        return $this->thirdPartyAddress;
    }

    /**
     * Set application
     *
     * @param \AppBundle\Entity\Application $application
     *
     * @return ThirdPartyMandate
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
