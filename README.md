### Enunciado

FizzBuzz es un juego relacionado con el aprendizaje de la división en el que un grupo de estudiantes cuentan los números por turno, reemplazando cada número divisible por tres con la palabra “Fizz” y cada número divisible por cinco con la palabra “Buzz”. Si el número es divisible por ambos, entonces se dice “FizzBuzz”.

Así que nuestro objetivo será escribir un programa que imprima los números del 1 al 100 de tal manera que:

- Si el número es divisible por 3 devuelve Fizz.
- Si el número es divisible por 5 devuelve Buzz.
- Si el número es divisible por 3 y 5 devuelve FizzBuzz.

###  TESTS

- El primer número es el 1, "firs_number_is_one"
- El tercer número es fizz, "third_number_is_fizz"
- El quinto numero es buzz, "fith_number_is_fizz"
- El número 15 es fizz buzz, "fifteen_number_is_fizzbuzz"
- El metodo getData devuelve 100 numeros, "getData_must_return_100_numbers"
- Todos los numeros divisibles por 3 son fizz, "every_third_number_then_is_fizz"
- Todos los numeros divisibles por 5 son buzz, "every_five_numbers_is_buzz"
- Todos los numeros divisibles por 15 son fizzbuzz, "every_fifteen_numbers_is_fizzbuzz"

###  RUN

```bash
cd test
phpunit FizzBuzzTest --configuration=../phpunit.xml.dist
```