# SWC тестовое задание

Чтобы развернуть проект, нужно выполнить следующие команды: </br>

git clone https://github.com/AlexanderRadko-php/Test_admin_panel.git

Переходим в проект </br>

cd Test_admin_panel

Скопировать файл .env.example и сщздать файл .env, в котором указать название таблицы, логин и пароль для базы данных </br>

Установить composer </br>

composer install

Или обновить, если composer уже установлен </br>

composer update

Создать нужные таблицы в базе данных </br>

php artisan migrate

Генерируем ключ </br>

php artisan key:generate

Запустить локальный сервер </br>

php artisan serve

Чтобы запустить проект через vite, нужно открыть новую панель консоли и установить npm </br>

npm install

Запустить локальный сервер </br>

npm run dev




