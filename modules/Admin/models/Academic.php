<?php

namespace app\modules\Admin\models;

use Yii;

/**
 * This is the model class for table "academic_direction".
 *
 * @property int $ID
 * @property int $ID_departments
 * @property string $Name_academic_direction
 *
 * @property Departments $departments
 * @property UnregisteredApplicant[] $unregisteredApplicants
 */
class Academic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'academic_direction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_departments', 'Name_academic_direction'], 'required'],
            [['ID_departments'], 'integer'],
            [['Name_academic_direction'], 'string', 'max' => 50],
            [['ID_departments'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::className(), 'targetAttribute' => ['ID_departments' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [

            'ID_departments' => 'Название кафедры',
            'Name_academic_direction' => 'Название учебного направления',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasOne(Departments::className(), ['ID' => 'ID_departments']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnregisteredApplicants()
    {
        return $this->hasMany(UnregisteredApplicant::className(), ['ID_academic_direction' => 'ID']);
    }
}
