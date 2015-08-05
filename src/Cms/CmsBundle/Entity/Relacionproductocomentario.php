<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacionproductocomentario
 *
 * @ORM\Table(name="relacionproductocomentario", indexes={@ORM\Index(name="fk_RelacionProductoComentarioProductoId_ProductosProductoId", columns={"ProductoId"}), @ORM\Index(name="fk_RelacionProductoComentarioId_ComentariosComentarioId", columns={"ComentarioId"})})
 * @ORM\Entity
 */
class Relacionproductocomentario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ProductoComentarioId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productocomentarioid;

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
     * @var \Comentarios
     *
     * @ORM\ManyToOne(targetEntity="Comentarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ComentarioId", referencedColumnName="ComentarioId")
     * })
     */
    private $comentarioid;

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
