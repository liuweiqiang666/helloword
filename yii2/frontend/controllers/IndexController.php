<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use  yii\web\Session;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
header('content-type:text/html;charset=utf-8');
class IndexController extends  Controller{
    public  $layout=false;
    public $enableCsrfValidation = false;
  public  function  actionIndex(){
      return $this->render("index");
  }
    public  function  actionLogin(){
        return $this->render("login");
    }
    public  function  actionLoginlist(){
        $name=Yii::$app->request->post("tel");
        $pwd=Yii::$app->request->post("password");
        if($name==""||$pwd=="")
        {
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
        }else{
            Yii::$app->session->set('user', ['tel' => $name,'password' =>$pwd]);
            $list=Yii::$app->db->createCommand("select * from register where `password`=$pwd and email='$name' OR tel='$name'")->queryAll();
             if($list){
                  return $this->redirect(["index"]);
             }else{
                 echo "<script>alert('账号或密码错误！'); history.go(-1);</script>";
             }
        }
    }
      public  function  actionRegister(){
          return $this->render("register");
      }
    public  function  actionRegisteradd(){
         $arr=Yii::$app->request->post();
        $pwd = $arr['password']?:$arr['pwd'];
        Yii::$app->db->createCommand()->insert("register",[
            "tel"=>$arr['tel'],
            "password"=>$pwd,
           //"type"=>$arr['type'],
            "email"=>$arr['email']
        ])->execute();
         return $this->redirect(['login']);
    }
}