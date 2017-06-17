<h2>
    Decorator
</h2>
<p>
    El patrón Decorator responde a la necesidad de añadir dinámicamente funcionalidad a un Objeto. Esto nos permite no tener que crear sucesivas clases que hereden de la primera incorporando la nueva funcionalidad, sino otras que la implementan y se asocian a la primera.
</p>
<h3>
    Participantes
</h3>
<p>
    <strong>Componente</strong>
    Deﬁne la interfaz para los objetos que pueden tener responsabilidades añadidas.

    <strong>Componente Concreto</strong>
    Deﬁne un objeto al cual se le pueden agregar responsabilidades adicionales.

    <strong>Decorador</strong>
    Mantiene una referencia al componente asociado. Implementa la interfaz de la superclase Componente delegando en el componente asociado.

    <strong>Decorador Concreto</strong>
    Añade responsabilidades al componente.
</p>
<img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/FacadeDesignPattern.png">
<hr>
The Ultimate guide to make a Facade by David Warlock
