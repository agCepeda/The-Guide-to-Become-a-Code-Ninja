# Decorator

El patrón Decorator responde a la necesidad de añadir dinámicamente funcionalidad a un Objeto. Esto nos permite no tener que crear sucesivas clases que hereden de la primera incorporando la nueva funcionalidad, sino otras que la implementan y se asocian a la primera.

### Participantes
**Componente**
Deﬁne la interfaz para los objetos que pueden tener responsabilidades añadidas.
**Componente Concreto**
    Deﬁne un objeto al cual se le pueden agregar responsabilidades adicionales.
**Decorador**
Mantiene una referencia al componente asociado. Implementa la interfaz de la superclase Componente delegando en el componente asociado.
**Decorador Concreto**
Añade responsabilidades al componente.

### Diagrama
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Decorator_UML_class_diagram.svg/960px-Decorator_UML_class_diagram.svg.png">

----------
*The Ultimate Guide To Become a Code Ninja - **By Cache***
