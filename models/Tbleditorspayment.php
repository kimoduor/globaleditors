<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbleditorspayment".
 *
 * @property integer $editorpayment_id
 * @property integer $editor_id
 * @property integer $order_id
 * @property integer $amount
 * @property string $date_updated
 * @property string $status
 *
 * @property Tbleditors $editor
 * @property Tblorders $order
 */
class Tbleditorspayment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbleditorspayment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['editor_id', 'order_id', 'amount', 'date_updated'], 'required'],
            [['editor_id', 'order_id', 'amount'], 'integer'],
            [['date_updated'], 'safe'],
            [['status'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'editorpayment_id' => 'Editorpayment',
            'editor_id' => 'Editor ',
            'order_id' => 'Order ',
            'amount' => 'Amount',
            'date_updated' => 'Date Updated',
            'status' => 'Comments',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEditor()
    {
        return $this->hasOne(Tbleditors::className(), ['editor_id' => 'editor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Tblorders::className(), ['order_id' => 'order_id']);
    }
}
