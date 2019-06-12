<?php
/**
 * Created by PhpStorm.
 * User: Konst
 * Date: 09.06.2019
 * Time: 21:30
 */

namespace app\controllers;


use yii\web\Controller;

class TeacherController extends Controller
{
    public function actionStudent($name) {
        return $this->render('student', ['nameInView'=>$name]);
    }
}