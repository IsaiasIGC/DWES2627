<?php
    class Player {
        private $name = "";
        private $birthday = "";
        private $country = "";
        private $dorsal = 0;
        private $position = "";
        private $goals = 0;
        private $matches = 0;
        private $minutes = 0;
        private $yellowCard = 0;
        private $redCard = 0;

        public function __construct($name, $birthday, $country) {
            $this->name = $name;
            $this->birthday = $birthday;
            $this->country = $country;
        }

        public function setName($newName) {
            $this->name = $newName;
        }

        public function setBirthday($newBirthday) {
            $this->birthday = $newBirthday;
        }

        public function setCountry($newCountry) {
            $this->country = $newCountry;
        }

        public function setDorsal($newDorsal) {
            $this->dorsal = $newDorsal;
        }

        public function setPosition($newPosition) {
            $this->position = $newPosition;
        }

        public function setGoals($newGoals) {
            $this->goals = $newGoals;
        }

        public function setMatches($newMatches) {
            $this->matches = $newMatches;
        }

        public function setMinutes($newMinutes) {
            $this->minutes = $newMinutes;
        }

        public function setYellowCard($newYellowCard) {
            $this->yellowCard = $newYellowCard;
        }

        public function setRedCard($newRedCard) {
            $this->redCard = $newRedCard;
        }

        public function getName() {
            return $this->name;
        }

        public function getBirthday() {
            return $this->birthday;
        }

        public function getCountry() {
            return $this->country;
        }

        public function getDorsal() {
            return $this->dorsal;
        }

        public function getPosition() {
            return $this->position;
        }

        public function getGoals() {
            return $this->goals;
        }

        public function getMatches() {
            return $this->matches;
        }

        public function getMinutes() {
            return $this->minutes;
        }

        public function getYellowCard() {
            return $this->yellowCard;
        }

        public function getRedCard() {
            return $this->redCard;
        }

        public function age() {
            $fechaNacimiento = new DateTime($this->birthday);
            $fechaActual = new DateTime();
            
            $diferencia = $fechaNacimiento->diff($fechaActual);

            return $diferencia->y;
        }

        public function score() {
            $this->goals += 1;
        }

        public function addCard(int $colour) {
            // Si es 1 (amarilla), si no, roja
            if ($colour == 1) {
                $this->yellowCard += 1;
            } else {
                $this->redCard += 1;
            }
        }

        public function playMinutes(int $min) {
            if ($min > 0) {
                $this->minutes += $min;
            }
        }

        public function render() {
            echo "<tr>";
            echo "<td>" . $this->name . "</td>";
            echo "<td>" . $this->age() . "</td>";
            echo "<td>" . $this->country . "</td>";
            echo "<td>" . $this->dorsal . "</td>";
            echo "<td>" . $this->position . "</td>";
            echo "<td>" . $this->goals . "</td>";
            echo "<td>" . $this->matches . "</td>";
            echo "<td>" . $this->minutes . "</td>";
            echo "<td>" . $this->yellowCard . "</td>";
            echo "<td>" . $this->redCard . "</td>";
            echo "</tr>";
        }
    }
?>