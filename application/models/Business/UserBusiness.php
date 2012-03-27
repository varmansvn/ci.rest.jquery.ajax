<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'Business.php';

/**
 * Description of UserBusiness
 *
 * @author varman
 */
class UserBusiness extends Business {
    private $userRepo;
   
    public function __construct(){
       $em = $this->doctrine->em;
      
       $this->userRepo = $em->getRepository('Entities\User');
       if(null == $this->userRepo) {
           log_message('error', __METHOD__.','.__LINE__.','
                   .ERROR_INVALID_USER_REPO.', invalid user repository');
           exit();
       }
    }
    
    public function getUserList(&$userList) {
       
       // get user list
       $rtnCode = $this->userRepo->findAll($userList);
       if(STATUS_SUCCESS != $rtnCode){
           return $rtnCode;
       }
       return STATUS_SUCCESS;
       
    }
}