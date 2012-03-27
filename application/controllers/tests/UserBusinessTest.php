<?php
/**
 * Description of UserBusinessTest
 *
 * @author varman
 */
require_once APPPATH.'/models/Business/UserBusiness.php';

class UserBusinessTest extends CI_Controller{
    private $userBusiness;
    public function __construct(){
        parent::__construct();
        $this->userBusiness = new UserBusiness();
    }
    
    public function index($testCase) {
        switch($testCase){
            case 'validateUserBusinessTest':
                $this->validateUserBusinessTest();
                echo $this->unit->report();
                break;
            case 'validateUserTest':
                $this->validateUserTest();
                echo $this->unit->report();
                break;
            case 'all':
                $this->validateUserBusinessTest();
                $this->validateUserTest();
                echo $this->unit->report();
                break;
            default:
                echo INVALID_TEST_CASE;
        }
    }
    
    public function validateUserBusinessTest(){
        $this->unit->run(!null, $this->userBusiness, 
                'Validate User Business Test', 
                'validate user business is null or not');
    }
    
    public function validateUserTest(){
        $email       = 'ddddd@gmail.com';
        $keyPassword = md5('ddddd');
        $rntCode = $this->userBusiness->validateUser($email, $keyPassword, $user);
        $this->unit->run(STATUS_SUCCESS, $rntCode, 'Validate User Test', 
                'validate user by giving email and key password');
    }
}
