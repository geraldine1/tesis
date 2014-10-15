<?php
$model_tratamiento = $model;
$ficha = FichaDental::model()->findByAttributes(array('id_ficha' => $model_tratamiento->id_ficha));
$odontograma = Odontograma::model()->findByAttributes(array('id_ficha' => $ficha->id_ficha));
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<div align="center">
<table width="50%">
	<tr>
    	<td><img src="imagenes/18.png" width="47" height="72" /></td>
        <td><img src="imagenes/17.png" width="57" height="102" /></td> 
        <td><img src="imagenes/16.png" width="57" height="102" /></td> 
        <td><img src="imagenes/15.png" width="37" height="92" /></td> 
        <td><img src="imagenes/14.png" width="37" height="102" /></td> 
        <td><img src="imagenes/13.png" width="37" height="102" /></td> 
        <td><img src="imagenes/12.png" width="37" height="92" /></td>
        <td><img src="imagenes/11.png" width="37" height="102" /></td> 
        <td></td> 
        <td><img src="imagenes/21.png" width="37" height="102" /></td>  
        <td><img src="imagenes/22.png" width="37" height="92" /></td>
        <td><img src="imagenes/23.png" width="37" height="102" /></td> 
        <td><img src="imagenes/24.png" width="37" height="102" /></td> 
        <td><img src="imagenes/25.png" width="37" height="102" /></td> 
        <td><img src="imagenes/26.png" width="57" height="92" /></td>
        <td><img src="imagenes/27.png" width="57" height="92" /></td> 
        <td><img src="imagenes/28.png" width="47" height="72" /></td>             
    </tr>
    <tr align="center">
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 18));                
                echo CHtml::link('18', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 17));              
                echo CHtml::link('17', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 16));
                           echo CHtml::link('16', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 15));
                           echo CHtml::link('15', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 14));
                           echo CHtml::link('14', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 13));
                           echo CHtml::link('13', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 12));
                           echo CHtml::link('12', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 11));
                           echo CHtml::link('11', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 21));
                           echo CHtml::link('21', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 22));
                           echo CHtml::link('22', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 23));
                           echo CHtml::link('23', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 24));
                           echo CHtml::link('24', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 25));
                           echo CHtml::link('25', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 26));
                           echo CHtml::link('26', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 27));
                           echo CHtml::link('27', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 28));
                           echo CHtml::link('28', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
    </tr>    
    <tr align="center">
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 48));
                           echo CHtml::link('48', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 47));
                           echo CHtml::link('47', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 46));
                           echo CHtml::link('46', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 45));
                           echo CHtml::link('45', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 44));
                           echo CHtml::link('44', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 43));
                           echo CHtml::link('43', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 42));
                           echo CHtml::link('42', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 41));
                           echo CHtml::link('41', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 31));
                           echo CHtml::link('31', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 32));
                           echo CHtml::link('32', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 33));
                           echo CHtml::link('33', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 34));
                           echo CHtml::link('34', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 35));
                           echo CHtml::link('35', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 36));
                           echo CHtml::link('36', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 37));
                           echo CHtml::link('37', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 38));
                           echo CHtml::link('38', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
    </tr>
    <tr>
    	<td><img src="imagenes/48.png" width="47" height="72" /></td>
        <td><img src="imagenes/47.png" width="57" height="102" /></td> 
        <td><img src="imagenes/46.png" width="57" height="102" /></td> 
        <td><img src="imagenes/45.png" width="37" height="112" /></td> 
        <td><img src="imagenes/44.png" width="37" height="102" /></td> 
        <td><img src="imagenes/43.png" width="37" height="102" /></td> 
        <td><img src="imagenes/42.png" width="37" height="92" /></td>
        <td><img src="imagenes/41.png" width="37" height="92" /></td> 
        <td></td> 
        <td><img src="imagenes/31.png" width="37" height="92" /></td>  
        <td><img src="imagenes/32.png" width="37" height="92" /></td>
        <td><img src="imagenes/33.png" width="37" height="102" /></td> 
        <td><img src="imagenes/34.png" width="37" height="102" /></td> 
        <td><img src="imagenes/35.png" width="37" height="112" /></td> 
        <td><img src="imagenes/36.png" width="57" height="102" /></td>
        <td><img src="imagenes/37.png" width="57" height="102" /></td> 
        <td><img src="imagenes/38.png" width="47" height="72" /></td>             
    </tr>
    </table>
    </div>
    <div align="center">
    <table>
    <tr>
    	<td><img src="imagenes/17.png" width="37" height="92" /></td>
        <td><img src="imagenes/16.png" width="37" height="92" /></td> 
        <td><img src="imagenes/15.png" width="37" height="92" /></td> 
        <td><img src="imagenes/14.png" width="37" height="92" /></td> 
        <td><img src="imagenes/13.png" width="37" height="92" /></td>
        <td></td>
        <td><img src="imagenes/23.png" width="37" height="92" /></td> 
        <td><img src="imagenes/24.png" width="37" height="92" /></td> 
        <td><img src="imagenes/25.png" width="37" height="92" /></td>
        <td><img src="imagenes/26.png" width="37" height="92" /></td> 
        <td><img src="imagenes/27.png" width="37" height="92" /></td>  
     </tr>
     <tr align="center">
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 55));
                           echo CHtml::link('55', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 54));
                           echo CHtml::link('54', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 53));
                           echo CHtml::link('53', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 52));
                           echo CHtml::link('52', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 51));
                           echo CHtml::link('51', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 61));
                           echo CHtml::link('61', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 62));
                           echo CHtml::link('62', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 63));
                           echo CHtml::link('63', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 64));
                           echo CHtml::link('64', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 65));
                           echo CHtml::link('65', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
      </tr>
       <tr align="center">
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 85));
                           echo CHtml::link('85', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 84));
                           echo CHtml::link('84', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 83));
                           echo CHtml::link('83', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 82));
                           echo CHtml::link('82', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 81));
                           echo CHtml::link('81', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 71));
                           echo CHtml::link('71', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 72));
                           echo CHtml::link('72', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 73));
                           echo CHtml::link('73', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 74));
                           echo CHtml::link('74', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
        <td><?php $id = Pieza::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'nombre_pieza' => 75));
                           echo CHtml::link('75', array('tieneTratamiento/create', 'id_pieza' => $id->id_pieza, 'id_realizado' => $model_tratamiento->id_realizado)); ?></td>
      </tr>
      <tr>
      	<td><img src="imagenes/47.png" width="37" height="92" /></td> 
        <td><img src="imagenes/46.png" width="37" height="92" /></td> 
        <td><img src="imagenes/45.png" width="37" height="92" /></td> 
        <td><img src="imagenes/44.png" width="37" height="92" /></td> 
        <td><img src="imagenes/43.png" width="37" height="92" /></td> 
        <td></td>
        <td><img src="imagenes/33.png" width="37" height="92" /></td> 
        <td><img src="imagenes/34.png" width="37" height="92" /></td> 
        <td><img src="imagenes/35.png" width="37" height="92" /></td> 
        <td><img src="imagenes/36.png" width="37" height="92" /></td>
        <td><img src="imagenes/37.png" width="37" height="92" /></td> 
      </tr>
</table>
</div>
</body>
</html>
<?php
$this->beginWidget('zii.widgets.jui.CjuiDialog', array(
    'id' => 'mymodal',
    'options' => array(
        'title' => 'Complete la siguiente información',
        'width' => 400,
        'height' => 400,
        'autoOpen' => false,
        'resizable' => false,
        'modal' => true,
        'overlay' => array(
            'backgroundColor' => '#000',
            'opacity' => '0.5',
        ),
        'open'=> 'js:function(event){console.log("hola")}',
    ),
));

/* echo $this->renderPartial('//tieneTratamiento/agregaTratamientoCara',array(
  'model'=>$model_tratamiento,
  'cosa'=>$dato,
  )); */

$this->endWidget('zii.widgets.jui.CjuiDialog');
?>

<?php //echo CHtml::link('Añadir', '', array('onclick' => '$("#mymodal").dialog("open"); console.log("Si renato xd"); return false;')); ?>
