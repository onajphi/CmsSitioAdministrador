<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentarios
 *
 * @ORM\Table(name="comentarios", indexes={@ORM\Index(name="fk_ComentariosUsuarioId_UsuariosUsuarioId", columns={"UsuarioId"})})
 * @ORM\Entity
 */
class Comentarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ComentarioId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comentarioid;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="string", length=500, nullable=false)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Ip", type="string", length=20, nullable=true)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="Aprobado", type="integer", nullable=true)
     */
    private $aprobado = '0';

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
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UsuarioId", referencedColumnName="UsuarioId")
     * })
     */
    private $usuarioid;


}
