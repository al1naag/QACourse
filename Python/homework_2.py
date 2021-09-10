#1) Создать 2 переменных типа String с разными значениями
a = "Masha"
b = "Natasha"
#2) Создать 4 переменных типа Integer с разными значениями
c = 11
d = 12
e = 13
f = 14
#3) Создать 3 переменных типа Float с разными значениями
g = 13.3
h = 14.4
i = 15.5
#4) Реализовать 15 варианта сравнения int переменных с операторами >, <, >=, <=, !=. Pезультаты весвести в консоль.
if c > d:
    print(c, ' > ', d)
else:
    print(c, ' < ', d)

if c < d:
    print(c, ' < ', d)
else:
    print(c, ' > ', d)

if c >= d:
    print(c, ' >= ', d)
else:
    print(c, ' is not >= ', d)

if c <= d:
    print(c, ' <= ', d)
else:
    print(c, ' is not <= ', d)

if c != d:
    print(c, ' != ', d)
else:
    print(c, ' = ', d)

if e > f:
    print(e, ' > ', f)
else:
    print(e, ' < ', f)

if e < f:
    print(e, ' < ', f)
else:
    print(e, ' > ', f)

if e >= f:
    print(e, ' >= ', f)
else:
    print(e, ' is not >= ', e)

if e <= f:
    print(e, ' <= ', f)
else:
    print(e, ' is not <= ', f)

if e != f:
    print(e, ' != ', f)
else:
    print(e, ' = ', f)

if e > c:
    print(e, ' > ', c)
elif d > f:
    print(d, ' > ', f)
else:
    print(e, ' is not > ',c, ' and ', d, ' is not >', f)

if e < c:
    print(e, ' < ', c)
elif d < f:
    print(d, ' < ', f)
else:
    print(e, ' is not < ',c, ' and ', d, ' is not <', f)

if e <= c:
    print(e, ' <= ', c)
elif d < f:
    print(d, ' <= ', f)
else:
    print(e, ' is not <= ', c, ' and ', d, ' is not <=', f)

if e >= c:
    print(e, ' >= ', c)
elif d > f:
    print(d, ' >= ', f)
else:
    print(e, ' is not >= ',c, ' and ', d, ' is not >=', f)

if e == c:
    print(e, ' = ', c)
elif d == f:
    print(d, ' = ', f)
else:
    print(e, ' is not = ',c, ' and ', d, ' is not =', f)

#5) Реализовать 9 варианта сравнения Float переменных с операторами >, <, >=, <=, !=. Pезультаты весвести в консоль.
if i <= h:
    print(i, ' <= ', h)
else:
    print(i, ' is not <= ', h)

if i != g:
    print(i, ' != ', g)
else:
    print(i, ' = ', g)

if g > i:
    print(g, ' > ', i)
else:
    print(g, ' < ', i)

if e < f:
    print(g, ' < ', i)
else:
    print(e, ' > ', f)

if g == h:
    print(g, ' = ', h)
elif g == i:
    print(g, ' = ', i)
else:
    print(g, ' is not = ',h, ' and ', g, ' is not =', i)

if g >= h:
    print(g, ' >= ', h)
elif g >= i:
    print(g, ' >= ', i)
else:
    print(g, ' is not >= ',h, ' and ', g, ' is not >=', i)

if g <= h:
    print(g, ' <= ', h)
elif g <= i:
    print(g, ' <= ', i)
else:
    print(g, ' is not <= ',h, ' and ', g, ' is not <=', i)

if g < h:
    print(g, ' < ', h)
elif g < i:
    print(g, ' < ', i)
else:
    print(g, ' is not < ',h, ' and ', g, ' is not <', i)

if g > h:
    print(g, ' > ', h)
elif g > i:
    print(g, ' > ', i)
else:
    print(g, ' is not >',h, ' and ', g, ' is not >', i)

#6) Реализовать 10 варианта сравнения int переменных с операторами >, <, >=, <=, != и условными выражениями (end, or, not). Pезультаты весвести в консоль.
if not e > f:
    print(e, 'is not > ', f)
else:
    print(e, ' > ', f)

if not e < f:
    print(e, ' is not < ', f)
else:
    print(e, ' < ', f)

if not e >= f:
    print(e, 'is not >= ', f)
else:
    print(e, ' <= ', f)

if not e <= f:
    print(e, ' is not <= ', f)
else:
    print(e, ' <= ', f)

if not e != f:
    print(e, ' is not != ', f)
else:
    print(e, ' != ', f)

if not e > c:
    print(e, ' is not > ', c)
elif d > f:
    print(d, ' > ', f)
else:
    print('ok')

if e < c and d < f:
    print('ok')

if e < c and not d < f:
    print(e, ' < ', c, ' and ', d, 'is not < ', f)

if e <= c or d < f:
    print('ok')

if e > c or d > f:
    print('ok')

#7) Сделать скрипт используя функцию input().
#    1. Функция должна на вход принимать целое число.
#    2. Выводить должна "Вы вели число = (введённое число) которое (меньше/больше/равно) 30"
number = int(input('Введите любое целое число '))
if number > 30:
    print('Вы ввели число', number, 'которое > 30')
elif number < 30:
    print('Вы ввели число', number, 'которое < 30')
elif number == 30:
    print('Вы ввели число', number, 'которое = 30')

#8)Сделать скрипт используя функцию input().
#    1. Функция должна на вход принимать целое число.
#    2. Внутри функции должно сгенерироваться рандомное целое число (import random)...(random.randint(1, 100))
#    3. Выводить должна "Вы вели число = (введённое число) которое (меньше/больше/равно) сгенерированному числу"
    import random
number1 = int(input ('Введите любое целое число '))
y = random.randint(1, 100)
if number1 > y:
    print('Вы ввели число', number1, 'которое >', y)
elif number1 < y:
    print('Вы ввели число', number1, 'которое <', y)
elif number1 == y:
    print('Вы ввели число', number1, 'которое =', y)

#9) Сделать скрипт используя функцию input().
#    1. Функция должна на вход принимать целое число.
#    2. Внутри функции должно сгенерироваться рандомных 2 целых числа (import random)...(random.randint(1, 100))
#    3. Выводить должна "Вы вели число = (введённое число) которое (меньше/больше/равно и меньше/больше/равно) сгенерированному числу"
    import random
number2 = int(input ('Введите любое целое число '))
y = random.randint(1, 100)
x = random.randint(1, 100)
if number2 > y:
    if number2 > x:
        print('Вы ввели число', number2, 'которое >', y, 'и >', x)
    elif number2 < x:
        print('Вы ввели число', number2, 'которое >', y, 'и <', x)
    elif number2 == x:
        print('Вы ввели число', number2, 'которое >', y, 'и =', x)
elif number2 < y:
    if number2 < x:
        print('Вы ввели число', number2, 'которое <', y, 'и <', x)
    elif number2 > x:
        print('Вы ввели число', number2, 'которое <', y, 'и >', x)
    elif number2 == x:
        print('Вы ввели число', number2, 'которое <', y, 'и =', x)
elif number2 == y:
    if number2 == x:
        print('Вы ввели число', number2, 'которое =', y, 'и =', x)
    elif number2 < x:
        print('Вы ввели число', number2, 'которое =', y, 'и <', x)
    elif number2 > x:
        print('Вы ввели число', number2, 'которое =', y, 'и >', x)