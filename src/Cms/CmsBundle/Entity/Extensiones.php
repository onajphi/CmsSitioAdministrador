<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extensiones
 *
 * @ORM\Table(name="extensiones", indexes={@ORM\Index(name="fk_ExtensionesTipoArchivoId_TipoArchivosTipoArchivoId", columns={"TipoArchivoId"})})
 * @ORM\Entity
 */
class Extensiones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ExtensionId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $extensionid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

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
