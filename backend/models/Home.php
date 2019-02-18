<?php

namespace backend\models;

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
            [['category_id', 'country_id', 'region_id', 'district_id', 'name', 'cost', 'live_ground', 'room_id', 'build_product', 'status_home', 'description', 'tell', 'video_cam', 'cable', 'tv', 'muzlatgich', 'candinsaner', 'fio', 'm_tel', 'm_email'], 'required'],
            [['category_id', 'country_id', 'region_id', 'district_id', 'room_id', 'floor_id', 'full_floor', 'tell', 'video_cam', 'cable', 'tv', 'muzlatgich', 'candinsaner'], 'integer'],
            [['description'], 'string'],
            [['name', 'cost', 'full_ground', 'live_ground', 'build_product', 'status_home', 'fio', 'm_tel', 'm_email', 'image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
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
            'country_id' => 'Country ID',
            'region_id' => 'Region ID',
            'district_id' => 'District ID',
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
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }
}
