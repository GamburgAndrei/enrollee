<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 18.05.2018
 * Time: 6:57
 */

namespace app\models;


class UserIdentity extends User implements \yii\web\IdentityInterface
{


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($ID)
    {
        return static ::findOne($ID);
    }
    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
       return static ::findOne(['access_token'=>$token]);
    }
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($email)
    {
        return static ::findOne(['email'=>$email]);
    }
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->ID;
    }
    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

}