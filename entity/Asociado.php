<?php
/**
 * Created by PhpStorm.
 * User: mrsops
 * Date: 18/12/18
 * Time: 8:16
 */

require_once __DIR__. '/../database/IEntity.php';

class Asociado implements IEntity
{

    const RUTA_LOGO='images/asociados/logo/';
    const RUTA_PORTFOLIO='images/asociados/portfolio/';


    private $id;
    private $nombre;
    private $logo;
    private $descripcion;

    /**
     * Asociado constructor.
     * @param $id
     * @param $nombre string
     * @param $logo string
     * @param $descripcion string
     */
    public function __construct($nombre="", $logo="", $descripcion="")
    {
        $this->id = null;
        $this->nombre = $nombre;
        $this->logo = $logo;
        $this->descripcion = $descripcion;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function toArray (): array
    {
        return [
            'nombre'=>$this->getNombre(),
            'logo'=>$this->getLogo(),
            'descripcion'=>$this->getDescripcion()];
    }




    /**
     * @return string
     */
    public function getUrlPortfolio() : string {
        return self::RUTA_PORTFOLIO.$this->getLogo();
    }
}