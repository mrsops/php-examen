<?php
/**
 * Created by PhpStorm.
 * User: mrsops
 * Date: 11/12/18
 * Time: 9:28
 */

class AppException extends Exception
{

    public function __construct(string $message = "")
    {
        parent::__construct($message);
    }
}