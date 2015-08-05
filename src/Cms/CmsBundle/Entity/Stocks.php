<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stocks
 *
 * @ORM\Table(name="stocks", indexes={@ORM\Index(name="fk_StocksProductoId_ProductosProductoId", columns={"ProductoId"}), @ORM\Index(name="fk_StocksBodegaId_BodegasBodegaId", columns={"BodegaId"})})
 * @ORM\Entity
 */
class Stocks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="StockId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stockid;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Maximo", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $maximo;

    /**
     * @var string
     *
     * @ORM\Column(name="Minimo", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $minimo;

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
     * @var \Bodegas
     *
     * @ORM\ManyToOne(targetEntity="Bodegas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="BodegaId", referencedColumnName="BodegaId")
     * })
     */
    private $bodegaid;

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
