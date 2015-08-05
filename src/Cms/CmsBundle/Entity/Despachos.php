<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Despachos
 *
 * @ORM\Table(name="despachos", indexes={@ORM\Index(name="fk_DespachosTipoDespachoId_TipoDespachosTipoDespachoId", columns={"TipoDespachoId"})})
 * @ORM\Entity
 */
class Despachos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="DespachoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $despachoid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Entrega", type="integer", nullable=false)
     */
    private $entrega;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $costo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=100, nullable=true)
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
     * @var \Tipodespachos
     *
     * @ORM\ManyToOne(targetEntity="Tipodespachos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoDespachoId", referencedColumnName="TipoDespachoId")
     * })
     */
    private $tipodespachoid;


}
