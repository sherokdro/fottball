<?php

/**
 * Created by PhpStorm.
 * User: Graham
 * Date: 21/04/2016
 * Time: 23:27
 */
namespace Itb;

/**
 * Class ProjectTest
 * Test code in classes in src file
 * @package Itb
 */
require_once ('PHPUnit/Framework/TestCase.php');
class ProjectTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test Team class
     */

    public function testSetAndGetTeam()
    {
        // Arrange
        $t = new Team();
        $t->setName('DublinFC');
        $expectedResult = 'DublinFC';

        // Act
        $result = $t->getName();

        // Assert
        $this->assertEquals($expectedResult, $result);

    }

    public function testSetAndGetCaptain()
    {
        // Arrange
        $t = new Team();
        $t->setCaptain('shiar');
        $expectedResult = 'shiar';

        // Act
        $result = $t->getCaptain();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetAndGetNumber()
    {
        // Arrange
        $t = new Team();
        $t->setContactNumber('0852116336');
        $expectedResult = '0852116336';

        // Act
        $result = $t->getContactNumber();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetAndGetID()
    {
        // Arrange
        $t = new Team();
        $t->setId(10);
        $expectedResult = 10;

        // Act
        $result = $t->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * test Time class
     */

    public function testSetAndGetTime()
    {
        $t = new Time();
        $t->setTime('10pm');
        $expectedResult = '10pm';

        $result = $t->getTime();

        $this->assertEquals($expectedResult, $result);
    }

    public function testSetAndGetVenue()
    {
        $t = new Time();
        $t->setVenue('Rathmines');
        $expectedResult = 'Rathmines';

        $result = $t->getVenue();

        $this->assertEquals($expectedResult, $result);
    }

    public function testSetAndGetPrice()
    {
        $t = new Time();
        $t->setPrice('15');
        $expectedResult = '15';

        $result = $t->getPrice();

        $this->assertEquals($expectedResult, $result);
    }


    /**
     * test User class
     */

    public function testSetAndGetIdinUser()
    {
        $t = new User();
        $t->setId(25);
        $expectedResult = 25;

        $result = $t->getId();

        $this->assertEquals($expectedResult, $result);
    }

    public function testSetAndGetUsername()
    {
        $t = new User();
        $t->setUsername('graham');
        $expectedResult = 'graham';

        $result = $t->getUsername();

        $this->assertEquals($expectedResult, $result);
    }
/*
    public function testSetAndGetPassword()
    {
        $t = new User();
        $word = 'Hello';
        $t->setPassword($word);

        $hashedPassword = password_hash($word, PASSWORD_DEFAULT);
        $expectedResult = $hashedPassword;

        $result = $t->getPassword();

        $this->assertEquals($expectedResult, $result);
    }
*/
    public function testSetAndGetUserRole()
    {
        $t = new User();
        $t->setRole('ROLE_USER');
        $expectedResult = 'ROLE_USER';

        $result = $t->getRole();

        $this->assertEquals($expectedResult, $result);
    }

}