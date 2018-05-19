<?php

namespace app\modules\Admin\models;

use Yii;

/**
 * This is the model class for table "faculties".
 *
 * @property int $ID
 * @property string $Name_faculties
 *
 * @property Departments[] $departments
 */
class Faculties extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faculties';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name_faculties'], 'required'],
            [['Name_faculties'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [

            'Name_faculties' => 'Название факультета',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Departments::className(), ['ID_faculties' => 'ID']);
    }
}
