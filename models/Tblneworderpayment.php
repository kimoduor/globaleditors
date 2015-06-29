<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblneworderpayment".
 *
 * @property integer $neworderpayment_id
 * @property integer $order_id
 * @property integer $amount
 * @property string $date_paid
 *
 * @property Tblorders $order
 */
class Tblneworderpayment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblneworderpayment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'amount', 'date_paid'], 'required'],
            [['order_id', 'amount'], 'integer'],
            [['date_paid'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'neworderpayment_id' => 'Neworderpayment',
            'order_id' => 'Order',
            'amount' => 'Amount',
            'date_paid' => 'Date Paid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Tblorders::className(), ['order_id' => 'order_id']);
    }
}
