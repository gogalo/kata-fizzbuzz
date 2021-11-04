### Enunciado

FizzBuzz es un juego relacionado con el aprendizaje de la división en el que un grupo de estudiantes cuentan los números por turno, reemplazando cada número divisible por tres con la palabra “Fizz” y cada número divisible por cinco con la palabra “Buzz”. Si el número es divisible por ambos, entonces se dice “FizzBuzz”.

Así que nuestro objetivo será escribir un programa que imprima los números del 1 al 100 de tal manera que:

- Si el número es divisible por 3 devuelve Fizz.
- Si el número es divisible por 5 devuelve Buzz.
- Si el número es divisible por 3 y 5 devuelve FizzBuzz.

###  TESTS

- Devolver un array de 100 elementos
- Devolver un array del 1 al 100
- Números divisibles por 3 devuelve Fizz
- Números divisibles por 5 devuelve Buzz
- Números divisibles por 3 y 5 devuelve FizzBuzz


###  RUN

```bash
cd test
phpunit FizzBuzzTest --configuration=../phpunit.xml.dist
```