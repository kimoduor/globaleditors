<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblorders".
 *
 * @property integer $order_id
 * @property string $order_code
 * @property string $title
 * @property integer $client_id
 * @property integer $country_id
 * @property string $rubric
 * @property string $Other_instructions
 * @property string $files
 * @property integer $status_id
 * @property string $date_ordered
 * @property string $date_expected
 *
 * @property Tbleditorspayment[] $tbleditorspayments
 * @property Tblneworderpayment[] $tblneworderpayments
 * @property Tblorderassignment[] $tblorderassignments
 * @property Tblclients $client
 * @property Tblcountries $country
 * @property Tblorderstatus $status
 */
class Tblorders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblorders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_code', 'title', 'client_id', 'status_id'], 'required'],
            [['client_id', 'country_id', 'status_id'], 'integer'],
            [['rubric', 'Other_instructions', 'files'], 'string'],
            [['date_ordered', 'date_expected'], 'safe'],
            [['order_code', 'title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_code' => 'Order Code',
            'title' => 'Title',
            'client_id' => 'Client',
            'country_id' => 'Country ',
            'rubric' => 'Rubric',
            'Other_instructions' => 'Other Instructions',
            'files' => 'Files',
            'status_id' => 'Status ID',
            'date_ordered' => 'Date Ordered',
            'date_expected' => 'Date Expected',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbleditorspayments()
    {
        return $this->hasMany(Tbleditorspayment::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblneworderpayments()
    {
        return $this->hasMany(Tblneworderpayment::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblorderassignments()
    {
        return $this->hasMany(Tblorderassignment::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Tblclients::className(), ['client_id' => 'client_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Tblcountries::className(), ['country_id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Tblorderstatus::className(), ['status_id' => 'status_id']);
    }
}
