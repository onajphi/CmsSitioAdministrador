<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacioncontenidogaleria
 *
 * @ORM\Table(name="relacioncontenidogaleria", indexes={@ORM\Index(name="fk_RelacionContenidoGaleriaContenidoId_ContenidosContenidoId", columns={"ContenidoId"}), @ORM\Index(name="fk_RelacionContenidoGaleriaGaleriaId_GaleriasGaleriaId", columns={"GaleriaId"})})
 * @ORM\Entity
 */
class Relacioncontenidogaleria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ContenidoGaleriaId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contenidogaleriaid;

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
     * @var \Contenidos
     *
     * @ORM\ManyToOne(targetEntity="Contenidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ContenidoId", referencedColumnName="ContenidoId")
     * })
     */
    private $contenidoid;

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
