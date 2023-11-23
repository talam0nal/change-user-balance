Перед запуском проекта запустить миграции и сиды:
php artisan migrate
composer dump-autoload
php artisan db:seed

##API endpoints:
Для зачисления или списания баланса:
PUT /api/users/{user_id}/updateBalance
Parameters: amount (Для пополнения баланса используется положительное число, для списания отрицательное)

Список транзакций пользователя:
GET /api/users/{user_id}/transactions
