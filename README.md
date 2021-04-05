# Sistema para registros de pontos
Este é um simples sistema de registro de pontos desenvolvido com Banco 
de dados MYSQL, PHP, Laravel, Jestream e Liveware.

- Antes de rodar este projeto cetifique-se de ter instalado em sua máquina as seguintes ferramentas:
- O banco de dados MYSQL; 
- PHP; 
- Composer; 
- NODEJS. 

## Como Instalar
- Primeiramente certifique-se de ter instalado.
- [MYSQL]('https://www.mysql.com/downloads/')
- [PHP]('https://www.php.net/downloads.php)
- [NODEJS]('https://nodejs.org/en/download/')
- [COMPOSER]('https://getcomposer.org/download/')
- Faça o clode desse repositório
- Use $ git clone git clone https://hedleyLima@bitbucket.org/hedleyLima/point-register.git
ˋˋˋ
- Rode o comando: 
~~~PHP
 composer update --no-scripts
~~~
- Rode os comandos:
~~~Nodejs
  $npm install && $npm run dev
~~~~
- Crie um banco de dados mysql com nome point_register.
- O usuário padrão para o banco de dados é root sem senha.
- Caso necessário você pode alterar as credenciais no arquivo .env.

> Obs: Este projeto já inclue o arquivo .env para facilitar a instalação.
> Embora seja uma má prática enviar o arquivo .env para o repositório este
> projeto não contepla dados sigiloso, portanto não há problema.

- Rode o comando:
  $ php artisan migrate
- Rode o comando:
  $ php artisan db:seed
- Rode o comando:
  $ php artisan serve

- Pronto o sistema estará rodando na url http://localhost:8000
> Obs: Caso prefira este projeto contempla em sua pasta raiz um arquivo chamado BANCODEDADOS.sql, 
> você pode iniciar e popular o seu banco de dados com ele.
  
  - você pode utilizar as credencias: 
  - Login: ticto@ticto.com
  - Senha: password
 ˋˋˋ

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
