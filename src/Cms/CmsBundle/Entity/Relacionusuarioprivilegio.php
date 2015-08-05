<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacionusuarioprivilegio
 *
 * @ORM\Table(name="relacionusuarioprivilegio", indexes={@ORM\Index(name="fk_RelacionUsuarioPrivilegioUsuarioId_UsuariosUsuarioId", columns={"UsuarioId"}), @ORM\Index(name="fk_RelacionUsuarioPrivilegioPrivilegioId_PrivilegiosPrivilegioId", columns={"PrivilegioId"})})
 * @ORM\Entity
 */
class Relacionusuarioprivilegio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="UsuarioPrivilegioId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuarioprivilegioid;

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
     * @var \Privilegios
     *
     * @ORM\ManyToOne(targetEntity="Privilegios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PrivilegioId", referencedColumnName="PrivilegioId")
     * })
     */
    private $privilegioid;

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
