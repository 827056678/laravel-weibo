
## 1. composer update
## 2. copy .env.example  .env
## 3. 设置env文件配置信息

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

MAIL_MAILER=smtp
MAIL_HOST=smtp.qq.com
MAIL_PORT=465
MAIL_USERNAME=827056678@qq.com
MAIL_PASSWORD=loqiifbcchftbdcj
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=827056678@qq.com
MAIL_FROM_NAME="${APP_NAME}-梦见梦里梦见梦"

## 4. php artisan migrate:refresh --seed

## 5. php artisan key:generate




