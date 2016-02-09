<?php



use Doctrine\Mapping as ORM;

/**
 * Alumno
 *
 * @Table(name="alumno")
 * @Entity
 */
class Alumno
{
    /**
     * @var integer
     *
     * @Column(name="id_alumno", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="SEQUENCE")
     * @SequenceGenerator(sequenceName="alumno_id_alumno_seq", allocationSize=1, initialValue=1)
     */
    private $idAlumno;

    /**
     * @var string
     *
     * @Column(name="nombres", type="string", length=30, nullable=true)
     */
    private $nombres;

    /**
     * @var string
     *
     * @Column(name="apellidos", type="string", length=30, nullable=true)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @Column(name="genero", type="string", nullable=true)
     */
    private $genero;

    /**
     * @var string
     *
     * @Column(name="fecha_nacimiento", type="string", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var float
     *
     * @Column(name="estatura", type="decimal", nullable=true)
     */
    private $estatura;

    /**
     * @var string
     *
     * @Column(name="peso", type="string", length=3, nullable=true)
     */
    private $peso;

    /**
     * @var string
     *
     * @Column(name="direccion", type="string", length=100, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @Column(name="telefono", type="string", nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @Column(name="nombre_madre", type="string", length=60, nullable=true)
     */
    private $nombreMadre;

    /**
     * @var string
     *
     * @Column(name="dui_madre", type="string", nullable=true)
     */
    private $duiMadre;

    /**
     * @var string
     *
     * @Column(name="trabajo_madre", type="string", length=100, nullable=true)
     */
    private $trabajoMadre;

    /**
     * @var string
     *
     * @Column(name="tel_madre", type="string", nullable=true)
     */
    private $telMadre;

    /**
     * @var string
     *
     * @Column(name="nombre_padre", type="string", length=60, nullable=true)
     */
    private $nombrePadre;

    /**
     * @var string
     *
     * @Column(name="dui_padre", type="string", nullable=true)
     */
    private $duiPadre;

    /**
     * @var string
     *
     * @Column(name="trabajo_padre", type="string", length=100, nullable=true)
     */
    private $trabajoPadre;

    /**
     * @var string
     *
     * @Column(name="tel_padre", type="string", nullable=true)
     */
    private $telPadre;

    /**
     * @var string
     *
     * @Column(name="nombre_resp", type="string", length=60, nullable=true)
     */
    private $nombreResp;

    /**
     * @var string
     *
     * @Column(name="dui_resp", type="string", nullable=true)
     */
    private $duiResp;

    /**
     * @var string
     *
     * @Column(name="trabajo_resp", type="string", length=100, nullable=true)
     */
    private $trabajoResp;

    /**
     * @var string
     *
     * @Column(name="tel_resp", type="string", nullable=true)
     */
    private $telResp;

    /**
     * @var string
     *
     * @Column(name="exp_previa", type="string", length=250, nullable=true)
     */
    private $expPrevia;

    /**
     * @var string
     *
     * @Column(name="padecimientos", type="string", length=200, nullable=true)
     */
    private $padecimientos;

    /**
     * @var string
     *
     * @Column(name="medicamentos", type="string", length=200, nullable=true)
     */
    private $medicamentos;

    /**
     * @var string
     *
     * @Column(name="estado", type="string", nullable=true)
     */
    private $estado;

    /**
     * @var \Nivel
     *
     * @ManyToOne(targetEntity="Nivel")
     * @JoinColumns({
     *   @JoinColumn(name="id_nivel", referencedColumnName="id_nivel")
     * })
     */
    private $idNivel;


    /**
     * Get idAlumno
     *
     * @return integer 
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Alumno
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
     * @return Alumno
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
     * Set genero
     *
     * @param string $genero
     * @return Alumno
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    
        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set fechaNacimiento
     *
     * @param string $fechaNacimiento
     * @return Alumno
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return string 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set estatura
     *
     * @param float $estatura
     * @return Alumno
     */
    public function setEstatura($estatura)
    {
        $this->estatura = $estatura;
    
        return $this;
    }

    /**
     * Get estatura
     *
     * @return float 
     */
    public function getEstatura()
    {
        return $this->estatura;
    }

    /**
     * Set peso
     *
     * @param string $peso
     * @return Alumno
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    
        return $this;
    }

    /**
     * Get peso
     *
     * @return string 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Alumno
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Alumno
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set nombreMadre
     *
     * @param string $nombreMadre
     * @return Alumno
     */
    public function setNombreMadre($nombreMadre)
    {
        $this->nombreMadre = $nombreMadre;
    
        return $this;
    }

    /**
     * Get nombreMadre
     *
     * @return string 
     */
    public function getNombreMadre()
    {
        return $this->nombreMadre;
    }

    /**
     * Set duiMadre
     *
     * @param string $duiMadre
     * @return Alumno
     */
    public function setDuiMadre($duiMadre)
    {
        $this->duiMadre = $duiMadre;
    
        return $this;
    }

    /**
     * Get duiMadre
     *
     * @return string 
     */
    public function getDuiMadre()
    {
        return $this->duiMadre;
    }

    /**
     * Set trabajoMadre
     *
     * @param string $trabajoMadre
     * @return Alumno
     */
    public function setTrabajoMadre($trabajoMadre)
    {
        $this->trabajoMadre = $trabajoMadre;
    
        return $this;
    }

    /**
     * Get trabajoMadre
     *
     * @return string 
     */
    public function getTrabajoMadre()
    {
        return $this->trabajoMadre;
    }

    /**
     * Set telMadre
     *
     * @param string $telMadre
     * @return Alumno
     */
    public function setTelMadre($telMadre)
    {
        $this->telMadre = $telMadre;
    
        return $this;
    }

    /**
     * Get telMadre
     *
     * @return string 
     */
    public function getTelMadre()
    {
        return $this->telMadre;
    }

    /**
     * Set nombrePadre
     *
     * @param string $nombrePadre
     * @return Alumno
     */
    public function setNombrePadre($nombrePadre)
    {
        $this->nombrePadre = $nombrePadre;
    
        return $this;
    }

    /**
     * Get nombrePadre
     *
     * @return string 
     */
    public function getNombrePadre()
    {
        return $this->nombrePadre;
    }

    /**
     * Set duiPadre
     *
     * @param string $duiPadre
     * @return Alumno
     */
    public function setDuiPadre($duiPadre)
    {
        $this->duiPadre = $duiPadre;
    
        return $this;
    }

    /**
     * Get duiPadre
     *
     * @return string 
     */
    public function getDuiPadre()
    {
        return $this->duiPadre;
    }

    /**
     * Set trabajoPadre
     *
     * @param string $trabajoPadre
     * @return Alumno
     */
    public function setTrabajoPadre($trabajoPadre)
    {
        $this->trabajoPadre = $trabajoPadre;
    
        return $this;
    }

    /**
     * Get trabajoPadre
     *
     * @return string 
     */
    public function getTrabajoPadre()
    {
        return $this->trabajoPadre;
    }

    /**
     * Set telPadre
     *
     * @param string $telPadre
     * @return Alumno
     */
    public function setTelPadre($telPadre)
    {
        $this->telPadre = $telPadre;
    
        return $this;
    }

    /**
     * Get telPadre
     *
     * @return string 
     */
    public function getTelPadre()
    {
        return $this->telPadre;
    }

    /**
     * Set nombreResp
     *
     * @param string $nombreResp
     * @return Alumno
     */
    public function setNombreResp($nombreResp)
    {
        $this->nombreResp = $nombreResp;
    
        return $this;
    }

    /**
     * Get nombreResp
     *
     * @return string 
     */
    public function getNombreResp()
    {
        return $this->nombreResp;
    }

    /**
     * Set duiResp
     *
     * @param string $duiResp
     * @return Alumno
     */
    public function setDuiResp($duiResp)
    {
        $this->duiResp = $duiResp;
    
        return $this;
    }

    /**
     * Get duiResp
     *
     * @return string 
     */
    public function getDuiResp()
    {
        return $this->duiResp;
    }

    /**
     * Set trabajoResp
     *
     * @param string $trabajoResp
     * @return Alumno
     */
    public function setTrabajoResp($trabajoResp)
    {
        $this->trabajoResp = $trabajoResp;
    
        return $this;
    }

    /**
     * Get trabajoResp
     *
     * @return string 
     */
    public function getTrabajoResp()
    {
        return $this->trabajoResp;
    }

    /**
     * Set telResp
     *
     * @param string $telResp
     * @return Alumno
     */
    public function setTelResp($telResp)
    {
        $this->telResp = $telResp;
    
        return $this;
    }

    /**
     * Get telResp
     *
     * @return string 
     */
    public function getTelResp()
    {
        return $this->telResp;
    }

    /**
     * Set expPrevia
     *
     * @param string $expPrevia
     * @return Alumno
     */
    public function setExpPrevia($expPrevia)
    {
        $this->expPrevia = $expPrevia;
    
        return $this;
    }

    /**
     * Get expPrevia
     *
     * @return string 
     */
    public function getExpPrevia()
    {
        return $this->expPrevia;
    }

    /**
     * Set padecimientos
     *
     * @param string $padecimientos
     * @return Alumno
     */
    public function setPadecimientos($padecimientos)
    {
        $this->padecimientos = $padecimientos;
    
        return $this;
    }

    /**
     * Get padecimientos
     *
     * @return string 
     */
    public function getPadecimientos()
    {
        return $this->padecimientos;
    }

    /**
     * Set medicamentos
     *
     * @param string $medicamentos
     * @return Alumno
     */
    public function setMedicamentos($medicamentos)
    {
        $this->medicamentos = $medicamentos;
    
        return $this;
    }

    /**
     * Get medicamentos
     *
     * @return string 
     */
    public function getMedicamentos()
    {
        return $this->medicamentos;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Alumno
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idNivel
     *
     * @param \Nivel $idNivel
     * @return Alumno
     */
    public function setIdNivel(\Nivel $idNivel = null)
    {
        $this->idNivel = $idNivel;
    
        return $this;
    }

    /**
     * Get idNivel
     *
     * @return \Nivel 
     */
    public function getIdNivel()
    {
        return $this->idNivel;
    }
}
