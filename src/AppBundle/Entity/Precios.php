<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Precios
 *
 * @ORM\Table(name="precios", uniqueConstraints={@ORM\UniqueConstraint(name="ProductoId_UNIQUE", columns={"ProductoId"})})
 * @ORM\Entity
 */
class Precios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $precioid;

    /**
     * @var string
     *
     * @ORM\Column(name="Unitario", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $unitario = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Menor", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $menor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Mayor", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $mayor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Venta", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $venta = '0';

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


}
