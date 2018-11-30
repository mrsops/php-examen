<?php
    require_once 'entity/ImagenGaleria.php';

/**
 * @var ImagenGaleria[] $imagenes
 */
$imagenes = [
    new ImagenGaleria('1.jpg', 'Decripcion imagen 1', 1, 1, 1),
    new ImagenGaleria('2.jpg', 'Decripcion imagen 2', 2, 2, 2),
    new ImagenGaleria('3.jpg', 'Decripcion imagen 3', 3, 3, 3),
    new ImagenGaleria('4.jpg', 'Decripcion imagen 4', 4, 4, 4),
    new ImagenGaleria('5.jpg', 'Decripcion imagen 5', 5, 5, 5),
    new ImagenGaleria('6.jpg', 'Decripcion imagen 6', 6, 6, 6),
    new ImagenGaleria('7.jpg', 'Decripcion imagen 7', 7, 7, 7),
    new ImagenGaleria('8.jpg', 'Decripcion imagen 8', 8, 8, 8),
    new ImagenGaleria('9.jpg', 'Decripcion imagen 9', 9, 9, 9),
    new ImagenGaleria('10.jpg', 'Decripcion imagen 10', 10, 10, 10),
    new ImagenGaleria('11.jpg', 'Decripcion imagen 11', 11, 11, 11),
    new ImagenGaleria('12.jpg', 'Decripcion imagen 12', 12, 12, 12)

];
    require 'utils/utils.php';
    require 'views/index.view.php';
