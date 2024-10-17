# examen_algoritmos_alcaraz_garcia_gabriel

Pasos para ejecutar el proyecto

1.- Copia el archivo con nombre env y pégalo con el nombre de .env

2.- Dentro de este archivo busca la línea que tenga la variable CI_ENVIRONMENT, y elimina el signo de # que se encuentra de lado izquierdo

3.- Dentro de este archivo busca la línea que tenga la variable app.baseURL, elimina el signo de # que se encuentra de lado izquierdo y agrega la siguiente información http://localhost/examen_algoritmos_alcaraz_garcia_gabriel/

4.- Abre la url http://localhost/examen_algoritmos_alcaraz_garcia_gabriel/ en el navegador de tu preferencia

Patrones de diseño

1.- Strategy. Porque Podemos crear diferentes métodos dependiendo del servicio que el cliente decida usar para el envió de emails, vamos a validar que servicio necesita el cliente y usaremos o crearemos ese método sin afectar a los demás métodos.

2.- El patrón de Factory Method crea objetos de un tipo en especifico mientras Abstract Factory crea familias de objetos relacionados. Ejemplo: Se esta creando una app para tener el registro de varias ligas de fútbol de la Ciudad de México para crear los métodos para las ligas de fútbol usaremos el patrón Abstract Factory donde cada liga de fútbol tiene sus propios equipos. Y para crear los métodos de los equipos de fútbol utilizaremos el patrón de Factory Method.
