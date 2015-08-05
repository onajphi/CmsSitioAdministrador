<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacionproductocontenido
 *
 * @ORM\Table(name="relacionproductocontenido", indexes={@ORM\Index(name="fk_RelacionProductoContenidoProductoId_ProductosProductoId", columns={"ProductoId"}), @ORM\Index(name="fk_RelacionProductoContenidoContenidoId_ContenidosContenidoId", columns={"ContenidoId"})})
 * @ORM\Entity
 */
class Relacionproductocontenido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ProductoContenidoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productocontenidoid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden", type="integer", nullable=true)
     */
    private $orden = '1';

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
     * @var \Productos
     *
     * @ORM\ManyToOne(targetEntity="Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductoId", referencedColumnName="ProductoId")
     * })
     */
    private $productoid;


}
