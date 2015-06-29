<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblclients".
 *
 * @property integer $client_id
 * @property string $Names
 * @property string $email
 * @property string $mobile
 * @property integer $status
 *
 * @property Tblorders[] $tblorders
 */
class Tblclients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblclients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Names', 'email'], 'required'],
            [['status'], 'integer'],
            [['email'], 'email'],
            [['Names', 'email', 'mobile'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'client_id' => 'Client ID',
            'Names' => 'Names',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblorders()
    {
        return $this->hasMany(Tblorders::className(), ['client_id' => 'client_id']);
    }
}
