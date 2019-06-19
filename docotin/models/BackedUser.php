<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $email
 */
class backedUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    // private $id_user;
    // private $username;
    // private $password;
    // private $email;
    private $auth_key;
    // private $id_grup;
    // private $token;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email','password','id_grup'], 'required'],
            [['username', 'email'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */

    // public static function getDb()
    //     {
    //         return Yii::$app->db;  
    //     }

    public static function findIdentity($id){
        return self::findOne($id);
    }

    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }

    public function getId(){
        return $this->getAttribute('id_user');
    }

    public static function findIdentityByAccessToken($token, $type=null){
        return self::findOne(['accessToken'=>$token]);
    }

     public function getAuthKey(){
        return $this->auth_key;
    }

    public function validateAuthKey($authKey){
        return $this->auth_key === $authKey;
    }

    public function validatePassword($password){
          return md5($password)===$this->getAttribute('password');
    }

    public function getId_group(){
        return $this->id_grup;
    }

    public function beforeSave($insert){
    if (!parent::beforeSave($insert)) {
        return false;
    }
    $this->setAttribute('password',md5($this->password));
    return true;
    }
    public function attributeLabels()
    {
        return [
            'id_user' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }

    public function getGrup(){
    return $this->hasOne(Grup::className(),['id'=>'id_grup']);
    }

    public function getAtt(){
        return "ADADASDADA";
    }
}
