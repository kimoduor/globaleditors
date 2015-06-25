<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tbleditors]].
 *
 * @see Tbleditors
 */
class TbleditorsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Tbleditors[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Tbleditors|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}