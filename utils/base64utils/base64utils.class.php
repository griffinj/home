<?php

class base64utils {

/**
 * @author Jim Griffin - jim.griffin@gmail.com
 * @copyright 2013
 */


    public function __construct() {
        
    }
    
    /**
     * public function encode($target)
     * returns a base64 encoded string
     */
    public function encode($target) {
        return base64_encode($target);
    }
    
    /**
     * public function decode($target) 
     * returns a decoded string or serialized array
     */
    public function decode($target) {
        return base64_decode($target);
    }

}
?>
