<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new User();
        $user->name = 'test123';
        $user->password = '123456';
        $user->email = 'test@test12.com';
        $this->assertTrue($user->save());
    }
    public function testUpdateUser()
    {
        $user = User::Find(1);
        $user->name = 'Steve Smith';
        $this->assertTrue($user->save());


    }

    public function testDeleteUser()
    {
        User::where('password','123456')->delete();
        $this->assertDatabaseMissing('users', ['password','123456']);

    }
    public function testUserCount()
    {

        $user = User::All();
        $count = $user->count();
        $this->assertEquals(50, $count);
    }

}
