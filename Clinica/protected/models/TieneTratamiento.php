<?php

/**
 * This is the model class for table "tiene_tratamiento".
 *
 * The followings are the available columns in table 'tiene_tratamiento':
 * @property integer $id_realizado
 * @property integer $id_tiene_tratamiento
 * @property integer $id_cara
 *
 * The followings are the available model relations:
 * @property TratamientoRealizado $idRealizado
 * @property Cara $idCara
 */
class TieneTratamiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tiene_tratamiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_realizado, id_pieza, comentario', 'required'),
			array('id_realizado, id_pieza', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_realizado, id_tiene_tratamiento, id_pieza, comentario', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idRealizado' => array(self::BELONGS_TO, 'TratamientoRealizado', 'id_realizado'),
			'idPieza' => array(self::BELONGS_TO, 'Pieza', 'id_pieza'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_realizado' => 'Id Realizado',
			'id_tiene_tratamiento' => 'Id Tiene Tratamiento',
			'id_pieza' => 'Id Pieza',
                        'comentario' => 'Comentario',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_realizado',$this->id_realizado);
		$criteria->compare('id_tiene_tratamiento',$this->id_tiene_tratamiento);
		$criteria->compare('id_pieza',$this->id_pieza);
                $criteria->compare('comentario',$this->comentario);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TieneTratamiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
