<?php

class RandomBomboTest extends PHPUnit_Framework_TestCase {

    public function testGivenRandomBomboShouldGetNumber(){
        $bombo = new RandomBomboOf90();
        $this->assertInternalType("int", $bombo->getNumber());
    }

    public function testGivenRandomBomboShouldGetNumberBetweenOneAndNinety(){
        $bombo = new RandomBomboOf90();
        $this->assertGreaterThan(0, $bombo->getNumber());
        $this->assertLessThanOrEqual(90, $bombo->getNumber());
    }
    public function testG(){
        $bombo = new RandomBomboOf90();
        $generatedNumbers = array();
        $number = $bombo->getNumber();
        for ($i = 0; $i < 90; $i++){
            $generatedNumbers[] = $number;
            $number++;
        }
        $this->assertCount(90,array_unique($generatedNumbers));
    }





}