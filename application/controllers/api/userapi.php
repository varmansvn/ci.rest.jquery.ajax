<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author varman
 */
require APPPATH.'/libraries/REST_Controller.php';
require APPPATH.'/models/Business/UserBusiness.php';
        
class UserApi extends REST_Controller {
    //put your code here
    private $userBusiness;
    
    public function __construct(){
        parent::__construct();
        $this->userBusiness = new UserBusiness();
    }
    
    public function users_get() {       
        $userList = array();
        $rtnCode = $this->userBusiness->getUserList($userList);        
        if(STATUS_SUCCESS != $rtnCode) {
           $this->response(array('error' => 'Couldn\'t find any users!'), 404);
           return $rtnCode;
        }
        $users = array(
			array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com'),
			array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com'),
			3 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => array('hobbies' => array('fartings', 'bikes'))),
		);
        
        //var_dump($userList);
      
        $this->response($userList, 200);
    }
}

?>