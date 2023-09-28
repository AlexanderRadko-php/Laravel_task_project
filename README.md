# SWC тестовое задание

Чтобы развернуть проект, нужно выполнить следующие команды: </br>

git clone https://github.com/AlexanderRadko-php/Test_admin_panel.git

Переходим в проект </br>

cd Test_admin_panel

Скопировать файл .env.example и сщздать файл .env, в котором указать название таблицы, логин и пароль для базы данных </br>

Обновить composer </br>

composer update

Или установить, если он еще не установлен </br>

composer install

Создать нужные таюлицы в базе данных </br>

php artisan migrate

Запустить локальный сервер </br>

php artisan serve

Чтобы запустить проект через vite, нужно открыть новую панель консоли и установить npm </br>

npm install

Запустить локальный сервер </br>

npm run dev




