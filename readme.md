Informações sobre o projeto:<br>

Criador: Henrique Duarte Guerra<br>
Banco de dados utilizado: sqlite;<br><br>

Projeto realizado para fins educacionais, com base no curso de 4 horas de laravel disponibilizado gratuitamente pelo canal no Youtube "freeCodeCamp.org", o qual pode ser visualizado nesse link: https://www.youtube.com/watch?v=ImtZ5yENzgE&list=PLlJLlo0qFFrqWnIqDjBaRIPgMrrmmf0Iv&index=9&t=4276s<br><br>
O objetivo desse projeto é criar uma rede social, bastante inspirada no Instagram, na qual o usuário tem a possibilidade de criar um perfil, postar publicações, editar informações do perfil (Como imagem de perfil e descrição), seguir outros usuários e visualizar as publicações de quem você segue na página inicial do site. O perfil do usuário possui informações do número de publicações feitas por ele, a quantidade de pessoas que o seguem e a de que ele segue. As publicações postadas são apresentadas em ordem decrescente de publicação, assim como é normalmente em redes sociais. O usuário só pode editar ou postar publicações no próprio perfil (Em outros perfis, essas opções não são mostradas).

Necessário ter o composer instalado no sistema para executar o projeto;<br><br>

Tutorial de uso:<br>

Vá ao terminal e localize a pasta onde o projeto foi salvo.<br>
Execute o comando "composer install" para instalar o composer na pasta do projeto. Logo após, crie um arquivo chamado "database.sqlite" na pasta "database" do projeto.<br>

Feito isso, execute o comando "copy .env.example .env" (esse comando é necessário pois cria uma cópia do arquivo ".env.example", nomeada ".env"). Em seguida, execute "php artisan migrate". Execute "php artisan key:generate", em seguida o comando "php artisan storage:link", e logo após, execute "php artisan serve", e deixe o terminal aberto durante o uso do site.<br>

Após executar o comando "php artisan serve", aparecerá na tela do terminal um link, copie e cole ele no seu browser de preferência. O site abre na página de login, se você ainda não tiver um cadastro no site, clique em "Register" no canto superior direito. Na página de registro há 5 campos para serem preenchidos: Name, Email Address, Username, Password, Confirm Password. Ao terminar de preencher os campos clique no botão "Register". Você será logado automaticamente, e redirecionado à página inicial. A página inicial é aonde irão aparecer publicações daqueles que você segue no site. Na página inicial há o botão "Your Profile", ao clicar nele, você é redirecionado ao seu perfil. Para editar dados do seu perfil, clique em "Edit Profile". Para postar publicações, clique em "Add new Post". Caso precise retornar à página inicial, é só clicar em "projetoInstagram", no canto superior esquerdo da tela. Você pode deslogar da sua conta clicando no seu nome de usuário no canto superior direito, e em seguida em "Logout".<br> 
Para visitar perfis de outros usuários, é necessário saber o ID deles. Tendo o ID de outro usuário, acrescente-o na url do site, na frente de "profile/". Exemplo de como fica a url: http://127.0.0.1:8000/profile/1 <br>
Para seguir um usuário, clique no botão "Follow". Para deixar de seguir alguém, clique em "Unfollow".





<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

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

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
