<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="productos", indexes={@ORM\Index(name="fk_ProductosEstadoProductoId_EstadoProductosEstadoProductoId", columns={"EstadoProductoId"}), @ORM\Index(name="fk_ProductosFabricanteId_FabricantesFabricanteId", columns={"FabricanteId"}), @ORM\Index(name="fk_ProductosArchivoId_ArchivosArchivoId", columns={"ArchivoId"}), @ORM\Index(name="fk_ProductosSubCategoriaId_SubCategoriasSubCategoriaId", columns={"SubCategoriaId"})})
 * @ORM\Entity
 */
class Productos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ProductoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productoid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=150, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Serie", type="string", length=100, nullable=true)
     */
    private $serie;

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
     * @var \Archivos
     *
     * @ORM\ManyToOne(targetEntity="Archivos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ArchivoId", referencedColumnName="ArchivoId")
     * })
     */
    private $archivoid;

    /**
     * @var \Estadoproductos
     *
     * @ORM\ManyToOne(targetEntity="Estadoproductos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EstadoProductoId", referencedColumnName="EstadoProductoId")
     * })
     */
    private $estadoproductoid;

    /**
     * @var \Fabricantes
     *
     * @ORM\ManyToOne(targetEntity="Fabricantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FabricanteId", referencedColumnName="FabricanteId")
     * })
     */
    private $fabricanteid;

    /**
     * @var \Subcategorias
     *
     * @ORM\ManyToOne(targetEntity="Subcategorias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SubCategoriaId", referencedColumnName="SubCategoriaId")
     * })
     */
    private $subcategoriaid;


}
