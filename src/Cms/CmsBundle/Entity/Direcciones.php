<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direcciones
 *
 * @ORM\Table(name="direcciones", indexes={@ORM\Index(name="fk_DireccionesComunaId_ComunasComunaId", columns={"ComunaId"})})
 * @ORM\Entity
 */
class Direcciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="DireccionId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $direccionid;

    /**
     * @var string
     *
     * @ORM\Column(name="Calle", type="string", length=45, nullable=false)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="Poblacion", type="string", length=60, nullable=true)
     */
    private $poblacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Block", type="string", length=45, nullable=true)
     */
    private $block;

    /**
     * @var string
     *
     * @ORM\Column(name="Depto", type="string", length=45, nullable=true)
     */
    private $depto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Vigente", type="boolean", nullable=true)
     */
    private $vigente = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Eliminado", type="boolean", nullable=true)
     */
    private $eliminado = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=true)
     */
    private $fecha = 'CURRENT_TIMESTAMP';

    /**
     * @var \Comunas
     *
     * @ORM\ManyToOne(targetEntity="Comunas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ComunaId", referencedColumnName="ComunaId")
     * })
     */
    private $comunaid;


}
