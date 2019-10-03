<?php
namespace app\module;

use Yii;

/**

 */
class Module 
{
    
    
public function behaviors(){
    return [
        'access' => [
            'class' => \yii\filters\AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ],
    ];
}
}
