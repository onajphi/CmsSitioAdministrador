<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relaciongaleriaarchivo
 *
 * @ORM\Table(name="relaciongaleriaarchivo", indexes={@ORM\Index(name="fk_RelacionGaleriaArchivo_GaleriasGaleriaId", columns={"GaleriaId"}), @ORM\Index(name="fk_RelacionGaleriaArchivo_ArchivosArchivoId", columns={"ArchivoId"})})
 * @ORM\Entity
 */
class Relaciongaleriaarchivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="GaleriaArchivoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $galeriaarchivoid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Vigente", type="boolean", nullable=false)
     */
    private $vigente = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Eliminado", type="boolean", nullable=false)
     */
    private $eliminado = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
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
     * @var \Galerias
     *
     * @ORM\ManyToOne(targetEntity="Galerias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GaleriaId", referencedColumnName="GaleriaId")
     * })
     */
    private $galeriaid;


}
