<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacionrolprivilegio
 *
 * @ORM\Table(name="relacionrolprivilegio", indexes={@ORM\Index(name="fk_RelacionRolPrivilegio_RolesRolId", columns={"RolId"}), @ORM\Index(name="fk_RelacionRolPrivilegio_PrivilegiosPrivilegioId", columns={"PrivilegioId"})})
 * @ORM\Entity
 */
class Relacionrolprivilegio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="RolPrivilegioId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rolprivilegioid;

    /**
     * @var string
     *
     * @ORM\Column(name="Vigente", type="string", length=45, nullable=true)
     */
    private $vigente = 'true';

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
     * @var \Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RolId", referencedColumnName="RolId")
     * })
     */
    private $rolid;


}
