<?php



use Doctrine\Mapping as ORM;

/**
 * Usuario
 *
 * @Table(name="usuario")
 * @Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @Column(name="id_usuario", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="usuario_id_usuario_seq", allocationSize=1, initialValue=1)
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @Column(name="nombres", type="string", length=25, nullable=true)
     */
    private $nombres;

    /**
     * @var string
     *
     * @Column(name="apellidos", type="string", length=25, nullable=true)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @Column(name="nick", type="string", length=15, nullable=true)
     */
    private $nick;

    /**
     * @var string
     *
     * @Column(name="contrasena", type="string", nullable=true)
     */
    private $contrasena;

    /**
     * @var \TipoUsuario
     *
     * @ManyToOne(targetEntity="TipoUsuario")
     * @JoinColumns({
     *   @JoinColumn(name="id_tipo_usuario", referencedColumnName="id_tipo_usuario")
     * })
     */
    private $idTipoUsuario;


    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Usuario
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nick
     *
     * @param string $nick
     * @return Usuario
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
    
        return $this;
    }

    /**
     * Get nick
     *
     * @return string 
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     * @return Usuario
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    
        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string 
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set idTipoUsuario
     *
     * @param \TipoUsuario $idTipoUsuario
     * @return Usuario
     */
    public function setIdTipoUsuario(\TipoUsuario $idTipoUsuario = null)
    {
        $this->idTipoUsuario = $idTipoUsuario;
    
        return $this;
    }

    /**
     * Get idTipoUsuario
     *
     * @return \TipoUsuario 
     */
    public function getIdTipoUsuario()
    {
        return $this->idTipoUsuario;
    }
}
