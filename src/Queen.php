<?php
    class Queen
    {
        private $coordinates;
        private $x_axis = array();
        private $y_axis = array();

        function __construct()
        {
            for ($y = 1; $y <= 8; $y++) {
                array_push($this->y_axis, $y);
            }

            $this->x_axis = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');
        }

        function setCoordinates($new_coordinates)
        {
            $this->coordinates = $new_coordinates;
        }

        function canAttack($opposing_coordinates)
        {
            // Horiz or vertical
            if ($opposing_coordinates[0] == $this->coordinates[0]) {
                return true;
            } elseif ($opposing_coordinates[1] == $this->coordinates[1]) {
                return true;
            }

            return $this->onDiagonal($opposing_coordinates, -1, 1);

        }


        function onDiagonal($opposing_coordinates, $x_delta, $y_delta)
        {
            $attack_coordinates = $this->coordinates;
            $x_index = array_search($attack_coordinates[0], $this->x_axis);
            $y_index = array_search($attack_coordinates[1], $this->y_axis);
            if ($x_index === false || $y_index === false) {
                return false;
            }

            $x_index_opposing = array_search($opposing_coordinates[0], $this->x_axis);
            $y_index_opposing = array_search($opposing_coordinates[1], $this->y_axis);
            if ($x_index_opposing === false || $y_index_opposing === false) {
                return false;
            }

            $inbounds = true;
            do {
                // Move to next diagonal space
                $x_index += $x_delta;
                $y_index += $y_delta;

                // Still in bounds
                if ($x_index >= 0 && $x_index < count($this->x_axis) && $y_index >= 0 && $y_index < count($this->y_axis)) {
                    if ($x_index == $x_index_opposing && $y_index == $y_index_opposing) {
                        return true;
                    }
                } else {
                    $inbounds = false;
                }
            } while ($inbounds);

            return false;
        }
    }
 ?>
