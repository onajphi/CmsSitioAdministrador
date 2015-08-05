<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenidos
 *
 * @ORM\Table(name="contenidos", indexes={@ORM\Index(name="fk_ContenidosUsuarioId_UsuariosUsuarioId", columns={"UsuarioId"}), @ORM\Index(name="fk_ContenidosTipoContenidoId_TipoContenidosTipoContenidoId", columns={"TipoContenidoId"}), @ORM\Index(name="fk_ContenidosArchivoId_ArchivosArchivoId", columns={"ArchivoId"})})
 * @ORM\Entity
 */
class Contenidos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ContenidoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contenidoid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=300, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Texto", type="text", nullable=false)
     */
    private $texto;

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
     * @var \Archivos
     *
     * @ORM\ManyToOne(targetEntity="Archivos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ArchivoId", referencedColumnName="ArchivoId")
     * })
     */
    private $archivoid;

    /**
     * @var \Tipocontenidos
     *
     * @ORM\ManyToOne(targetEntity="Tipocontenidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoContenidoId", referencedColumnName="TipoContenidoId")
     * })
     */
    private $tipocontenidoid;

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
