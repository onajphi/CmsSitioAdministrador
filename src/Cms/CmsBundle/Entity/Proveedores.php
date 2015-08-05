<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedores
 *
 * @ORM\Table(name="proveedores", indexes={@ORM\Index(name="fk_ProveedoresPersonaId_PersonasPersonaId", columns={"PersonaId"}), @ORM\Index(name="fk_ProveedoresDireccionId_DireccionesDireccionId", columns={"DireccionId"}), @ORM\Index(name="fk_ProveedoresContactoId_ContactosContactoId", columns={"ContactoId"})})
 * @ORM\Entity
 */
class Proveedores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ProveedorId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $proveedorid;

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
     * @var \Contactos
     *
     * @ORM\ManyToOne(targetEntity="Contactos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ContactoId", referencedColumnName="ContactoId")
     * })
     */
    private $contactoid;

    /**
     * @var \Direcciones
     *
     * @ORM\ManyToOne(targetEntity="Direcciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DireccionId", referencedColumnName="DireccionId")
     * })
     */
    private $direccionid;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PersonaId", referencedColumnName="PersonaId")
     * })
     */
    private $personaid;


}
