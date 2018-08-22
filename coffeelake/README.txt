В пакет входят следующие компоненты:
1. Wordpress
2. Underscores theme sassed with WooCommerce 

Требования к серверу:
	Рекомендован OpenServer
	http — Apache-PHP-7.2
	PHP — PHP-7.2
	MySQL — MySQL-5.6 and higer

Установка:
	1. Скачать и распаковать архив в папку локального сервера
	2. Создать базу данных (Изменить введённые данных можно в файле конфига wp-config.php)
	3. Запустить сайт, пройти "5-и минутную установку" wordpress
	4. Обновить все элементы Wordpress
	5. Активировать тему coffeelake
	6. Установить node modules через команду npm install

Установленные плагины:
	1. Developer
	2. Debug Bar
	3. Monster Widget
	4. Regenerate Thumbnails
	5. Theme Check
	6. WordPress Importer
	7. WooCommerce

		+ Импортированный контент для отладки темы: Theme unit test.xml

Прим. домен сайта должен совпадать со значением переменной projectURL в gulpfile.js