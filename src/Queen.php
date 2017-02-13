<?php
    class Queen
    {
        private $coordinates;

        function setCoordinates($new_coordinates)
        {
            $this->coordinates = $new_coordinates;
        }

        function canAttack($opposing_coordinates)
        {
            $output = false;
            if ($opposing_coordinates[0] == $this->coordinates[0]) {
                return true;
            } elseif ($opposing_coordinates[1] == $this->coordinates[1]) {
                return true;
            }
            return $output;
        }
    }
 ?>
