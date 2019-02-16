<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viloyat".
 *
 * @property int $id
 * @property string $name
 *
 * @property Home[] $homes
 */
class Viloyat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'viloyat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHomes()
    {
        return $this->hasMany(Home::className(), ['viloyat_id' => 'id']);
    }
}
