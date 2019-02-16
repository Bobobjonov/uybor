<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property int $id
 * @property int $category_id
 * @property int $davlat_id
 * @property int $viloyat_id
 * @property int $tuman_id
 * @property string $name
 * @property string $cost
 * @property string $full_ground
 * @property string $live_ground
 * @property int $room_id
 * @property int $floor_id
 * @property int $full_floor
 * @property string $build_product
 * @property string $status_home
 * @property string $description
 * @property int $tell
 * @property int $video_cam
 * @property int $cable
 * @property int $tv
 * @property int $muzlatgich
 * @property int $candinsaner
 * @property string $fio
 * @property string $m_tel
 * @property string $m_email
 * @property string $image
 *
 * @property Category $category
 * @property Davlat $davlat
 * @property Tuman $tuman
 * @property Viloyat $viloyat
 */
class Home extends \yii\db\ActiveRecord
{
    public $rasm;
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'davlat_id', 'viloyat_id', 'tuman_id', 'name', 'cost', 'live_ground', 'room_id', 'build_product', 'status_home', 'description', 'tell', 'video_cam', 'cable', 'tv', 'muzlatgich', 'candinsaner', 'fio', 'm_tel', 'm_email'], 'required'],
            [['category_id', 'davlat_id', 'viloyat_id', 'tuman_id', 'room_id', 'floor_id', 'full_floor', 'tell', 'video_cam', 'cable', 'tv', 'muzlatgich', 'candinsaner'], 'integer'],
            [['description'], 'string'],
            [['name', 'cost', 'full_ground', 'live_ground', 'build_product', 'status_home', 'fio', 'm_tel', 'm_email', 'image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['davlat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Davlat::className(), 'targetAttribute' => ['davlat_id' => 'id']],
            [['tuman_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tuman::className(), 'targetAttribute' => ['tuman_id' => 'id']],
            [['viloyat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Viloyat::className(), 'targetAttribute' => ['viloyat_id' => 'id']],
            [['image'],'file','extensions'=>['jpeg','jpg','png','gif']]
            ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'davlat_id' => 'Davlat ID',
            'viloyat_id' => 'Viloyat ID',
            'tuman_id' => 'Tuman ID',
            'name' => 'Name',
            'cost' => 'Cost',
            'full_ground' => 'Full Ground',
            'live_ground' => 'Live Ground',
            'room_id' => 'Room ID',
            'floor_id' => 'Floor ID',
            'full_floor' => 'Full Floor',
            'build_product' => 'Build Product',
            'status_home' => 'Status Home',
            'description' => 'Description',
            'tell' => 'Tell',
            'video_cam' => 'Video Cam',
            'cable' => 'Cable',
            'tv' => 'Tv',
            'muzlatgich' => 'Muzlatgich',
            'candinsaner' => 'Candinsaner',
            'fio' => 'Fio',
            'm_tel' => 'M Tel',
            'm_email' => 'M Email',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDavlat()
    {
        return $this->hasOne(Davlat::className(), ['id' => 'davlat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTuman()
    {
        return $this->hasOne(Tuman::className(), ['id' => 'tuman_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getViloyat()
    {
        return $this->hasOne(Viloyat::className(), ['id' => 'viloyat_id']);
    }
}
