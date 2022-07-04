# CRUD-loja-de-carros! <img src="https://user-images.githubusercontent.com/73439911/177043950-1fdf206e-1cff-461f-ade4-0efdd7b6f6c7.png" alt="Logomarca do sistema: CarToday" title="Logomarca/nome do sistema: CarToday" height="60" width="240" align="right"/>

## Sobre:

<p>Sistema de gerenciamento de estoque de carros com operações de <strong>CRUD</strong> e <strong>geração de relatórios</strong>, estilizado com o framework de CSS, Materialize.<p>
  
<div align="center"><img src="https://user-images.githubusercontent.com/73439911/177041841-639b20ed-6c4a-4119-b188-2aa76e903b43.gif" alt="Home Page do sistema"/></div>
  
### Operações de CRUD:

  #### [READ](consultar.php "Código da operação")
  <p>Ao entrar no sistema, a página de consulta é aberta exibindo todos os carros armazenados em estoque, com seus devidos atributos:</p>
  
  <div align="center"><img src="https://user-images.githubusercontent.com/73439911/177045598-943d237e-0d91-4de2-ba91-e566ef3fdb00.gif" alt="Página de consulta"/></div>

  <p>Também são exibidos,ao lado de cada carro, botões de edição e exclusão.</p>  
  
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
  
