<?php
/**
 * Created by PhpStorm.
 * User: Hunted
 * Date: 12.05.2018
 * Time: 7:08
 */

namespace app\controllers;


use yii\web\Controller;

class CustomController extends Controller
{
    /**
     * Заплняем титл и тд.
     * @param null $title
     * @param null $keywords
     * @param null $description
     */
protected function setMeta ($title=null,$keywords=null, $description=null)
    {
    $this->view->title=$title; //Возвращаем title на страницу
    $this->view->registerMetaTag(['name'=>'keywords', 'content'=>$keywords]); //возвращаем keywords
    $this->view->registerMetaTag(['name'=>'description', 'content'=>$description]); //возвращаем description
    }
}