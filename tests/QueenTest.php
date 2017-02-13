<?php
require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {

        function test_canAttack_coordinate_list()
        {
            $test_list = array(
                array(array('e', 4), array('h', 2), false),
                array(array('e', 4), array('e', 8), true)
            );

            $test_Queen = new Queen;

            foreach ($test_list as $test) {
                //Arrange
                $test_Queen->setCoordinates($test[0]);
                $opposing_coordinates = $test[1];
                $expected_result = $test[2];

                //Act
                $result = $test_Queen->canAttack($opposing_coordinates);

                //Assert
                $this->AssertEquals($expected_result, $result);
            }
        }
    }
 ?>
