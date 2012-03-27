<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository {
   
   public function findAll(&$userList) {
       
       $em = $this->getEntityManager();
       if(null == $em) {
           log_message('error',__METHOD__.'::'
                   .__LINE__.','.'invalid entity manager returned');
           return ERROR_INVALID_ENTITY_MANAGER;
       }
       $dql = "SELECT U FROM Entities\User U";
       if(null == ($query =  $em->createQuery($dql))){
           log_message('error',__METHOD__.'::'
                   .__LINE__.','.'invalid query returned');
           return ERROR_CREATE_QUERY;
       }
       $userList = $query->getArrayResult();
       if(null == $userList){
           log_message('error',__METHOD__.'::'
                   .__LINE__.','.'error on retrieving user list');
           return ERROR_INVALID_USERLIST;
       }
       
       return STATUS_SUCCESS;
   }
}