<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        $username = $this->username;
        $password = $this->password;

        $user = User::model()->find(array('condition' => "email='$username' && password='$password'"));

        if (empty($user)){
            $this->errorCode = self::ERROR_USERNAME_INVALID;

        }
        elseif (!$password == $user->password){
            $this->errorCode = self::ERROR_PASSWORD_INVALID;

        }
        else{
            $this->setState('name', $user->name);
            $this->setState('id', $user->id);
            $this->setState('user_type', $user->user_type);
            $this->setState('email', $user->email);

            Yii::app()->user->setState('isAdmin', false);
            Yii::app()->user->setState('isAgent', false);
            Yii::app()->user->setState('isClient', false);
            if($user->user_type == 'admin') Yii::app()->user->setState('isAdmin', true);
            elseif($user->user_type == 'agent') Yii::app()->user->setState('isAgent', true);
            elseif($user->user_type == 'client') {
                Yii::app()->user->setState('isClient', true);
                Yii::app()->user->setState('boss', $user->boss);
            }


            $this->errorCode = self::ERROR_NONE;
        }

        return !$this->errorCode;
	}
}