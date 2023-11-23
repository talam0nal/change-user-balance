## Установка:
Requires PHP 8.1<br><br>

composer install<br>
php artisan key:generate<br>

Перед запуском проекта запустить миграции и сиды:<br>
php artisan migrate<br>
composer dump-autoload<br>
php artisan db:seed<br><br>

## API endpoints:

Для зачисления или списания баланса:<br>
PUT /api/users/{user_id}/updateBalance<br>
Parameters: amount (Для пополнения баланса используется положительное число, для списания отрицательное)<br><br>

Список транзакций пользователя:<br>
GET /api/users/{user_id}/transactions
