<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><br>RESUMEN DE JAVA</h1>
    <h3>Sintaxis de Java</h3>
    <p>Java es un lenguaje de programación fuertemente tipado y sensible a mayúsculas y minúsculas. Su estructura básica requiere que todo el código viva dentro de una clase y que la ejecución inicie en un método principal.
• Punto de entrada: Todo programa ejecutable necesita el método public static void main(String[] args). Este bloque indica por dónde empieza a correr el código.
• Terminación de líneas: Cada instrucción debe finalizar con un punto y coma (;). Los bloques de código se agrupan usando llaves ({}).
• Variables y tipos de datos: Debes declarar el tipo de dato antes de usar una variable. Los tipos primitivos más comunes son int (enteros), double (decimales), boolean (verdadero o falso) y char (un carácter), además de String para textos.
• Impresión en consola: Se utiliza System.out.println("Texto"); para mostrar mensajes en pantalla con un salto de línea al final.</p>
    <h3>Estructuras repetitivas</h3>
    <p>Las estructuras repetitivas permiten ejecutar un bloque de código varias veces mientras se cumpla una condición específica.
• Bucle for: Se utiliza cuando sabes exactamente cuántas veces quieres repetir el código. Incluye la inicialización, la condición y el incremento en una sola línea (ejemplo: for (int i = 0; i < 5; i++)).
• Bucle while: Evalúa la condición antes de ejecutar el bloque de código. Si la condición es falsa desde el inicio, el código interior nunca se ejecuta.
• Bucle do-while: Ejecuta el bloque de código al menos una vez antes de evaluar la condición al final. Es útil para menús interactivos o validación de datos.</p>
    <h3>POO (Atributos y Metodos)</h3>
    <p>La Programación Orientada a Objetos (POO) organiza el código alrededor de objetos que representan entidades del mundo real, creados a partir de plantillas llamadas clases.
• Clases y Objetos: Una clase es el molde (por ejemplo, Coche) y un objeto es la instancia creada a partir de ese molde (por ejemplo, miCoche de color rojo).
• Atributos: Son las variables dentro de una clase que definen las características o el estado del objeto. Por buena práctica, suelen declararse como private para proteger los datos (encapsulamiento).
• Métodos: Son las funciones dentro de una clase que definen el comportamiento o las acciones que puede realizar el objeto. Suelen declararse como public para interactuar con los atributos (como los métodos getters y setters).
    <h3>Herencia</h3>
    <p>La herencia es un pilar de la POO que permite crear nuevas clases basadas en clases ya existentes, facilitando la reutilización de código.
• Superclase y Subclase: La clase original se llama clase padre o superclase, mientras que la nueva clase que hereda se llama clase hija o subclase.
• Palabra clave extends: Se utiliza en la declaración de la subclase para indicar de quién hereda (ejemplo: public class Perro extends Animal).
• Acceso a miembros: La subclase hereda todos los atributos y métodos public y protected de la superclase, pero no los private.
• Palabra clave super: Permite llamar al constructor o a los métodos de la superclase desde la subclase. En Java solo existe la herencia simple entre clases, lo que significa que una clase solo puede heredar directamente de una superclase.</p>
</body>
</html>
