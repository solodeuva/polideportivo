<?php



use Doctrine\Mapping as ORM;

/**
 * TipoUsuario
 *
 * @Table(name="tipo_usuario")
 * @Entity
 */
class TipoUsuario
{
    /**
     * @var integer
     *
     * @Column(name="id_tipo_usuario", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="tipo_usuario_id_tipo_usuario_seq", allocationSize=1, initialValue=1)
     */
    private $idTipoUsuario;

    /**
     * @var string
     *
     * @Column(name="tipo", type="string", length=5, nullable=true)
     */
    private $tipo;


    /**
     * Get idTipoUsuario
     *
     * @return integer 
     */
    public function getIdTipoUsuario()
    {
        return $this->idTipoUsuario;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return TipoUsuario
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
