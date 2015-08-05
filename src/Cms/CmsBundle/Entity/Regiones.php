<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regiones
 *
 * @ORM\Table(name="regiones", indexes={@ORM\Index(name="fk_RegionesPaisId_PaisesPaisId", columns={"PaisId"})})
 * @ORM\Entity
 */
class Regiones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="RegionId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regionid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=10, nullable=true)
     */
    private $numero;

    /**
     * @var \Paises
     *
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PaisId", referencedColumnName="PaisId")
     * })
     */
    private $paisid;


}
