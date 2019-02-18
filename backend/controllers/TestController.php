<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;


class TestController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionUpload()
    {
        $fileName = 'file';
        $uploadPath = 'uploads';

        if (isset($_FILES[$fileName])) {
            $file = \yii\web\UploadedFile::getInstanceByName($fileName);

            //Print file data
            //print_r($file);

            if ($file->saveAs($uploadPath . '/' . $file->name)) {
                //Now save file data to database

                echo \yii\helpers\Json::encode($file);
            }
            else{
                return $this->render('upload');
            }
        }

        return false;
    }
}

?>