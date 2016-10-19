<?php


namespace app\controllers;

class AnamaiController extends \yii\web\Controller{

public function actionFirst() {
    $a=3;
    $b=5;
    $c=$a*$b;

        return $this->render('first',['title'=>$c]);
           
}

}