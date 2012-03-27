<?php
/**
 * Description of UserRepositoryTest
 *
 * @author varman
 */
class EntityManagerTest extends CI_Controller {
    //put your code here
    private $em;
    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->em;
    }
    
    public function index($testCase) {
        switch($testCase) {
            case 'validateEntityManagerTest':
                $this->validateEntityManagerTest();
                echo $this->unit->report();
                break;
            case 'all':
                $this->validateEntityManagerTest();
                echo $this->unit->report();
                break;
            default:
                echo INVALID_TEST_CASE;
        }
    }
    public function validateEntityManagerTest() {
        $this->unit->run(!null, $this->em, 'Test entity manager', 'Create new instance of entity manager');    
    }
}
