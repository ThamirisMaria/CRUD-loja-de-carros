# CRUD-loja-de-carros! <img src="https://user-images.githubusercontent.com/73439911/177043950-1fdf206e-1cff-461f-ade4-0efdd7b6f6c7.png" alt="Logomarca do sistema: CarToday" title="Logomarca/nome do sistema: CarToday" height="60" width="240" align="right"/>

### Table of Contents
**[Sobre](#sobre)**<br>
**[Operações de CRUD](#operações-de-crud)**<br>
    *[-- CREATE](#create)*<br>
    *[-- READ](#read)*<br>
    *[-- UPDATE](#update)*<br>
    *[-- DELETE](#delete)*<br>
**[Tecnologias Utilizadas](#tecnologias-utilizadas)**<br>
**[Como Testar e/ou Contribuir](#pré-requisitos)**<br>
**[Possíveis Melhorias](#possíveis-melhorias)**<br>

## Sobre:

<p>Sistema de gerenciamento de estoque de carros com operações de <strong>CRUD</strong> e <strong>geração de relatórios</strong>, estilizado com o framework de CSS, Materialize.<p>
  
<div align="center"><img src="https://user-images.githubusercontent.com/73439911/177041841-639b20ed-6c4a-4119-b188-2aa76e903b43.gif" alt="Home Page do sistema"/></div>
  
### Operações de CRUD:

  #### [READ](consultar.php "Código da operação")
  <p>Ao entrar no sistema, a página de consulta é aberta exibindo todos os carros armazenados em estoque, com seus devidos atributos:</p>
  
  <div align="center"><img src="https://user-images.githubusercontent.com/73439911/177045598-943d237e-0d91-4de2-ba91-e566ef3fdb00.gif" alt="Página de consulta"/></div>

  <p>Também são exibidos,ao lado de cada carro, botões de edição e exclusão.</p> 

  #### [CREATE](adicionar.php "Código da operação")
  <p>Clicando no botão de adição, a página de adicionar é exibida. Nela, o usuário pode cadastrar novos carros no sistema.</p>

   <div align="center"><img src="https://github.com/ThamirisMaria/CRUD-loja-de-carros/assets/73439911/bcf207ec-c02f-4d0f-aefc-93a1d457922e.gif" alt="Página de consulta"/></div>

  <p>Ao clicar no botão "adicionar", o novo carro com suas respectivas características é salvo no banco de dados e o usuário é redirecionado de volta para a página de consulta, que já exibirá as informações atualizadas.</p>
    
  #### [UPDATE](./php_action/update.php "Código da operação")
  <p>Clicando no botão de edição, a página de edição é aberta e o usuário pode editar o conteúdo dos atributos do carro respectivo:</p>
  
  <div align="center"><img src="https://user-images.githubusercontent.com/73439911/177048676-46ac4b42-51ed-4640-92a6-ed983ecc51d1.gif" alt="Página de consulta"/></div>

  <p>Ao clicar no botão "editar", as alterações são salvas no banco de dados e o usuário é redirecionado de volta para a página de consulta, que já exibirá as informações atualizadas.</p>
  
  #### [DELETE](./php_action/delete.php "Código da operação")
  <p>Clicando no botão de exclusão, um modal com a descrição do carro respectivo aparece perguntando ao usuário se ele realmente deseja realizar esta operação:</p>
  
  <div align="center"><img src="https://user-images.githubusercontent.com/73439911/177173071-40454e85-4622-4b44-be54-dd4e1d4b744f.gif" alt="Modal da operação delete"/></div>
  
  <p>Assim que o botão "Sim, excluir" é clicado, o carro é excluido do banco de dados e a página de consulta é atualizada, caso contrário o modal apenas se fecha.</p>

## Tecnologias Utilizadas:

<div align="center">
  <img src="https://user-images.githubusercontent.com/73439911/176926256-a90c72af-21ab-45a2-86c9-5c1028fdd482.svg" alt="php" height="50" width="50"/>&nbsp;
  <img src="https://user-images.githubusercontent.com/73439911/176584004-4ae4d895-875d-4368-996f-d3e29835e306.svg" alt="html" height="50" width="50"/>&nbsp;
  <img src="https://user-images.githubusercontent.com/73439911/176584178-3e67282b-0a66-4846-a152-4045012cb713.svg" alt="css" height="50" width="50"/>&nbsp;
  <img src="https://user-images.githubusercontent.com/73439911/177046303-6297ce6e-edf6-4a13-ad21-c849c6ca4834.png" alt="materialize" height="40" width="50"/>&nbsp;
  <img src="https://user-images.githubusercontent.com/73439911/176584329-56924e91-e560-4c8e-921d-c0eabd6b481e.svg" alt="mysql" height="50" width="50"/>&nbsp;
</div>

## Pré-requisitos

**XAMPP**: Acesse o site [Apache Friends](https://www.apachefriends.org/) e siga as instruções de instalação do XAMPP (Apache, MySQL, PHP e Pearl) de acordo com o seu sistema operacional.

## Instalação e desenvolvimento

### Passo 1: Clonar o repositório

Acesse a pasta de instalação do Xampp e, dentro da pasta "htdocs", clone o repositório do projeto usando o Git ou baixando o código-fonte como um arquivo ZIP e descompactando-o dentro da pasta.

```
cd \xampp\htdocs
git clone https://github.com/ThamirisMaria/CRUD-loja-de-carros.git
```

### Passo 2: Configurar o banco de dados

Na raíz deste projeto, existe um arquivo chamado _relatorio.sql_, copie o seu conteúdo e utilize-o para criar um novo banco de dados com o phpMyAdmin ou MySQL.

## Contribuindo

Se você deseja contribuir para este projeto, sinta-se à vontade para abrir um pull request ou uma issue. Todas as contribuições são bem-vindas!

## Possíveis melhorias:

### Funcionalidade

* Criar a função de pesquisar e filtrar carros específicos.

### Segurança

* Criar função de cadastro e login de usuários, com opções de cargos de administrador do sistema ou visitante.
* Validar informações ao editar ou criar novo carro.

### Interface

* Fixar header da página de consulta assim como as headers da sua tabela ao <i>scrollar</i> a página.
* Highlight no botão de menu da página atual.
* Fixar rodapé.
  
