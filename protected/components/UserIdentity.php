<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends GUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 
	  
	private $_id;
	
	public function getId(){
			return $this->_id;
	}
	public function authenticate()
	{
		$user = User::model()->findByAttributes(array('email'=>$this->email));
		
		if($user===null)//no user found!
			$this->errorCode=self::ERROR_EMAIL_INVALID;
		else if ($user->password !== crypt($this->password,$user->password)){//invalid pass
			
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		//else if($user->id != 0){
			//$this->errorCode=self::ERROR_PASSWORD_INVALID;
		//}
		else {
			$this->_id = $user->id;
			$this->email = $user->email;
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}