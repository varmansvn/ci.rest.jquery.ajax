<?php
/**
 * Description of UserSecurityTest
 *
 * @author varman
 */
class UserSecurityRepositoryTest extends CI_Controller{
    private $repo;
    public function __construct() {
        parent::__construct();
        $em = $this->doctrine->em;
        $this->repo = $em->getRepository('Entities\UserSecurity');
    }    
    public function index($testCase) {
        switch($testCase) {
            case 'findSaltByUserTest':
                $this->findSaltByUserTest();
                echo $this->unit->report();
                break;
            case 'all':
                $this->findSaltByUserTest();
                echo $this->unit->report();
                break;
            default:
                echo INVALID_TEST_CASE;
        }
    }
    
    public function findSaltByUserTest() {
        $userId = 2;
        //$salt = '819e6cc5576a7b3c6ffb61db871ce9d5';
        $rntCode = $this->repo->findSaltByUser($userId, $calculatedSalt);
        $this->unit->run(STATUS_SUCCESS, $rtnCode, 'Find Salt By User Test', 'test calculating salt');
    }
}

?>
