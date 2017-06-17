<h1>
    Decorator
</h1>
<p>
    El patrón Decorator responde a la necesidad de añadir dinámicamente funcionalidad a un Objeto. Esto nos permite no tener que crear sucesivas clases que hereden de la primera incorporando la nueva funcionalidad, sino otras que la implementan y se asocian a la primera.
</p>
<hr>
<h3>
    Participantes
</h3>
<p>
    <strong>Componente</strong>
    Deﬁne la interfaz para los objetos que pueden tener responsabilidades añadidas.
</p>
<p>
    <strong>Componente Concreto</strong>
    Deﬁne un objeto al cual se le pueden agregar responsabilidades adicionales.
</p>
<p>
    <strong>Decorador</strong>
    Mantiene una referencia al componente asociado. Implementa la interfaz de la superclase Componente delegando en el componente asociado.
</p>
<p>
    <strong>Decorador Concreto</strong>
    Añade responsabilidades al componente.
</p>
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Decorator_UML_class_diagram.svg/960px-Decorator_UML_class_diagram.svg.png">
<hr>
<h3>
    Ejemplo PHP
</h3>
```php
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

```
<hr>
<small>The Ultimate Guide To Become a Code Ninja - By Cache</small>
