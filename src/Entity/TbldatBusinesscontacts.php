<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbldatBusinesscontacts
 *
 * @ORM\Table(name="tbldat_BusinessContacts")
 * @ORM\Entity
 */
class TbldatBusinesscontacts
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="guid", nullable=false, options={"default"="newid()"})
     */
    private $id = 'newid()';

    /**
     * @var int
     *
     * @ORM\Column(name="PRI", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pri;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Company_Key", type="bigint", nullable=true)
     */
    private $companyKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Title", type="string", length=50, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FName", type="string", length=50, nullable=true)
     */
    private $fname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MName", type="string", length=50, nullable=true)
     */
    private $mname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LName", type="string", length=50, nullable=true)
     */
    private $lname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Suffix", type="string", length=50, nullable=true)
     */
    private $suffix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Address_1", type="string", length=255, nullable=true)
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Address_2", type="string", length=255, nullable=true)
     */
    private $address2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="City", type="string", length=50, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="State", type="string", length=5, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PostalCode", type="string", length=24, nullable=true)
     */
    private $postalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email_Primary", type="string", length=255, nullable=true)
     */
    private $emailPrimary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email_2", type="string", length=255, nullable=true)
     */
    private $email2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMail_3", type="string", length=255, nullable=true)
     */
    private $email3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email_4", type="string", length=255, nullable=true)
     */
    private $email4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone_Primary", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $phonePrimary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone_Mobile", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $phoneMobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone_Land", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $phoneLand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone_Fax", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $phoneFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TwitterHandle", type="string", length=255, nullable=true)
     */
    private $twitterhandle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FaceBookName", type="string", length=255, nullable=true)
     */
    private $facebookname;

    /**
     * @var bool
     *
     * @ORM\Column(name="Active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="Deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Archived", type="boolean", nullable=false)
     */
    private $archived = '0';


}
