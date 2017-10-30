<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User;
use AppBundle\Entity\Applicant;
use AppBundle\Entity\ContactDetails;
use AppBundle\Entity\BankDetails;
use AppBundle\Entity\ThirdPartyMandate;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="applications")
 * @ORM\Entity
 */
class Application
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, name="shares_value_transfer_in")
     */
    private $sharesValueTransferIn;

    /**
     * @ORM\Column(type="string", length=255, name="cash_value_transfer_in")
     */
    private $cashValueTransferIn;

    /**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="Applicant", mappedBy="application")
     * @ORM\JoinColumn(name="applicant_id", referencedColumnName="id")
     */
    private $applicant;

    /**
     * @ORM\OneToOne(targetEntity="Applicant", mappedBy="application")
     * @ORM\JoinColumn(name="joint_applicant_id", referencedColumnName="id")
     */
    private $jointApplicant;

    /**
     * @ORM\OneToOne(targetEntity="ContactDetails", mappedBy="application")
     * @ORM\JoinColumn(name="contact_details_id", referencedColumnName="id")
     */
    private $contactDetails;

    /**
     * @ORM\OneToOne(targetEntity="BankDetails", mappedBy="application")
     * @ORM\JoinColumn(name="bank_details_id", referencedColumnName="id")
     */
    private $bankDetails;

    /**
     * @ORM\OneToOne(targetEntity="ThirdPartyMandate", mappedBy="application")
     * @ORM\JoinColumn(name="third_party_id", referencedColumnName="id")
     */
    private $thirdPartyMandate;

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
     * Set description
     *
     * @param string $description
     *
     * @return Application
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set sharesValueTransferIn
     *
     * @param string $sharesValueTransferIn
     *
     * @return Application
     */
    public function setSharesValueTransferIn($sharesValueTransferIn)
    {
        $this->sharesValueTransferIn = $sharesValueTransferIn;

        return $this;
    }

    /**
     * Get sharesValueTransferIn
     *
     * @return string
     */
    public function getSharesValueTransferIn()
    {
        return $this->sharesValueTransferIn;
    }

    /**
     * Set cashValueTransferIn
     *
     * @param string $cashValueTransferIn
     *
     * @return Application
     */
    public function setCashValueTransferIn($cashValueTransferIn)
    {
        $this->cashValueTransferIn = $cashValueTransferIn;

        return $this;
    }

    /**
     * Get cashValueTransferIn
     *
     * @return string
     */
    public function getCashValueTransferIn()
    {
        return $this->cashValueTransferIn;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Application
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set applicant
     *
     * @param \AppBundle\Entity\Applicant $applicant
     *
     * @return Application
     */
    public function setApplicant(\AppBundle\Entity\Applicant $applicant = null)
    {
        $this->applicant = $applicant;

        return $this;
    }

    /**
     * Get applicant
     *
     * @return \AppBundle\Entity\Applicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * Set jointApplicant
     *
     * @param \AppBundle\Entity\Applicant $jointApplicant
     *
     * @return Application
     */
    public function setJointApplicant(\AppBundle\Entity\Applicant $jointApplicant = null)
    {
        $this->jointApplicant = $jointApplicant;

        return $this;
    }

    /**
     * Get jointApplicant
     *
     * @return \AppBundle\Entity\Applicant
     */
    public function getJointApplicant()
    {
        return $this->jointApplicant;
    }

    /**
     * Set contactDetails
     *
     * @param \AppBundle\Entity\ContactDetails $contactDetails
     *
     * @return Application
     */
    public function setContactDetails(\AppBundle\Entity\ContactDetails $contactDetails = null)
    {
        $this->contactDetails = $contactDetails;

        return $this;
    }

    /**
     * Get contactDetails
     *
     * @return \AppBundle\Entity\ContactDetails
     */
    public function getContactDetails()
    {
        return $this->contactDetails;
    }

    /**
     * Set bankDetails
     *
     * @param \AppBundle\Entity\BankDetails $bankDetails
     *
     * @return Application
     */
    public function setBankDetails(\AppBundle\Entity\BankDetails $bankDetails = null)
    {
        $this->bankDetails = $bankDetails;

        return $this;
    }

    /**
     * Get bankDetails
     *
     * @return \AppBundle\Entity\BankDetails
     */
    public function getBankDetails()
    {
        return $this->bankDetails;
    }

    /**
     * Set thirdPartyMandate
     *
     * @param \AppBundle\Entity\ThirdPartyMandate $thirdPartyMandate
     *
     * @return Application
     */
    public function setThirdPartyMandate(\AppBundle\Entity\ThirdPartyMandate $thirdPartyMandate = null)
    {
        $this->thirdPartyMandate = $thirdPartyMandate;

        return $this;
    }

    /**
     * Get thirdPartyMandate
     *
     * @return \AppBundle\Entity\ThirdPartyMandate
     */
    public function getThirdPartyMandate()
    {
        return $this->thirdPartyMandate;
    }
}
