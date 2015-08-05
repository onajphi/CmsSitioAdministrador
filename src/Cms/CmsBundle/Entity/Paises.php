<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paises
 *
 * @ORM\Table(name="paises")
 * @ORM\Entity
 */
class Paises
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PaisId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paisid;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Continente", type="string", length=50, nullable=true)
     */
    private $continente;

    /**
     * @var string
     *
     * @ORM\Column(name="Gentilicio", type="string", length=50, nullable=true)
     */
    private $gentilicio;


}
