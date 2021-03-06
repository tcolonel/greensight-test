# Тестовое задание для greensight.ru

Верстка: https://yadi.sk/d/z1h03gKIh4RSs или http://greensight-test.tc-test.ru/greensight.ru-test.rar

Для сверстанной страницы необходимо реализовать:

1. Описать предварительный пул задач для реализации
2. Поставить каждому блоку примерные оценки в часах
3. В конце задания поблочно дополнить описание фактическими оценками
4. Развернуть демо-версию Битрикса
5. Интегрировать общий шаблон;
6. Интегрировать 2 меню: в хедере и в футере;
7. Интегрировать (управление элементами осуществляется через инфоблоки):
 1. Верхний слайдер
 2. Раздел "Бренды"
 3. Раздел новости
8. Статический текст (О компании, Карьера, текст в слайдах "Почему мы?") должен быть редактируемой областью
9. Реализовать авторизацию с попапа входа (иконка человека в правом верхнем углу)
10. Реализовать форму обратной связи через модуль веб-форм битрикса (кнопка "Обратная связь" в футере)
11. Вести все работы в папке local и закоммитить всё сделанное на гитхаб/битбакет (включая дамп БД и описание с оценками), а ссылочку прислать мне.

Дополнительные задания:

1. Опционально, если коммиты будут идти на протяжении всего тестового задания, а не один большой в конце.
2. Опционально, развернуть тестовую площадку.

### Предварительный пул задач для реализации
1. Создание тестовой площадки
 1. Создание поддомена [greensight-test.tc-test.ru - см. [Комментарии](#Комментарии)]
 2. Настройка DNS
 3. Подготовка площадки
 4. Создание FTP-доступа
2. Установка / настройка БУС
 1. Выбор редакции БУС
 2. Установка / настройка БУС
 3. Очистка файловой структуры
 4. Создание .gitignore
3. Подготовка GitHub / локальная настройка
 1. Установка / настройка git на VPS
	1. Создание ключей
	2. Связь с GitHub
	3. Локальная инициализация git
	4. Тестовый коммит
4. Разработка
 1. Изучение макета
 2. Создание шаблона сайта
 3. Создание 2-х меню
 4. Создание / настройка необходимых ИБ / заполнение данными / реализация функционала (см. [Инфоблоки](#Инфоблоки))
	1. Слайдеры (sliders)
	2. Бренды (brands)
	3. Новости (news)
 5. Создание необходимых редактируемых областей
	1. О компании (includes/about.php)
	2. Карьера (includes/career.php)
	3. ~~Почему мы? (includes/sliders.php)~~ - см. [Редактируемые области](#Редактируемые-области)
 6. Реализация авторизации с poopup-окном
 7. Реализация формы обратной связи с помощью модуля "Веб-формы" (кнопка "Обратная связь" в футере)
5. Общее тестирование
6. Создание дампа БД
7. Загрузка дампа БД на GitHub
8. Отправка задания на проверку

### Примерные оценки в часах
1. Создание тестовой площадки
 1. Создание поддомена [greensight-test.tc-test.ru] - 5 мин.
 2. Настройка DNS - 10 мин.
 3. Подготовка площадки - 10 мин.
 4. Создание FTP-доступа - 5 мин.
2. Установка / настройка БУС
 1. Выбор редакции БУС - 5 мин.
 2. Установка / настройка БУС - 40-50 мин.
 3. Очистка файловой структуры - 5 - 10 мин.
 4. Создание .gitignore - 5 - 10 мин.
3. Подготовка GitHub / локальная настройка - 2-3ч.
 1. Установка / настройка git на VPS
	1. Создание ключей
	2. Связь с GitHub
	3. Локальная инициализация git
	4. Тестовый коммит
4. Разработка
 1. Изучение макета - 1ч.
 2. Создание шаблона сайта - 20-30 мин.
 3. Создание 2-х меню - 30-60 мин.
 4. Создание / настройка необходимых ИБ / заполнение данными / реализация функционала (см. [Инфоблоки](#Инфоблоки)) - 2-4ч.
	1. Слайдеры (sliders)
	2. Бренды (brands)
	3. Новости (news)
 5. Создание необходимых редактируемых областей - 30 мин.
	1. О компании (/include/about.php)
	2. Карьера (/include/career.php)
	3. ~~Почему мы? (includes/sliders.php)~~ - см. [Редактируемые области](#Редактируемые-области)
 6. Реализация авторизации с poopup-окном - 1-1.5ч.
 7. Реализация формы обратной связи с помощью модуля "Веб-формы" (кнопка "Обратная связь" в футере) - 2-3ч.
5. Общее тестирование - 1-2ч.
6. Создание дампа БД - 5-20мин.
7. Загрузка дампа БД на GitHub - 5-10мин.
8. Отправка задания на проверку - 5-10мин.

### Фактические оценки в часах
1. Создание тестовой площадки
 1. Создание поддомена [greensight-test.tc-test.ru] - < 5 мин.
 2. Настройка DNS - < 10 мин.
 3. Подготовка площадки - < 10 мин.
 4. Создание FTP-доступа - < 5 мин.
2. Установка / настройка БУС
 1. Выбор редакции БУС - < 5 мин.
 2. Установка / настройка БУС - < 40 мин.
 3. Очистка файловой структуры - 20 мин.
3. Подготовка GitHub / локальная настройка - < 3ч.
 1. Установка / настройка git на VPS
	1. Создание ключей
	2. Связь с GitHub
	3. Локальная инициализация git
	4. Тестовый коммит
4. Разработка
 1. Изучение макета - < 30 мин.
 2. Создание шаблона сайта - < 30 мин.
 3. Создание 2-х меню - < 30 мин.
 4. Создание / настройка необходимых ИБ / заполнение данными / реализация функционала (см. [Инфоблоки](#Инфоблоки)) - < 4ч.
	1. Слайдеры (sliders)
	2. Бренды (brands)
	3. Новости (news)
 5. Создание необходимых редактируемых областей - < 30 мин.
	1. О компании (includes/about.php)
	2. Карьера (includes/career.php)
	3. ~~Почему мы? (includes/sliders.php)~~ - см. [Редактируемые области](#Редактируемые-области)
 6. Реализация авторизации с poopup-окном - < 1.5ч.
 7. Реализация формы обратной связи с помощью модуля "Веб-формы" (кнопка "Обратная связь" в футере) - < 3ч.
5. Общее тестирование - < 1ч.
6. Создание дампа БД - < 5мин.
7. Загрузка дампа БД на GitHub - < 5мин.
8. Отправка задания на проверку - < 10мин.

## Комментарии
##### Тестовая площадка
greensight-test.tc-test.ru - достпуна до 04.07.2015
##### Тестовые юзеры
* ivan 		| 123456789
* petrov 	| 123456789
* viktoriya	| 123456789

##### Редактируемые области
В ввиду того что, не было уточнения насчет редактируемых областей (PHP / HTML), и, я не уточнял этот момент, реализовал 2-мя сопособами:

1. $APPLICATION->IncludeComponent
2. $APPLICATION->IncludeFile

Один из способов закомментирован.

Касательно этого момента: **текст в слайдах "Почему мы?"** - не нашел такого текста в слайдах.

##### Инфоблоки
В ввиду того что, не было уточнения насчет структуры / настроек ИБ, функционала - я реализовал задачу на свое усмотрение.

###### ИБ Бренды

> При работе с брендами существенное время ушло на добавления брендов. Был создан вспомогательный скрипт [add-brands.php](http://greensight-test.tc-test.ru/add-brands.php).
	
> В папке /img/brands_hovers/ отсутствовало изображение под #28 для бренда "DKNY JEANS", поэтому было использовано другое - #27.
	
> При отображении брендов используется рандомная выборка брендов - потому как в макете выводится 12, а всего брендов - 28. Решил так будет лучше.

	Кстати, именно для списка брендов я бы использовал HighLoad IB.

###### ИБ Слайдеры

> При работе со слайдами время ушло на добавления слайдов.

##### Pop-up формы

Формы были реализованы в свободной форме - ввиду отсутствия ТЗ.

# Эпилог

Задача была интересной, хоть и не до конца продуманной, много моментов упущено ...


Спасибо за внимание!