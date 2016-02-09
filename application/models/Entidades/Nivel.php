<?php



use Doctrine\Mapping as ORM;

/**
 * Nivel
 *
 * @Table(name="nivel")
 * @Entity
 */
class Nivel
{
    /**
     * @var integer
     *
     * @Column(name="id_nivel", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="nivel_id_nivel_seq", allocationSize=1, initialValue=1)
     */
    private $idNivel;

    /**
     * @var string
     *
     * @Column(name="nombre", type="string", length=7, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @Column(name="instructor", type="string", length=25, nullable=true)
     */
    private $instructor;


    /**
     * Get idNivel
     *
     * @return integer 
     */
    public function getIdNivel()
    {
        return $this->idNivel;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Nivel
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

    /**
     * Set instructor
     *
     * @param string $instructor
     * @return Nivel
     */
    public function setInstructor($instructor)
    {
        $this->instructor = $instructor;
    
        return $this;
    }

    /**
     * Get instructor
     *
     * @return string 
     */
    public function getInstructor()
    {
        return $this->instructor;
    }
}
