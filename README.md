# Etapas para execução
### 1. Banco de Dados
Criei o banco de dados no SQL, pelo PHPMyAdmin.
### 2. Conexão
Criei o arquivo db.php, fazendo o vínculo com o banco de dados.
### 3. Página principal
Criei o index.php e incluí o db.php.
### 4. Includes
Criei os arquivos footer.php e header.php com os scripts e frameworks, para incluir eles nos arquivos, padronizando e evitando retrabalho.
### 5. Formulário
Criei o formulário no index.php e fiz o vínculo com o save_task.php.
### 6. Novos dados
Criei o save.task.php para salvar os dados inseridos no formulário no banco de dados e dar alerta de confirmação ou erro de gravação.
### 7. Exibição dos dados
Criei uma tabela no index.php para exibir os dados existentes no banco de dados.
### 8. Edição
Criei o edit.php, que quando ativado abre um novo formulário para fazer a edição dos dados do banco de dados e apliquei um ícone com link para ele na tabela de exibição no index.php.
### 9. Deletar
Criei o delete_task.php para apagar os dados do banco de dados e apliquei um ícone com link para ele na tabela de exibição no index.php.
### 10. Testes
Testei a aplicação, identifiquei um erro no banco de dados e corrigi. O telefone estava como INT, que tem um valor máximo de 2.147.483.647, então todos os telefones cadastrados ou alterados ficavam com este número.
### 11. Entrega - github
Os arquivos foram todos disponibilizados no github, no seguinte endereço: https://github.com/ivanmatuck/desafio_frontend
### 12. Entrega - hospedagem
Não foi solicitado, mas como o teste envolve banco de dados, que teria que ser hospedado em localhost na máquina de quem fosse testar para funcionar, hospedei o teste de forma funcional no seguinte endereço (cedido por um amigo): Link: https://www.testecrudivan.decolandonabanca.com.br/index.php
### 13. README
Finalizei agora o README com os passos e vou fazer o upload no github.
### 14. CORREÇÃO
Alterei as tags dos campos do formulário de cadastro para as atuais e corretas do HTML5, para que verique se o e-mail é válido, por exemplo, e coloquei a função required, para que não aceite mais os campos vazios.

### Obrigado pela oportunidade!

# Screenshot
![](docs/screenshot.png)

