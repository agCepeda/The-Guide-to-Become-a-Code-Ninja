<?php
interface Estrategia
{
    public function movilizar();
}

class MoverLento implements Estrategia
{
    public function movilizar()
    {
        echo 'Moviendo unidades lento';
    }
}

class MoverNormal implements Estrategia
{
    public function movilizar()
    {
        echo 'Moviendo unidades normal';
    }
}

class MoverRapido implements Estrategia
{
    public function movilizar()
    {
        echo 'Moviendo unidades rápido';
    }
}

abstract class Raza
{
    private $estrategia;

    public function setEstrategia($estrategia)
    {
        $this->estrategia = $estrategia;
    }

    public function moverUnidades()
    {
        $this->estrategia->movilizar();
    }
}

class Zerg extends Raza
{
}

class Terran extends Raza
{
}

class Protoss extends Raza
{
}

$moverLento = new MoverLento;
$moverNormal = new MoverNormal;
$moverRapido = new MoverRapido;

echo "Protoss: ";
$zerg = new Protoss;
$zerg->setEstrategia($moverLento);
$zerg->moverUnidades();

echo "<br>Terran: ";
$zerg = new Terran;
$zerg->setEstrategia($moverNormal);
$zerg->moverUnidades();

echo "<br>Zerg: ";
$zerg = new Zerg;
$zerg->setEstrategia($moverRapido);
$zerg->moverUnidades();

echo "<br>Protoss: Realizando Upgrade a unidades Protoss:";
echo "<br>||||-----";
echo "<br>||||||---";
echo "<br>|||||||||";
echo "<br>Protoss: ";
$zerg->setEstrategia($moverRapido);
$zerg->moverUnidades();
