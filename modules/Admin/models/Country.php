<?php

namespace app\modules\Admin\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $ID
 * @property string $Name_country
 *
 * @property Region[] $regions
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name_country'], 'required'],
            [['Name_country'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [

            'Name_country' => 'Название страны',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegions()
    {
        return $this->hasMany(Region::className(), ['ID_country' => 'ID']);
    }
}
