# Задача №1
# Обменник. Создать скрипт который будет запускаться из консоли 1 раз из консоли, выдавать результат и зарываться.
#     1. На вход обменнику вводишь количество денег int.
#     2. На выходе в консоль выводится отввет в таком виде:
#                 "Ты ввёл int (Валюта)"
#                 "конвертированная сумма в USD = int"
#     3. Валюту пользователя определите сами.
def main():

    input_money = get_money()

    usd = exchange(input_money)

    print('Ты ввел ', input_money)
    print('конвертированная сумма в USD ', usd)

def get_money():
    input_data = input('Введите сумму в рублях: ')
    return input_data

def exchange(money):

    int_money = int(money) / 73

    return int_money

main()
exit()

# Задача №2
# Обменник. Создать скрипт который будет запускаться из консоли 1 раз из консоли, выдавать результат и зарываться.
#     1. На вход обменнику вводишь количество денег int.
#     2. На выходе в консоль выводится отввет в таком виде:
#                 "Ты ввёл int (Валюта)"
#                 "Конвертированная сумма в USD = int"
#                 "Конвертированная сумма в EUR = int"
#                 "Конвертированная сумма в CHF = int"
#                 "Конвертированная сумма в GBP = int"
#                 "Конвертированная сумма в CNY = int"
#     3. Валюту пользователя определите сами.

def main():

    input_money = get_money()

    usd = exchange(input_money) / 73
    eur = exchange(input_money) / 86
    chf = exchange(input_money) / 79
    gbp = exchange(input_money) / 100
    cny = exchange(input_money) / 11


    print('Ты ввел ', input_money)
    print('конвертированная сумма в USD ', usd)
    print('конвертированная сумма в EUR ', eur)
    print('конвертированная сумма в CHF ', chf)
    print('конвертированная сумма в GPB ', gbp)
    print('конвертированная сумма в CNY ', cny)


def get_money():
    input_data = input('Введите сумму в рублях: ')
    return input_data

def exchange(money):

    int_money = int(money)

    return int_money

main()
exit()

# Задача №3
# Обменник.Создать скрипт который будет запускаться из консоли 1 раз из консоли, выдавать результат и закрываться.
# 1. На вход обменнику вводишь количество денег int.
# 2. На выходе в консоль выводится отввет в таком виде:
# "Ты ввёл int (Валюта)"
# "конвертированная сумма в USD = int"
# "конвертированная сумма в EUR = int"
# "конвертированная сумма в CHF = int"
# "конвертированная сумма в GBP = int"
# "конвертированная сумма в CNY = int"
#
# 3. Скрипт должен выдать сообщение
# "Введите положительное число." Если число меньше 0.
# "Вы ввели не число. Введите число." Если введены буквы.
# "Вы ввели пустое поле. Введите число." Если введено пустое значение.
# 4. Валюту пользователя определите сами.
# Предусловие.
# Задачи 3 и 4 выполнить в 2-х вариантах:
# 1) В процедурном виде (весь код в одной процедуре).
# 2) В виде функций - код разбит на функции. Отдельные функции можно вынести в другие .py файлы и вызывать их в main.py предвварительно импортируя в main.py.
#
#
# Задача 3 - в процедурном виде.
while True:

    input_data = input("Введите сумму в рублях: ")


    if not input_data:
        print('Вы ввели пустое поле. Введите число.')
        continue
    try:
        int(input_data)
    except ValueError:
        print('Вы ввели не число. Введите число.')
        continue

    try:
        int(input_data)
        if int(input_data) < 0:
            raise ValueError
            break
    except ValueError:
        print('Введите положительное число.')
        prompt = "Введите сумму в рублях: "
        continue
    usd = int(input_data) / 73
    eur = int(input_data) / 86
    chf = int(input_data) / 79
    gbp = int(input_data) / 100
    cny = int(input_data) / 11

    print('Ты ввел ', input_data)
    print('конвертированная сумма в USD ', usd)
    print('конвертированная сумма в EUR ', eur)
    print('конвертированная сумма в CHF ', chf)
    print('конвертированная сумма в GPB ', gbp)
    print('конвертированная сумма в CNY ', cny)
    break
# #Задача 3 -  В виде функций

def main():

    input_money = get_money()
    usd, eur, chf, gbp, cny = exchange(input_money)

    print('Ты ввел ', input_money)
    print('конвертированная сумма в USD ', usd)
    print('конвертированная сумма в EUR ', eur)
    print('конвертированная сумма в CHF ', chf)
    print('конвертированная сумма в GPB ', gbp)
    print('конвертированная сумма в CNY ', cny)


def get_money():
    while True:
        input_data = input('Введите сумму в рублях: ')

        if not input_data:
            print('Вы ввели пустое поле. Введите число.')
            continue
        try:
            int(input_data)
        except ValueError:
            print('Вы ввели не число. Введите число.')
            continue

        try:
            int(input_data)
            if int(input_data) < 0:
                raise ValueError
                break
        except ValueError:
            print('Введите положительное число.')
            prompt = "Введите сумму в рублях: "
            continue


        return input_data


def exchange(money):
    usd_money = int(money) / 73
    eur_money = int(money) / 86
    chf_money = int(money) / 79
    gbp_money = int(money) / 100
    cny_money = int(money) / 11

    return usd_money, eur_money, chf_money, gbp_money, cny_money



main()
exit()

# Задача №4
# Обменник. Скрипт запускается в консоли и работает постоянно. Остановится нажатием ctrl+c.
#     1. Скрипт сначала выводит "Выберите валюту из ['USD','EUR','CHF','GBP','CNY']"
#     2. Пользователь вводит один из 5 вариантов ['USD','EUR','CHF','GBP','CNY']
#     3. Потом Скрипт выводит "Введите сумму"
#     4. Пользователь вводит сумму int
#     5. Скрипт выводит:
#             "Вы ввели сумму int и валюту "Валюта" "
#             "конвертированная сумма в "Валюта" = int"
#     6. Скипт должен выдать сообщение
#                 "Введите положительное число." Если число меньше 0.
#                 "Вы ввели не число. Введите число." Если введены буквы.
#                 "Вы ввели пустое поле. Введите число." Если введено пустое значение.
#     7. После сообщеня об ошибке, скрипт должен автоматом вернуться к шагу 1.

# Задача 4 - в процедурном виде.

while True:

    choose_data = input("Выберите валют из USD,EUR,CHF,GBP,CNY")
    input_data = input("Введите сумму ")

    if not input_data:
        print('Вы ввели пустое поле. Введите число.')
        continue
    try:
        int(input_data)
    except ValueError:
        print('Вы ввели не число. Введите число.')
        continue
    try:
        int(input_data)
        if int(input_data) < 0:
            raise ValueError
            break
    except ValueError:
        print('Введите положительное число.')
        prompt = "Введите сумму в рублях: "
        continue
    usd = int(input_data) / 73
    eur = int(input_data) / 86
    chf = int(input_data) / 79
    gbp = int(input_data) / 100
    cny = int(input_data) / 11
    if choose_data == "USD" or choose_data == "usd":
        print('Вы ввели сумму', input_data,'и валюту', choose_data)
        print('конвертированная сумма в USD = ', usd)
    elif choose_data == "EUR" or choose_data == "eur":
        input_data = input("Введите сумму ")
        print('Вы ввели сумму', input_data,'и валюту', choose_data)
        print('конвертированная сумма в EUR = ', eur)
    elif choose_data == "CHF" or choose_data == "chf":
        print('Вы ввели сумму', input_data, 'и валюту', choose_data)
        print('конвертированная сумма в CHF = ', chf)
    elif choose_data == "GBP" or choose_data == "gbp":
        print('Вы ввели сумму', input_data,'и валюту', choose_data)
        print('конвертированная сумма в GBP = ', gbp)
    elif choose_data == "CNY" or choose_data == "cny":
        print('Вы ввели сумму', input_data,'и валюту', choose_data)
        print('конвертированная сумма в CNY = ', cny)

# Задача 4 -  В виде функций

def main():
    while True:

        input_money, input_curr = get_money()
        usd, eur, chf, gbp, cny = exchange(input_money)

        if input_curr == "USD" or input_curr == "usd":
            print('Вы ввели сумму', input_money, 'и валюту', input_curr)
            print('конвертированная сумма в USD = ', usd)
        elif input_curr == "EUR" or input_curr == "eur":
            input_data = input("Введите сумму ")
            print('Вы ввели сумму', input_money, 'и валюту', input_curr)
            print('конвертированная сумма в EUR = ', eur)
        elif input_curr == "CHF" or input_curr == "chf":
            print('Вы ввели сумму', input_money, 'и валюту', input_curr)
            print('конвертированная сумма в CHF = ', chf)
            continue
        elif input_curr == "GBP" or input_curr == "gbp":
            print('Вы ввели сумму', input_money, 'и валюту', input_curr)
            print('конвертированная сумма в GBP = ', gbp)
            continue
        elif input_curr == "CNY" or input_curr == "cny":
            print('Вы ввели сумму', input_money, 'и валюту', input_curr)
            print('конвертированная сумма в CNY = ', cny)
            continue


def get_money():
    while True:

        choose_data = input("Выберите валют из USD,EUR,CHF,GBP,CNY")
        input_data = input("Введите сумму ")

        if not input_data:
            print('Вы ввели пустое поле. Введите число.')
            continue
        try:
            int(input_data)
        except ValueError:
            print('Вы ввели не число. Введите число.')
            continue

        try:
            int(input_data)
            if int(input_data) < 0:
                raise ValueError
                break
        except ValueError:
            print('Введите положительное число.')
            prompt = "Введите сумму в рублях: "
            continue

        return input_data, choose_data


def exchange(money):
    usd_money = int(money) / 73
    eur_money = int(money) / 86
    chf_money = int(money) / 79
    gbp_money = int(money) / 100
    cny_money = int(money) / 11

    return usd_money, eur_money, chf_money, gbp_money, cny_money


main()
