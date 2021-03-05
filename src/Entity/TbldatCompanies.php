<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbldatCompanies
 *
 * @ORM\Table(name="tbldat_Companies")
 * @ORM\Entity
 */
class TbldatCompanies
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
     * @var string|null
     *
     * @ORM\Column(name="CompanyName", type="string", length=255, nullable=true)
     */
    private $companyname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ticker", type="string", length=50, nullable=true)
     */
    private $ticker;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NickName", type="string", length=255, nullable=true)
     */
    private $nickname;

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
     * @ORM\Column(name="City", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="PostalCode", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $postalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="HomeCountry", type="string", length=255, nullable=true)
     */
    private $homecountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MainCountryOfOrigin", type="string", length=255, nullable=true)
     */
    private $maincountryoforigin;

    /**
     * @var bool
     *
     * @ORM\Column(name="Active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var bool
     *
     * @ORM\Column(name="Deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var bool
     *
     * @ORM\Column(name="Archived", type="boolean", nullable=false)
     */
    private $archived;


}
