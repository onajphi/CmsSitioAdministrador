<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacionusuariorol
 *
 * @ORM\Table(name="relacionusuariorol", indexes={@ORM\Index(name="fk_RelacionUsuarioRolUsuarioId_UsuariosUsuarioId", columns={"UsuarioId"}), @ORM\Index(name="fk_RelacionUsuarioRolRolId_RolesRolId", columns={"RolId"})})
 * @ORM\Entity
 */
class Relacionusuariorol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="UsuarioRolId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuariorolid;

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
     * @var \Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RolId", referencedColumnName="RolId")
     * })
     */
    private $rolid;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UsuarioId", referencedColumnName="UsuarioId")
     * })
     */
    private $usuarioid;


}
