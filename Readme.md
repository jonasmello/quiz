Requisitos:

Docker

Primeiramente se certifique de não ter nenhum processo executando na porta 80 ou 3306.

Abra o terminal no diretório onde você clonou o projeto e rode os comando abaixo em sequência:

docker-compose build
docker-compose up -d
docker exec -it quiz_web_1 bash


O último comando vai entrar no container. Deste modo basta executar os comandos abaixo dentro do container:

composer install
cp .env.local .env
chown -R www-data:www-data /var/www/html/storage/
php artisan migrate
php artisan db:seed

docker-compose down
