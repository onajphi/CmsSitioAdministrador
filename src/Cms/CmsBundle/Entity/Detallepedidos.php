<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detallepedidos
 *
 * @ORM\Table(name="detallepedidos", indexes={@ORM\Index(name="fk_DetallePedidosPedidoId_PedidosPedidoId", columns={"PedidoId"}), @ORM\Index(name="fk_DetallePedidosProductoId_ProductosProductoId", columns={"ProductoId"})})
 * @ORM\Entity
 */
class Detallepedidos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="DetallePedidoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $detallepedidoid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Valor", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $valor;

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
     * @var \Pedidos
     *
     * @ORM\ManyToOne(targetEntity="Pedidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PedidoId", referencedColumnName="PedidoId")
     * })
     */
    private $pedidoid;

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
