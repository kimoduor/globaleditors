<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblorderassignment".
 *
 * @property integer $assignment_id
 * @property integer $order_id
 * @property integer $editor_id
 * @property string $dead_line
 * @property integer $amount
 *
 * @property Tblorders $order
 * @property Tbleditors $editor
 */
class Tblorderassignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblorderassignment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'editor_id', 'amount'], 'required'],
            [['order_id', 'editor_id', 'amount'], 'integer'],
            [['dead_line'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'assignment_id' => 'Assignment',
            'order_id' => 'Order',
            'editor_id' => 'Editor',
            'dead_line' => 'Dead Line',
            'amount' => 'Amount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Tblorders::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEditor()
    {
        return $this->hasOne(Tbleditors::className(), ['editor_id' => 'editor_id']);
    }
}
