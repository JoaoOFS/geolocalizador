# Geolocalizador

Este é um projeto Laravel que utiliza a API do **Nominatim** (OpenStreetMap) para converter endereços em coordenadas geográficas (latitude e longitude) e calcular a distância entre dois pontos usando essas coordenadas.

## Funcionalidades

- **Converter Endereço para Coordenadas:** Recebe um endereço e retorna as coordenadas geográficas correspondentes (latitude e longitude).
- **Calcular Distância entre Dois Pontos:** Calcula a distância entre dois pontos geográficos com base nas suas coordenadas.

## Tecnologias Utilizadas

- **Laravel:** Framework PHP utilizado para construção do sistema.
- **Nominatim API (OpenStreetMap):** API de geocodificação para converter endereços em coordenadas.
- **Guzzle HTTP Client:** Usado para realizar as requisições HTTP para a API do Nominatim.

## Pré-requisitos

Para rodar o projeto em sua máquina local, você precisará do seguinte:

- PHP 8.0 ou superior.
- Composer.
- Um servidor web como Apache ou Nginx.
- Banco de dados MySQL ou SQLite (para persistir dados).

## Instalação

### Passo 1: Clonar o repositório

Clone o repositório para o seu ambiente local:

```bash
git clone https://github.com/seu-usuario/geolocalizador.git
cd geolocalizador
```


Passo 2: Instalar dependências
Execute o Composer para instalar as dependências do Laravel:
```bash
composer install
```


Passo 3: Configurar o ambiente
Crie o arquivo .env a partir do arquivo .env.example:
```bash
cp .env.example .env
```

Passo 4: Gerar a chave da aplicação
Gere a chave de criptografia para a aplicação:
```bash
php artisan key:generate
```

Passo 5: Configurar o banco de dados
Configure o banco de dados no arquivo .env:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

Passo 6: Rodar as migrações (se houver)
Se você tiver migrações para rodar (no caso de persistir dados, como as coordenadas), execute:
```bash
php artisan migrate
```

## Como Usar

### 1. Converter Endereço para Coordenadas

- Acesse a interface web onde você pode inserir um endereço no campo indicado.
- Após inserir o endereço, clique no botão **"Buscar Coordenadas"**.
- A aplicação fará uma requisição para a API do Nominatim e exibirá as coordenadas geográficas (latitude e longitude) correspondentes ao endereço fornecido.

### 2. Calcular Distância entre Dois Pontos

- Na mesma interface, insira as coordenadas (latitude e longitude) de dois pontos geográficos nos campos respectivos.
- Clique no botão **"Calcular Distância"**.
- A aplicação calculará a distância entre os dois pontos inseridos e exibirá o valor da distância em quilômetros.

### Exemplos de Uso

#### Converter Endereço para Coordenadas
- **Endereço:** São Paulo
- **Coordenadas:**
  - Latitude: -23.550520
  - Longitude: -46.633308

#### Calcular Distância entre Dois Pontos

- **Ponto 1:**
  - Latitude: -23.550520
  - Longitude: -46.633308

- **Ponto 2:**
  - Latitude: -22.906847
  - Longitude: -43.172897

- **Distância Calculada:** 354.5 km

---

## Contribuições

Se você deseja contribuir para este projeto, siga os passos abaixo:

1. **Fork o repositório** para sua conta GitHub.
2. **Crie uma branch** para a sua feature:
   ```bash
   git checkout -b feature/nome-da-feature




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

