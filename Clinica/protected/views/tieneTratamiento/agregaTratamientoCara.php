<?php

echo "INFO";
echo "<br>";
echo $model;
echo "<br>";
echo $numero;

$tratamientoRealizado = TratamientoRealizado::model()->findByAttributes(array('id_realizado'=>$model));

$ficha = FichaDental::model()->findByAttributes(array('id_ficha' => $tratamientoRealizado->id_ficha));

$odontograma = Odontograma::model()->findByAttributes(array('id_ficha' => $ficha->id_ficha));

$id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza'=> $numero));

?>


