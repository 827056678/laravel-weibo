
## 1. composer update
## 2. copy .env.example  .env
## 3. 设置env文件配置信息
MAIL_MAILER=smtp

MAIL_HOST=smtp.qq.com

MAIL_PORT=465

MAIL_USERNAME=827056678@qq.com

MAIL_PASSWORD=loqiifbcchftbdcj

MAIL_ENCRYPTION=ssl

MAIL_FROM_ADDRESS=827056678@qq.com

MAIL_FROM_NAME="${APP_NAME}-梦见梦里梦见梦"
## 4. php artisan migrate:refresh --seed


