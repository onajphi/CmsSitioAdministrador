<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidos
 *
 * @ORM\Table(name="pedidos", indexes={@ORM\Index(name="fk_PedidosEstadoPedidoId_EstadoPedidosEstadoPedidoId", columns={"EstadoPedidoId"}), @ORM\Index(name="fk_PedidosDespachoId_DespachosDespachoId", columns={"DespachoId"}), @ORM\Index(name="fk_PedidosClienteId_ClientesClienteId", columns={"ClienteId"}), @ORM\Index(name="fk_PedidosDireccionId_DireccionesDireccionId", columns={"DireccionId"})})
 * @ORM\Entity
 */
class Pedidos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PedidoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pedidoid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Entrega", type="date", nullable=true)
     */
    private $entrega;

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
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ClienteId", referencedColumnName="ClienteId")
     * })
     */
    private $clienteid;

    /**
     * @var \Despachos
     *
     * @ORM\ManyToOne(targetEntity="Despachos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DespachoId", referencedColumnName="DespachoId")
     * })
     */
    private $despachoid;

    /**
     * @var \Direcciones
     *
     * @ORM\ManyToOne(targetEntity="Direcciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DireccionId", referencedColumnName="DireccionId")
     * })
     */
    private $direccionid;

    /**
     * @var \Estadopedidos
     *
     * @ORM\ManyToOne(targetEntity="Estadopedidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EstadoPedidoId", referencedColumnName="EstadoPedidoId")
     * })
     */
    private $estadopedidoid;


}
