# Chain of responsability

Permite establecer una cadena de objetos receptores a través de los cuales se pasa una petición formulada por un objeto emisor. La idea es que cualquiera de los receptores pueden responder a la petición en función de un criterio establecido. Encadena los objetos receptores y pasa la petición a través de la cadena hasta que es procesada por algún objeto. 
Busca evitar un montón de if – else largos y complejos en nuestro código, pero sobre todas las cosas busca evitar que el cliente necesite conocer toda nuestra estructura jeráquica y que rol cumple cada integrante de nuestra estructura.
En múltiples ocasiones, un cliente necesita que se realice una función, pero o no conoce al servidor concreto de esa función o es conveniente que no lo conozca para evitar un gran acoplamiento entre ambos.


### Aplicabilidad

* Hay más de un objeto que puede manejar una petición, y el manejador no se conoce a priori, sino que debería determinarse automáticamente.
* Se quiere enviar una petición a un objeto entre varios sin especificar explícitamente el receptor.
* El conjunto de objetos que pueden tratar una petición debería ser especificado dinámicamente.


### Digrama UML 

![Pattern UML](https://www.codeproject.com/KB/architecture/594974/4.png)

__Handler__: Define una interfaz para tratar las peticiones. Implementa el enlace al sucesor.
__ConcreteHandler__: Trata las peticiones de las que es responsable. Si puede manejar la petición, lo hace, en caso contrario la reenvía a su sucesor.
__Client__: Inicializa la petición. Conoce a un gestor que es el que lanza la petición a la cadena hasta que alguien la recoge.


### Ejemplo de uso 

En el siguiente problema tenemos que imaginarnos la siguiente situacion:

En una empresa existen 3 jerarquias (Gerente, Supervisor, Empleado). Cuando un empleado solicita un permiso de ausencia lo tiene que autorizar o denegar
ya sea el Supervisor o el Gerente, esto dependiendo de la cantidad de tiempo que solicita el empleado. Si la cantidad de tiempo que solicita el empleado
es menor a 5 horas el Supervisor se encarga de autorizar o no el permiso si es mayor a 5 el encargado sera el gerente.