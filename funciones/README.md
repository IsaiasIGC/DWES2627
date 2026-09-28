# Ejercicios - Funciones y Ficheros

Ejercicios realizados durante el tema de **Uso de Funciones y Ficheros** de la asignatura Desarrollo Web en Entorno Servidor (DWES).

---

## Ejercicio 1 - Contador

![Resultado del ejercicio](img/contador.png)

---

## Ejercicio 2 - Intercambia

![Resultado del ejercicio](img/intercambia.png)

---

## Ejercicio - Mayor

![Resultado del ejercicio](img/parametrosVariables.png)

---

## Ejercicio - Comprobar hora

![Resultado del ejercicio](img/comprueba_hora.png)

---

## Ejercicio - Matemáticas

![Resultado del ejercicio](img/matematicas.png)

---

## Ejercicio - Login

### Funcionamiento y procedimiento

En este ejercicio se simula un formulario de acceso mediante un usuario y una contraseña.

El ejercicio se ha separado en varios archivos para distinguir el formulario, la lógica de comprobación y las diferentes vistas:

- `login.php`: muestra el formulario donde se introducen el usuario y la contraseña.
- `compruebaLogin.php`: recibe los datos enviados mediante `POST` y comprueba si el usuario existe y si la contraseña es correcta utilizando un array asociativo.
- `ok.php`: muestra el resultado cuando el usuario y la contraseña son correctos.
- `ko.php`: muestra el resultado cuando los datos introducidos no son correctos.

### Formulario de acceso

![Formulario de login](img/login.png)

### Acceso correcto

![Acceso correcto](img/ok.png)

### Acceso incorrecto

![Acceso incorrecto](img/ko.png)

### Diseño

Para mejorar la presentación del ejercicio he utilizado **Bootstrap** y **Bootstrap Icons**, manteniendo los estilos y la paleta de colores definidos en `styles.css`.
