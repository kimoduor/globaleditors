<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbleducation".
 *
 * @property integer $education_level_id
 * @property string $level_name
 *
 * @property Tbleditors[] $tbleditors
 */
class Tbleducation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbleducation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level_name'], 'required'],
            [['level_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'education_level_id' => 'Education Level ID',
            'level_name' => 'Level Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbleditors()
    {
        return $this->hasMany(Tbleditors::className(), ['education_level_id' => 'education_level_id']);
    }
}
