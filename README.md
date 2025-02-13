# crud-app
 back-end app lojistas



## 🚀 Como executar o projeto

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:

[Git](https://git-scm.com)

[Xampp](https://www.apachefriends.org/pt_br/download.html)

Um editor de texto para editar e trabalhar com os arquivos no repositório.

[VSCode](https://code.visualstudio.com/)

Um gerenciador de projectos
[Composer](https://getcomposer.org/download)

Criar uma base de dados com nome Crud.

# Instalação 

Renomear no ficheiro .env.example para .env e setar com as seguintes informações
```shell
APP_NAME=crud
APP_ENV=local
APP_KEY=base64:MWrVmRCC0hv6RDBKbiYQsdURBiB+iJyX04/N+sJ4Nig=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION= mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"
```
## Development

### comandos a rodar
```shell
 composer install 
```

```shell
php artisan key:generate 
```

```shell
 php artisan migrate 
```

```shell
 php -S localhost:3306 -t public
```

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:

[Git](https://git-scm.com)

[Xampp](https://www.apachefriends.org/pt_br/download.html)

E um editor de texto para editar e trabalhar com os arquivos no repositório.

[VSCode](https://code.visualstudio.com/)

