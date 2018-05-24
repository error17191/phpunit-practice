<?php

use PHPUnit\Framework\TestCase;
use App\Models\User;

class SampleTest extends TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new User();
        $user->setFirstName('Mohamed');
        $this->assertEquals($user->getFirstName(), 'Mohamed');
        $user->setFirstName('Ahmed');
        $this->assertEquals($user->getFirstName(), 'Ahmed');
        $user->setFirstName('Wael');
        $this->assertEquals($user->getFirstName(), 'Wael');
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new User();
        $user->setLastName('Mohamed');
        $this->assertEquals($user->getLastName(), 'Mohamed');
        $user->setLastName('Ahmed');
        $this->assertEquals($user->getLastName(), 'Ahmed');
        $user->setLastName('Wael');
        $this->assertEquals($user->getLastName(), 'Wael');
    }

    public function testFullNameReturned()
    {
        $user = new user();
        $user->setFirstName('Mohamed');
        $user->setLastName('Ahmed');

        $this->assertEquals($user->getFullName(), 'Mohamed Ahmed');


        $user = new user();
        $user->setFirstName('Ahmed');
        $user->setLastName('Mohamed');

        $this->assertEquals($user->getFullName(), 'Ahmed Mohamed');



    }

    public function testThatFirstNameAndLastNameAreTrimmed()
    {
        $user = new User();
        $user->setFirstName('  Mohamed   ');

        $this->assertEquals($user->getFirstName() ,'Mohamed');

        $user->setLastName('  Ahmed  ');

        $this->assertEquals($user->getLastName(), 'Ahmed');
    }

    public function testEmailCanBeSetAndGet(){
        $email = 'error17191@gmail.com';

        $user = new User();

        $user->setEmail($email);

        $this->assertEquals($user->getEmail(),$email);

        $email = 'mohamed@mail.com';

        $user = new User();

        $user->setEmail($email);

        $this->assertEquals($user->getEmail(),$email);
    }

}