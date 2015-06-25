<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblcountries".
 *
 * @property integer $country_id
 * @property string $country_name
 *
 * @property Tbleditors[] $tbleditors
 */
class Tblcountries extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblcountries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_name'], 'required'],
            [['country_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_id' => 'Country',
            'country_name' => 'Country Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbleditors()
    {
        return $this->hasMany(Tbleditors::className(), ['country_id' => 'country_id']);
    }
}
