<?php

namespace app\modules\Admin\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $ID
 * @property int $ID_faculties
 * @property string $Name_departments
 *
 * @property AcademicDirection[] $academicDirections
 * @property Faculties $faculties
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_faculties', 'Name_departments'], 'required'],
            [['ID_faculties'], 'integer'],
            [['Name_departments'], 'string', 'max' => 50],
            [['ID_faculties'], 'exist', 'skipOnError' => true, 'targetClass' => Faculties::className(), 'targetAttribute' => ['ID_faculties' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [

            'ID_faculties' => 'Факультет',
            'Name_departments' => 'Нащвание кафедры',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcademicDirections()
    {
        return $this->hasMany(AcademicDirection::className(), ['ID_departments' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaculties()
    {
        return $this->hasOne(Faculties::className(), ['ID' => 'ID_faculties']);
    }
}
