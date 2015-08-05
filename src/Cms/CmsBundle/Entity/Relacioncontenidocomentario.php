<?php

namespace Cms\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacioncontenidocomentario
 *
 * @ORM\Table(name="relacioncontenidocomentario", indexes={@ORM\Index(name="fk_RelacionContenidoComentarioContenidoId_ContenidosContenidoId", columns={"ContenidoId"}), @ORM\Index(name="fk_RelacionContenidoComentarioId_ComentariosComentarioId", columns={"ComentarioId"})})
 * @ORM\Entity
 */
class Relacioncontenidocomentario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ContenidoComentarioId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contenidocomentarioid;

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
     * @var \Contenidos
     *
     * @ORM\ManyToOne(targetEntity="Contenidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ContenidoId", referencedColumnName="ContenidoId")
     * })
     */
    private $contenidoid;

    /**
     * @var \Comentarios
     *
     * @ORM\ManyToOne(targetEntity="Comentarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ComentarioId", referencedColumnName="ComentarioId")
     * })
     */
    private $comentarioid;


}
