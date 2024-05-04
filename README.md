# Project Viewer

### Este é um projeto WordPress e neste projeto foram utilizados:
WordPress, PHP, Gulp, Webpack, SCSS, Contact Form 7, ACF.


## Instalando e Executando
### É recomendado o uso do DOCKER para executar o projeto.

1. Após clonar o repositório navegue através do terminal até ```scr/wp-content/themes/defaultTheme``` e execute o comando:
```
npm install
```

2. Após a instalação ser concluída, retorne ao diretório raiz do projeto através do seu terminal e execute o comando:
```
docker compose up
```

3. Acesse o PHPMyAdmin ```http://localhost:8082/``` e faça a importação do banco de dados utilizando o arquivo ```database.sql```
````
Após logado no PHPMyAdmin (user: admin | Password: admin) 
basta clicar em "DATABASE" no menu lateral esquerdo e em seguida clicar em "IMPORTAR" no menu superior.
Agora basta selecionar o arquivo clicando no botão "ESCOLHER ARQUIVO" e clicar em "IMPORTAR" na parte inferior da página
````

4. Todas as credenciais do projeto encontram-se no arquivo ```docker-compose.yml```.

## Comportamento do site

## Página Home
1. Lista aleatóriamente 6 projetos postados no site.
2. Cada projeto ao ser clicado redireciona para a página de detalhes do projeto.

## Página Projetos
1. Assim como a Home, 6 projetos são listados.
2. No canto superior existe uma barra de busca por categoria do projeto. Ao selecionar uma categoria serão exibidos apenas os projetos correspondentes.
4. Cada projeto ao ser clicado redireciona para a página de detalhes do projeto.

## Página Contato
1. A página de contato existem 4 campos, nome, e-mail, telefone e um campo para mensagem seguido do botão 'enviar'.

## Página Detalhes do Projeto
1. A página de detalhes do projeto exibe o nome, data, tipo e um banner referente ao projeto, além de todo o seu conteúdo.
2. Existe um botão logo abaixo do banner do projeto para acessar um link externo do projeto.
3. Ao fim da página é possível encontrar recomendações do que explorar a seguir.
