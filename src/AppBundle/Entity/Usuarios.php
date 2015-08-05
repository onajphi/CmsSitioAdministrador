<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="fk_UsuariosPersonaId_PersonasPersonaId", columns={"PersonaId"}), @ORM\Index(name="fk_UsuariosContactoId_ContactosContactoId", columns={"ContactoId"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="UsuarioId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuarioid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=45, nullable=false)
     */
    private $password;

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
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PersonaId", referencedColumnName="PersonaId")
     * })
     */
    private $personaid;


}
