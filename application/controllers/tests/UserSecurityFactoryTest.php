<?php

require_once APPPATH.'security/UserSecurityFactory.php';

/**
 * Description of UserSecurityFactoryTest
 *
 * @author varman
 */

class UserSecurityFactoryTest extends CI_Controller {
    
    public function index($testCase) {
        switch ($testCase) {
            case 'calculateSaltTest': 
                $this->calculateSaltTest();
                echo $this->unit->report();
                break;
            case 'calculateUserPasswordTest':
                $this->calculateUserPasswordTest();
                echo $this->unit->report();
                break;
            case 'all':
                $this->calculateSaltTest();
                $this->calculateUserPasswordTest();
                echo $this->unit->report();
                break;
            default:
                echo INVALID_TEST_CASE;
        }
    }
    
    public function calculateSaltTest(){
        $userId = 1;
        $cur_time = '2012-01-01 0:0:0';
        $salt = 'a27f87548518a3d704f40c768b9db5d7';
        $calculatedSalt = UserSecurityFactory::calculateSalt($userId, $cur_time);
        $this->unit->run($calculatedSalt, $salt, 'Calculate Salt Test', 'Test calculating salt from md5');
    }
    
    public function calculateUserPasswordTest() {
        $keyPassword = md5('bbbbb');
        $salt = '00a42e3d9192e57c6b14c7a4fd062c27';
        $userPassword = '8a99b36b194668b3c5a3bada18ef6040';
        $calculatedUserPassword = UserSecurityFactory::calculateUserPassword($salt, $keyPassword);
        $this->unit->run($calculatedUserPassword, $userPassword, 
                'Calculate User Password Test', 
                'test calculate user password based on salt and key password');
    }
}

?>
