<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorias
 *
 * @ORM\Table(name="categorias", indexes={@ORM\Index(name="fk_CategoriasTiposCategoriaId_TipoCategoriasTipoCategoriaId", columns={"TipoCategoriaId"})})
 * @ORM\Entity
 */
class Categorias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Categoriaid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoriaid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

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
     * @var \Tipocategorias
     *
     * @ORM\ManyToOne(targetEntity="Tipocategorias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoCategoriaId", referencedColumnName="TipoCategoriaId")
     * })
     */
    private $tipocategoriaid;


}
