<?php
    class Team {
        private $name = "";
        private $players = [];
        private $matches = 0;
        private $won = 0;
        private $lost = 0;
        private $tie = 0;
        private $scoreGoals = 0;
        private $concededGoals = 0;
    
        public function __construct($name, $players) {
            $this->name = $name;
            $this->players = $players;
        }
    
        public function setName($newName) {
            $this->name = $newName;
        }
    
        public function setMatches($newMatches) {
            $this->matches = $newMatches;
        }
    
        public function setWon($newWon) {
            $this->won = $newWon;
        }
    
        public function setLost($newLost) {
            $this->lost = $newLost;
        }
    
        public function setTie($newTie) {
            $this->tie = $newTie;
        }
    
        public function setScoreGoals($newScoreGoals) {
            $this->scoreGoals = $newScoreGoals;
        }
    
        public function setConcededGoals($newConcededGoals) {
            $this->concededGoals = $newConcededGoals;
        }
    
        public function getName() {
            return $this->name;
        }
    
        public function getPlayers() {
            return $this->players;
        }
    
        public function getMatches() {
            return $this->matches;
        }
    
        public function getWon() {
            return $this->won;
        }
    
        public function getLost() {
            return $this->lost;
        }
    
        public function getTie() {
            return $this->tie;
        }
    
        public function getScoreGoals() {
            return $this->scoreGoals;
        }
    
        public function getConcededGoals() {
            return $this->concededGoals;
        }
    
        public function signPlayer(Player $player) {
            // Si el jugador no está en el array lo añadimos
            if (!in_array($player, $this->players, true)) {
                $this->players[] = $player;
            }
        }
    
        public function render() {
            echo "<p>Team: " . $this->name . "</p>";
            echo "<p>Matches: " . $this->matches . "</p>";
            echo "<p>Won: " . $this->won . "</p>";
            echo "<p>Lost: " . $this->lost . "</p>";
            echo "<p>Tie: " . $this->tie . "</p>";
            echo "<p>Score Goals: " . $this->scoreGoals . "</p>";
            echo "<p>Conceded Goals: " . $this->concededGoals . "</p>";
            echo "<p>Players:</p>";
        
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Edad</th>";
            echo "<th>País</th>";
            echo "<th>Dorsal</th>";
            echo "<th>Posición</th>";
            echo "<th>Goles</th>";
            echo "<th>Partidos</th>";
            echo "<th>Minutos</th>";
            echo "<th>Amarillas</th>";
            echo "<th>Rojas</th>";
            echo "</tr>";
            echo "</thead>";
        
            echo "<tbody>";
            $this->renderPlayers();
            echo "</tbody>";
        
            echo "</table>";
        }
        
        public function renderPlayers() {
            foreach ($this->players as $player) {
                $player->render();
            }
        }
    }
?>