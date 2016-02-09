<?php



use Doctrine\Mapping as ORM;

/**
 * Categoria
 *
 * @Table(name="categoria")
 * @Entity
 */
class Categoria
{
    /**
     * @var integer
     *
     * @Column(name="id_categoria", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="categoria_id_categoria_seq", allocationSize=1, initialValue=1)
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=15, nullable=true)
     */
    private $nombre;


    /**
     * Get idCategoria
     *
     * @return integer 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Categoria
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}
