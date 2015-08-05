<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipocontenidos
 *
 * @ORM\Table(name="tipocontenidos")
 * @ORM\Entity
 */
class Tipocontenidos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TipoContenidoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipocontenidoid;

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


}
