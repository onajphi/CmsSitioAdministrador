<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudades
 *
 * @ORM\Table(name="ciudades", indexes={@ORM\Index(name="fk_CiudadesRegionId_RegionesRegionId", columns={"RegionId"})})
 * @ORM\Entity
 */
class Ciudades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CiudadId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ciudadid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Capital", type="boolean", nullable=true)
     */
    private $capital;

    /**
     * @var \Regiones
     *
     * @ORM\ManyToOne(targetEntity="Regiones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RegionId", referencedColumnName="RegionId")
     * })
     */
    private $regionid;


}
