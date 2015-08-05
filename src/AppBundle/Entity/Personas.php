<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personas
 *
 * @ORM\Table(name="personas", uniqueConstraints={@ORM\UniqueConstraint(name="Rut_UNIQUE", columns={"Rut"})}, indexes={@ORM\Index(name="fk_PersonasPersonasId_EstadoCivilesEstadoCivilId", columns={"EstadoCivilId"})})
 * @ORM\Entity
 */
class Personas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PersonaId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $personaid;

    /**
     * @var string
     *
     * @ORM\Column(name="Paterno", type="string", length=30, nullable=false)
     */
    private $paterno;

    /**
     * @var string
     *
     * @ORM\Column(name="Materno", type="string", length=30, nullable=true)
     */
    private $materno;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Rut", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="Dv", type="string", length=1, nullable=true)
     */
    private $dv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Nacimiento", type="date", nullable=true)
     */
    private $nacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Eliminado", type="boolean", nullable=true)
     */
    private $eliminado = '0';

    /**
     * @var \Estadociviles
     *
     * @ORM\ManyToOne(targetEntity="Estadociviles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EstadoCivilId", referencedColumnName="EstadoCivilId")
     * })
     */
    private $estadocivilid;


}
