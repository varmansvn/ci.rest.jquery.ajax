<?php
namespace Entities;

/**
 * Entities\User
 *
 * @Table(name="user")
 * @Entity(repositoryClass="Repositories\UserRepository")
 */
class User
{
    /**
     * @var integer $idUser
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string $userName
     *
     * @Column(name="name", type="string", length=32, nullable=false)
     */
    private $userName;
    
    /**
     * Get idUser
     *
     * @return integer $idUser
     */
    public function getIdProduct()
    {
        return $this->idUser;
    }

      /**
     * Set userName
     *
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * Get userName
     *
     * @return string $userName
     */
    public function getUserName()
    {
        return $this->userName;
    }
}