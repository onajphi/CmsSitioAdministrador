<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galerias
 *
 * @ORM\Table(name="galerias")
 * @ORM\Entity
 */
class Galerias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="GaleriaId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $galeriaid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ArchivoId", type="integer", nullable=true)
     */
    private $archivoid;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoGaleriaId", type="integer", nullable=true)
     */
    private $tipogaleriaid;

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


}
