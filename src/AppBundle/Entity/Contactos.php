<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactos
 *
 * @ORM\Table(name="contactos")
 * @ORM\Entity
 */
class Contactos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ContactoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactoid;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=45, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Celular", type="string", length=45, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="Email1", type="string", length=50, nullable=true)
     */
    private $email1;

    /**
     * @var string
     *
     * @ORM\Column(name="Email2", type="string", length=50, nullable=true)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=45, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Postal", type="string", length=45, nullable=true)
     */
    private $postal;

    /**
     * @var string
     *
     * @ORM\Column(name="Skype", type="string", length=45, nullable=true)
     */
    private $skype;

    /**
     * @var string
     *
     * @ORM\Column(name="Twitter", type="string", length=45, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="Facebook", type="string", length=45, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="GooglePlus", type="string", length=45, nullable=true)
     */
    private $googleplus;


}
