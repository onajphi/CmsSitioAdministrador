<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacioncatalogoproducto
 *
 * @ORM\Table(name="relacioncatalogoproducto", indexes={@ORM\Index(name="fk_RelacionCatalogoProductoCatalogoId_CatalogosCatalogoId", columns={"CatalogoId"}), @ORM\Index(name="fk_RelacionCatalogoProductoProductoId_ProductosProductoId", columns={"ProductoId"})})
 * @ORM\Entity
 */
class Relacioncatalogoproducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CatalogoProductoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catalogoproductoid;

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
     * @var \Catalogos
     *
     * @ORM\ManyToOne(targetEntity="Catalogos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CatalogoId", referencedColumnName="CatalogoId")
     * })
     */
    private $catalogoid;

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
