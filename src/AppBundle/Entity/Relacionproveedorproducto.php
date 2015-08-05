<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacionproveedorproducto
 *
 * @ORM\Table(name="relacionproveedorproducto", indexes={@ORM\Index(name="fk_RelacionProveedorProductoProveedorId_ProveedoresProveedorId", columns={"ProveedorId"}), @ORM\Index(name="fk_RelacionProveedorProductoProductoId_ProductosProductoId", columns={"ProductoId"})})
 * @ORM\Entity
 */
class Relacionproveedorproducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ProveedorProductoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $proveedorproductoid;

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
     * @var \Productos
     *
     * @ORM\ManyToOne(targetEntity="Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductoId", referencedColumnName="ProductoId")
     * })
     */
    private $productoid;

    /**
     * @var \Proveedores
     *
     * @ORM\ManyToOne(targetEntity="Proveedores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProveedorId", referencedColumnName="ProveedorId")
     * })
     */
    private $proveedorid;


}
