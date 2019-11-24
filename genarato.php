



<?php

class Vety {
        private $a1 = array("Franta", "Adam", "Jirka", "Michal", "Petr", "Jindra", "Eva", "Katka", "Isabela", "Kristina");
        private $a2 = array("šel", "jel", "skočil", "plaval", "mluvil", "jezdil", "kopal", "deklaroval", "zahajoval", "spěšchal");
        private $a3 = array("do kina", "do obchodu", "na koupaliště", "do školy", "na kole", "do míče", "porměnou", "zápas", "na bruslích");
        private $a4 = array("kdy", "jak", "proč", "za kolik", "v kolik", "s kým", "pro koho");

        private $veta;
        private $tecka;

        function __construct() {
                $this->v = array(
                        array($this->a1, $this->a2, $this->a3, "."),
                        array($this->a2, $this->a1, $this->a3, "?"),
                        array($this->a4, $this->a2, $this->a1, $this->a3, "?"),
                        );
                $this->vyber($this->v[rand(0, sizeof($this->v)-1)]);
        }

        function vyber($typ) {
                $this->veta = array();
                $this->tecka = array_pop($typ);
                foreach ($typ as $slovnik) {
                        $this->veta[] = $slovnik[rand(0, sizeof($slovnik) - 1)];
                }
        }

        function __toString() {
                return implode(' ', $this->veta) . $this->tecka;
        }
}

$veta = new Vety();
echo $veta;



