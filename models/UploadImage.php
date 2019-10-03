<?php
 
namespace app\models;
 
use yii\base\Model;
use yii\web\UploadedFile;
 
class UploadImage extends Model{
 
    public $images;
 
    public function rules(){
        return[
            [['images'], 'file', 'extensions' => 'png, jpg','maxFiles' => 4],
        ];
    }
 

    
        public function upload(){
            if ($this->validate()) {
                foreach ($this->images as $file) {
                    $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
                }
                return true;
            } else {
                return false;
            }
        }
 
}