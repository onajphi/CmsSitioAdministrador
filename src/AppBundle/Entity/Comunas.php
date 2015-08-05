<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunas
 *
 * @ORM\Table(name="comunas", indexes={@ORM\Index(name="fk_ComunasCiudadId_CiudadesCiudadId", columns={"CiudadId"})})
 * @ORM\Entity
 */
class Comunas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ComunaId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comunaid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CiudadId", referencedColumnName="CiudadId")
     * })
     */
    private $ciudadid;


}
