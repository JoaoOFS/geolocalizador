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
