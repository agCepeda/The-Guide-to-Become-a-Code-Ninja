<?php

//Componente
//interfaz común a todas las armas
interface iArma {
    public function ataca();
    public function defiende();
}

//Componente Concreto
//clase que implementa la interfaz
class espada implements iArma {
    private $attack = 20;
    private $armor = 10;

    public function ataca() {
        return $this->attack;
    }

    public function defiende() {
        return $this->armor;
    }
}

//Decorador
//clase abstracta Decorador
abstract class espada_decorator implements iArma {
    protected $_espada;
    public function __construct( iArma $Espada ) {
        $this->_espada = $Espada;
    }
}

//Decoradores concretos
//funcionalidad de mas ataque y defensa
class extra_ataque extends espada_decorator {
    public function ataca() {
        return $this->_espada->ataca()*2;
    }
    public function defiende() {}
}

class extra_defensa extends espada_decorator {
    public function ataca() {}
    public function defiende() {
        return $this->_espada->defiende()+10;
    }
}

//EJEMPLO
//objeto espada con ataque y defensa normal
$espada_base = new espada();
echo "Ataque:" . $espada_base->ataca() . "</br>";
echo "Defensa" . $espada_base->defiende();
echo "</br></br>";

//objeto espada con extra ataque
$espada = new extra_ataque( $espada_base );
echo 'Ataque extra: ' . $espada->ataca() . "</br>";
//objeto espada con extra defensa
$espada = new extra_defensa( $espada_base );
echo 'Defensa extra: ' . $espada->defiende();
