<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblorders".
 *
 * @property integer $order_id
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
            [['title', 'client_id', 'status_id'], 'required'],
            [['client_id', 'country_id', 'status_id'], 'integer'],
            [['rubric', 'Other_instructions', 'files'], 'string'],
            [['date_ordered', 'date_expected'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'title' => 'Title',
            'client_id' => 'Client ID',
            'country_id' => 'Country ID',
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
