<?php
class hash {
/**
 * class hash() - accepts a string and optional salt to create an md5 hash of the string
 * Author: Jim Griffin - jim.griffin@gmail.com
 *
 */

	/**
	 *  @public function __contruct()
	 *	$stringToHash @string - required parameter to be encrypted
	 *  $salt @string - optional parameter to use as the hash salt to prevent decryption
	 *  This function creates the hash
	 */

	public function __construct($stringToHash, $salt = 'aBcDeFgHiJkLmNoPqRsTuVwXyZ987123654') {
		$this->hashed = md5($salt . $stringToHash);
		return $this->hashed;
	}
	
	/**
	 *  @public function getHash()
	 *  This function returns the string of the hash
	 */
	 
	public function getHash() {
		return $this->hashed;
	}	
}
?>
