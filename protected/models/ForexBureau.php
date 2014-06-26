<?php

/**
 * This is the model class for table "forex_bureau".
 *
 * The followings are the available columns in table 'forex_bureau':
 * @property integer $id
 * @property string $forex_bureau_name
 * @property string $password
 * @property string $postal_address
 * @property string $building
 * @property string $physical_address
 * @property integer $telephone
 * @property integer $fax
 * @property string $email
 * @property string $logo
 */
class ForexBureau extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'forex_bureau';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('forex_bureau_name, password, postal_address, email', 'required'),
			array('telephone, fax', 'numerical', 'integerOnly'=>true),
			array('forex_bureau_name, email', 'length', 'max'=>40),
			array('password', 'length', 'max'=>64),
			array('postal_address', 'length', 'max'=>25),
			array('building, physical_address', 'length', 'max'=>20),
			array('logo', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, forex_bureau_name, password, postal_address, building, physical_address, telephone, fax, email, logo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'forex_bureau_name' => 'Forex Bureau Name',
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
		$criteria->compare('forex_bureau_name',$this->forex_bureau_name,true);
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
	 * @return ForexBureau the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
