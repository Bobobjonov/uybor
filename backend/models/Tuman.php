<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tuman".
 *
 * @property int $id
 * @property string $name
 *
 * @property Home[] $homes
 */
class Tuman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tuman';
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
        return $this->hasMany(Home::className(), ['tuman_id' => 'id']);
    }
}
