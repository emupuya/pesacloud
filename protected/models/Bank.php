<?php

/**
 * This is the model class for table "bank".
 *
 * The followings are the available columns in table 'bank':
 * @property integer $id
 * @property string $bank_name
 * @property string $password
 * @property string $postal_address
 * @property string $building
 * @property string $physical_address
 * @property integer $telephone
 * @property integer $fax
 * @property string $email
 * @property string $logo
 *
 * The followings are the available model relations:
 * @property Charge[] $charges
 */
class Bank extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bank';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bank_name, password, postal_address, email', 'required'),
			array('telephone, fax', 'numerical', 'integerOnly'=>true),
			array('bank_name, email', 'length', 'max'=>40),
			array('password', 'length', 'max'=>42),
			array('postal_address', 'length', 'max'=>25),
			array('building, physical_address', 'length', 'max'=>20),
			array('logo', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, bank_name, password, postal_address, building, physical_address, telephone, fax, email, logo', 'safe', 'on'=>'search'),
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
			'charges' => array(self::HAS_MANY, 'Charge', 'bank'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'bank_name' => 'Bank Name',
			'password' => 'Password',
			'postal_address' => 'Postal Address',
			'building' => 'Building',
			'physical_address' => 'Physical Address',
			'telephone' => 'Telephone',
			'fax' => 'Fax',
			'email' => 'Email',
			'logo' => 'Logo',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('postal_address',$this->postal_address,true);
		$criteria->compare('building',$this->building,true);
		$criteria->compare('physical_address',$this->physical_address,true);
		$criteria->compare('telephone',$this->telephone);
		$criteria->compare('fax',$this->fax);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('logo',$this->logo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bank the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
