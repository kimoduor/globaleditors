<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblorderstatus".
 *
 * @property integer $status_id
 * @property string $status
 *
 * @property Tblorders[] $tblorders
 */
class Tblorderstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblorderstatus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblorders()
    {
        return $this->hasMany(Tblorders::className(), ['status_id' => 'status_id']);
    }
}
