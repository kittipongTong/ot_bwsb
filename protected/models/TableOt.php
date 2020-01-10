<?php

/**
 * This is the model class for table "table_ot".
 *
 * The followings are the available columns in table 'table_ot':
 * @property integer $ot_id
 * @property integer $mb_id
 * @property string $ot_date
 * @property integer $ot_withdraw
 * @property integer $dm_id
 * @property string $ot_evidence
 * @property double $ot_pjmoney
 * @property double $ot_total
 * @property integer $psn_id
 * @property string $created_date
 * @property integer $created_by
 * @property string $update_date
 * @property integer $update_by
 * @property string $active
 *
 * The followings are the available model relations:
 * @property MasterDate $dm
 * @property TableMember $mb
 * @property TablePersonnel $psn
 */
class TableOt extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'table_ot';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ot_id, mb_id, dm_id, ot_evidence, ot_pjmoney, psn_id', 'required'),
			array('ot_id, mb_id, ot_withdraw, dm_id, psn_id, created_by, update_by', 'numerical', 'integerOnly'=>true),
			array('ot_pjmoney, ot_total', 'numerical'),
			array('active', 'length', 'max'=>1),
			array('ot_date, created_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ot_id, mb_id, ot_date, ot_withdraw, dm_id, ot_evidence, ot_pjmoney, ot_total, psn_id, created_date, created_by, update_date, update_by, active', 'safe', 'on'=>'search'),
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
			'dm' => array(self::BELONGS_TO, 'MasterDate', 'dm_id'),
			'mb' => array(self::BELONGS_TO, 'TableMember', 'mb_id'),
			'psn' => array(self::BELONGS_TO, 'TablePersonnel', 'psn_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ot_id' => 'รหัสค่า OT',
			'mb_id' => 'รหัสสมาชิก',
			'ot_date' => 'วันที่ยืนคำขอ',
			'ot_withdraw' => 'ขอเบิก',
			'dm_id' => 'รหัสวันที่ทำ OT',
			'ot_evidence' => 'รวมเป็นเงินทั้งหมด',
			'ot_pjmoney' => 'Ot Pjmoney',
			'ot_total' => 'Ot Total',
			'psn_id' => 'รหัส id พนักงาน',
			'created_date' => 'วันที่สร้าง',
			'created_by' => 'คนที่สร้าง',
			'update_date' => 'วันที่อัพเดท',
			'update_by' => 'คนที่อัพเดท',
			'active' => 'Active',
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

		$criteria->compare('ot_id',$this->ot_id);
		$criteria->compare('mb_id',$this->mb_id);
		$criteria->compare('ot_date',$this->ot_date,true);
		$criteria->compare('ot_withdraw',$this->ot_withdraw);
		$criteria->compare('dm_id',$this->dm_id);
		$criteria->compare('ot_evidence',$this->ot_evidence,true);
		$criteria->compare('ot_pjmoney',$this->ot_pjmoney);
		$criteria->compare('ot_total',$this->ot_total);
		$criteria->compare('psn_id',$this->psn_id);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('update_by',$this->update_by);
		$criteria->compare('active',$this->active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TableOt the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
