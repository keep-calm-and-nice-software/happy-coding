# Gilded Rose Refactoring Kata (EN)

Hi and welcome to team Gilded Rose. As you know, we are a small inn with a 
prime location in a prominent city ran by a friendly innkeeper named 
Allison. We also buy and sell only the finest goods. Unfortunately, our 
goods are constantly degrading in quality as they approach their sell by 
date. We have a system in place that updates our inventory for us. It was 
developed by a no-nonsense type named Leeroy, who has moved on to new 
adventures. Your task is to add the new feature to our system so that we 
can begin selling a new category of items. First an introduction to our 
system:

- All items have a SellIn value which denotes the number of days we have 
to sell the item
- All items have a Quality value which denotes how valuable the item is
- At the end of each day our system lowers both values for every item

Pretty simple, right? Well this is where it gets interesting:

- Once the sell by date has passed, Quality degrades twice as fast
- The Quality of an item is never negative
- "Aged Brie" actually increases in Quality the older it gets
- The Quality of an item is never more than 50
- "Sulfuras", being a legendary item, never has to be sold or decreases 
in Quality
- "Backstage passes", like aged brie, increases in Quality as it's SellIn 
value approaches; Quality increases by 2 when there are 10 days or less 
and by 3 when there are 5 days or less but Quality drops to 0 after the 
concert

We have recently signed a supplier of conjured items. This requires an 
update to our system:

- "Conjured" items degrade in Quality twice as fast as normal items

Feel free to make any changes to the UpdateQuality method and add any 
new code as long as everything still works correctly. However, do not 
alter the Item class or Items property as those belong to the goblin 
in the corner who will insta-rage and one-shot you as he doesn't 
believe in shared code ownership (you can make the UpdateQuality 
method and Items property static if you like, we'll cover for you).

Just for clarification, an item can never have its Quality increase 
above 50, however "Sulfuras" is a legendary item and as such its 
Quality is 80 and it never alters.


# Gilded Rose Refactoring Kata (ES)

Traducción original por [@francholab](https://twitter.com/francholab), ligeramente editada por nosotros.


Hola y bienvenido al equipo Gilded Rose. 
Como ya sabras, somos una pequeña posada en una localización excelente ubicada en una prominentente ciudad dirigada por un posadero llamado Allison.
Compramos y vendemos solos los mejores objetos. Desafortunadamente par anosotros, nuestros bienen se degradan constantemente de calidad cuando se acercan a su fecha de venta. 
Tenemos un sistema de inventario desarrollado por un tipo un tanto peculiar y con poco sentido común llamado Leeory, ahora esta persiguiendo nuevas aventuras!, tanta paz lleves como descanso dejas amigo Leeroy!. Tu tarea consiste en añadir una nueva funcionalidad al sistema para que podamos empezar a vender una nueva categoría de items. Para empezar una pequeña introducción a nuestro sistema:

- Todos los items tienen una fecha de venta, **SellIn** , que especifica el número de días que tenemos para vender el item.
- Todos los items tienen una calidad , **Quality** , que especifica el valor que tiene un item.
- Al final del día, el sistema reduce los valores para los dos valores de cada item.

Simple, ¿no? Ahora empieza lo interesante:

- Los items degradan la calidad (**Quality**) en una unidad por cada actualización.
- Cuando la fecha de venta (**SellIn**) ha pasado, la calidad degrada al doble de velocidad.
- La calidad de un item nunca puede ser negativa.
- El item "aged brie" incrementa su calidad en lugar de decrementarla según pasan los días.
- La calidad de un item nunca es mayor de 50.
- El item "Sulfuras", al ser un artículo legendario, nunca puede ser vendido y su calidad no decrementa.
- Los "backstage passes" incrementan su calidad conforme se aproxima la fecha de venta. La calidad se incrementa por dos cuando quedan 10 días o menos para el concierto y por 3 cuando quedan 5 o menos. Sin embargo, la calidad disminuye a 0 después del concierto.

## Conjured Items
Hemos firmado un nuevo acuerdo para vender items "conjured", que disminuyen de calidad el doble de rápido que el resto. El equipo ya ha hecho una implementación inicial pero parece no haber tenido en cuenta esta diferencia de comportamiento.

Por supuesto puedes hacer cualquier cambio al método `updateQuality` si lo consideras necesario (mientras que todo siga funcionando, claro está). Sin embargo hay dos cosas a tener en cuenta:

- Debes respetar la interfaz pública de la función `updateQuality`. Es fea, cierto, pero tenemos muchos sistemas que la utilizan y no podemos cambiarlos todos ahora.
- ¡No puedes tocar la clase `Item`! Pertenece a una especie de *goblin* asesino que no cree en cosas como la propiedad colectiva del código.





## Composer

To execute the test, you need to install phpunit and the rest of the dependencies.
We can archive that using composer

```php
php composer.phar install
```


## Execute Tests

### Windows
```php
.\vendor\bin\phpunit --testdox tests
```



### Mac OS X / Linux 
```php
./vendor/bin/phpunit --testdox tests
```



### Execute script

To exercise the code outside of phpunit, for example to visually confirm that it is working,
use the `texttest_fixture` script:

```
php fixtures/texttest_fixture.php
```

## Utils

- [PHPUnit Full List Asserts](https://phpunit.readthedocs.io/es/latest/assertions.html) A documentation with all the types of asserts than you can use in PHPUnit