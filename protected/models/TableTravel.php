<?php

/**
 * This is the model class for table "table_travel".
 *
 * The followings are the available columns in table 'table_travel':
 * @property integer $tv_id
 * @property integer $mb_id
 * @property string $tv_date
 * @property integer $tv_withdraw
 * @property string $tv_date_travel
 * @property string $tv_reason
 * @property string $tv_evidence
 * @property double $tv_total
 * @property integer $psn_id
 * @property string $created_date
 * @property integer $created_by
 * @property string $update_date
 * @property integer $update_by
 * @property string $active
 *
 * The followings are the available model relations:
 * @property TableMember $mb
 * @property TablePersonnel $psn
 */
class TableTravel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'table_travel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tv_id, mb_id, tv_date_travel, psn_id', 'required'),
			array('tv_id, mb_id, tv_withdraw, psn_id, created_by, update_by', 'numerical', 'integerOnly'=>true),
			array('tv_total', 'numerical'),
			array('tv_evidence', 'length', 'max'=>255),
			array('active', 'length', 'max'=>1),
			array('tv_date, tv_reason, created_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tv_id, mb_id, tv_date, tv_withdraw, tv_date_travel, tv_reason, tv_evidence, tv_total, psn_id, created_date, created_by, update_date, update_by, active', 'safe', 'on'=>'search'),
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
			'tv_id' => 'รหัสค่าเดินทาง',
			'mb_id' => 'รหัสสมาชิก',
			'tv_date' => 'วันที่ยืนคำขอ',
			'tv_withdraw' => 'ขอเบิก',
			'tv_date_travel' => 'เหตุผลการขอเบิก',
			'tv_reason' => 'หลักฐานการขอเบิก',
			'tv_evidence' => 'Tv Evidence',
			'tv_total' => 'รวมเป็นเงินทั้งหมด',
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

		$criteria->compare('tv_id',$this->tv_id);
		$criteria->compare('mb_id',$this->mb_id);
		$criteria->compare('tv_date',$this->tv_date,true);
		$criteria->compare('tv_withdraw',$this->tv_withdraw);
		$criteria->compare('tv_date_travel',$this->tv_date_travel,true);
		$criteria->compare('tv_reason',$this->tv_reason,true);
		$criteria->compare('tv_evidence',$this->tv_evidence,true);
		$criteria->compare('tv_total',$this->tv_total);
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
	 * @return TableTravel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
