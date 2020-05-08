<?php


namespace App\Models;

/**
 * @Entity @Table(name="users")
 */
class User extends Model
{

    /**
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @name @Column(type="string")
     */
    protected $login;

    /**
     * @name @Column(type="string")
     */
    protected $email;

    /**
     * @name @Column(type="text")
     */
    protected $password;

    /**
     * @name @Column(type="text", nullable=true)
     */
    protected $remember_token;

    /**
     * @name @Column(type="string", nullable=true)
     */
    protected $remember_identifier;


}