<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbleditors".
 *
 * @property integer $editor_id
 * @property string $editor_name
 * @property integer $country_id
 * @property integer $education_level_id
 * @property string $education_institution
 * @property integer $stars
 * @property string $mobile
 * @property string $email
 * @property string $Comments
 * @property integer $status
 * @property string $photo
 *
 * @property Tblcountries $country
 * @property Tbleducation $educationLevel
 */
class Tbleditors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbleditors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['editor_name', 'country_id', 'education_level_id', 'stars', 'mobile', 'email'], 'required'],
            [['country_id', 'education_level_id', 'stars', 'status'], 'integer'],
            [['Comments', 'photo'], 'string'],
            [['editor_name', 'education_institution', 'mobile', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'editor_id' => 'Editor ID',
            'editor_name' => 'Editor Name',
            'country_id' => 'Country ID',
            'education_level_id' => 'Education Level ID',
            'education_institution' => 'Education Institution',
            'stars' => 'Stars',
            'mobile' => 'Mobile',
            'email' => 'Email',
            'Comments' => 'Comments',
            'status' => 'Status',
            'photo' => 'Photo',
        ];
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
    public function getEducationLevel()
    {
        return $this->hasOne(Tbleducation::className(), ['education_level_id' => 'education_level_id']);
    }
}
