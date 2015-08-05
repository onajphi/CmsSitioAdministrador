<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archivos
 *
 * @ORM\Table(name="archivos", indexes={@ORM\Index(name="fk_ArchivosTipoArchivoId_TipoArchivosTipoArchivoId", columns={"TipoArchivoId"})})
 * @ORM\Entity
 */
class Archivos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ArchivoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $archivoid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Url", type="string", length=250, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=150, nullable=true)
     */
    private $descripcion;

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
     * @var \Tipoarchivos
     *
     * @ORM\ManyToOne(targetEntity="Tipoarchivos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoArchivoId", referencedColumnName="TipoArchivoId")
     * })
     */
    private $tipoarchivoid;


}
