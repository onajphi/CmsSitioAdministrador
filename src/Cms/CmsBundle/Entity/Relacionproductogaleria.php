<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacionproductogaleria
 *
 * @ORM\Table(name="relacionproductogaleria", indexes={@ORM\Index(name="fk_RelacionProductoGaleria_ProductosProductoId", columns={"ProductoId"}), @ORM\Index(name="fk_RelacionProductoGaleria_GaleriasGaleriaId", columns={"GaleriaId"})})
 * @ORM\Entity
 */
class Relacionproductogaleria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ProductoGaleriaId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productogaleriaid;

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
     * @var \Galerias
     *
     * @ORM\ManyToOne(targetEntity="Galerias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="GaleriaId", referencedColumnName="GaleriaId")
     * })
     */
    private $galeriaid;

    /**
     * @var \Productos
     *
     * @ORM\ManyToOne(targetEntity="Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductoId", referencedColumnName="ProductoId")
     * })
     */
    private $productoid;


}
