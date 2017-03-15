<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

class PhpController extends  Controller{
    public  function  actionPhp(){
       $name= Yii::$app->request->post("name");
       $pwd= Yii::$app->request->post("pwd");
        //增加
      Yii::$app->db->createCommand()->insert('php', [
          'name' => $name,
          'pwd' => $pwd,
      ])->execute();
        //批增
//        Yii::$app->db->createCommand()->batchInsert('php', ['name', 'pwd'], [
//            ['test01', 30],
//            ['test02', 20],
//            ['test03', 25],
//        ])->execute();
        //删除
        //Yii::$app->db->createCommand()->delete('php', 'id=1')->execute();
    //修改
      //  Yii::$app->db->createCommand()->update('php', ['pwd' => 40], 'id=7')->execute();
//        $arr=Yii::$app->db->createCommand("select * from php")->queryAll();
         return $this->render("php.html");
    }
  public  function  actionFind(){
      $find=Yii::$app->db->createCommand("select * from php")->queryAll();
      return $this->render("find.html",["find"=>$find]);
  }
    public  function  actionDel($id){
        Yii::$app->db->createCommand()->delete("php","id=$id")->execute();
        return $this->render("find.html");
    }
}