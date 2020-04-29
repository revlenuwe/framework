<?php


namespace App\Models;

/**
 * @Entity @Table(name="users")
 */
class User extends Model
{

    /**
     * @GeneratedVelue(strategy="AUTO")
     * @Id @Column(name="id", type="integer", nullable=false)
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
     * @name @Column(type="text")
     */
    protected $remember_token;

    /**
     * @name @Column(type="string")
     */
    protected $remember_identifier;



}