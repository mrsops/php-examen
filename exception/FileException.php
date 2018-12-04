<?php
/**
 * Created by PhpStorm.
 * User: mrsops
 * Date: 4/12/18
 * Time: 9:02
 */

class FileException extends Exception
{

    /**
     * FileException constructor.
     */
    public function __construct(string $mensaje)
    {
        parent::__construct($mensaje);
    }
}