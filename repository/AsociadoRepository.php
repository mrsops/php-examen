<?php
/**
 * Created by PhpStorm.
 * User: mrsops
 * Date: 18/12/18
 * Time: 9:00
 */

require_once  __DIR__ . '/../database/QueryBuilder.php';
class AsociadoRepository extends QueryBuilder
{


    public function __construct(string $table='asociados', string $classEntity='Asociado')
    {
        parent::__construct($table, $classEntity);
    }
}