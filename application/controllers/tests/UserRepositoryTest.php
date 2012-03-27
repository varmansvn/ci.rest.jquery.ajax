<?php

/**
 *
 * @author varman
 */
class UserRepositoryTest extends CI_Controller {
    private $repo;
    public function __construct() {
        parent::__construct();
        $em = $this->doctrine->em;
        $this->repo = $em->getRepository('Entities\User');
    }
    
    public function index($testCase){
        switch($testCase) {
            case 'validateRepository':
                $this->validateRepositoryTest();
                echo $this->unit->report();
                break;
            case 'findUserByEmailTest':
                $this->findUserByEmailTest();
                echo $this->unit->report();
                break;
            case 'findAllTest':
                $this->findAllTest();
                echo $this->unit->report();
                break;
            case 'all':
                $this->validateRepositoryTest();
                $this->findUserByEmailTest();
                $this->findAllTest();
                echo $this->unit->report();
                break;
            default:
                echo INVALID_TEST_CASE;
        }
    }
    /*
     *  to check whether the user repository class does exist or not
     */
    public function validateRepositoryTest() {
        $this->unit->run(!null, $this->repo, 
                'Existence of user repository class', 
                'Test user repository class exist or not');
    }
    
    /*
     * find password from email
     */
    public function findUserByEmailTest() {
        $email = 'hhhhh@gmail.com';
        $this->repo->findUserByEmail($email, $user);
        $this->unit->run(!null, $user, 'User Email Test', 
                'input email, get user object');
    }
    
    /*
     * find all test
     */
    public function findAllTest(){
        
    }
}

?>
