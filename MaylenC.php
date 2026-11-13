 4.1. Escribir un resumen de lo que te acuerdas de Java :)
Java es un lenguaje de programación orientado a objetos, multiplataforma y de tipado estático que destaca por su seguridad y portabilidad.
4.1.1. Sintaxis de Java.
La sintaxis de Java es estricta y se deriva de lenguajes como C y C++. Todo el código ejecutable debe vivir dentro de una clase y seguir reglas precisas de escritura.
• Sensibilidad a mayúsculas y minúsculas: Java distingue entre letras mayúsculas y minúsculas, por lo que miVariable y mivariable son identificadores diferentes.
• Punto y coma: Todas las instrucciones o sentencias simples deben terminar obligatoriamente con un punto y coma (;).
• Bloques de código: Las clases, métodos y estructuras de control agrupan sus instrucciones mediante llaves de apertura y cierre ({ }).
• Tipado estático: Es obligatorio declarar el tipo de dato de cada variable antes de usarla (por ejemplo, int, double, boolean o String).
• Método principal: Todo programa ejecutable necesita un punto de entrada definido exactamente como public static void main(String[] args).
4.1.2. Estructuras Repetitivas.
Las estructuras repetitivas o bucles permiten ejecutar un bloque de código varias veces mientras se cumpla una condición lógica determinada.
• Bucle for: Se utiliza cuando se conoce de antemano el número exacto de iteraciones. Integra la inicialización, la condición y el incremento en una sola línea.
• Bucle while: Evalúa una condición booleana antes de ejecutar el bloque de código. Si la condición es falsa desde el principio, el código interno nunca se ejecuta.
• Bucle do-while: Ejecuta el bloque de instrucciones al menos una vez y evalúa la condición al final. Es ideal para menús interactivos o validación de datos de entrada.
• Bucle for-each: Es una variante simplificada del bucle for diseñada para recorrer arreglos y colecciones de datos sin necesidad de manejar índices manualmente.
4.1.3. POO (Atributos y Métodos).
En la Programación Orientada a Objetos (POO), las clases funcionan como moldes para crear objetos que combinan datos y comportamiento.
• Atributos: Son las variables declaradas dentro de una clase que representan las características o el estado de un objeto. Suelen declararse como private para proteger los datos mediante el encapsulamiento.
• Métodos: Son funciones definidas dentro de una clase que determinan las acciones o el comportamiento que puede realizar el objeto.
• Constructores: Son métodos especiales que tienen el mismo nombre que la clase y no devuelven ningún tipo de dato. Su función es inicializar los atributos cuando se crea una nueva instancia con la palabra clave new.
• Modificadores de acceso: Palabras como public, private y protected controlan desde qué partes del programa se puede acceder a los atributos y métodos de una clase.
 4.1.4. Herencia.
La herencia es un pilar de la POO que permite crear nuevas clases basadas en clases ya existentes para reutilizar código y establecer jerarquías.
• Palabra clave extends: Se utiliza en la declaración de una subclase (clase hija) para indicar que hereda los atributos y métodos no privados de una superclase (clase padre).
• Herencia simple: En Java, una clase solo puede heredar directamente de una única superclase para evitar ambigüedades en el código.
• Palabra clave super: Permite acceder desde la clase hija a los atributos, métodos o constructores de la clase padre.
• Sobrescritura de métodos (@Override): Permite que una subclase proporcione una implementación específica para un método que ya estaba definido en su superclase.

