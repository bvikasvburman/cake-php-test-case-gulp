<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

use Cake\Auth\DefaultPasswordHasher;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users'
    ];

    public function testLoginOk(){

        $hasher = new DefaultPasswordHasher();

        $this->post( '/users/login', [
                'email' => 'bvikasvburman@gmail.com'
                , 'password' => '123456'
            ]);


        $email[] = $this->_requestSession->read( 'SESSION_EMAIL' );

        $expect  = "bvikasvburman@gmail.com";

        $this->assertContains( $expect, $email);

    }
}
