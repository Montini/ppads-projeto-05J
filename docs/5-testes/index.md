# Plano de testes

Para cada caso de uso, elabore um **procedimento de teste** para testar o cenário principal.

**Nome do caso de uso:** Fazer Login

**Preparação:**

* Logar no sistema como Administrador.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Clicar no link **Faculdades -  Restaurantes - Prédios** | Apresentação da tela com lista de Faculdade, Restaurante e Prédios |
| 2 | Acessar **Área do administrador** | Apresentação da tela de login do sistema |
| 3 | Preencher os campos **login** e **password** com os dados do **Admin**  | Apresentação do painel do Administrador |



**Nome do caso de uso:** Incluir Estabelecimento 

**Preparação:**

* Incluir um novo Prédio na lista  de Prédios.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Acessar **Área do administrador** | Apresentação da tela de login do sistema |
| 2 | Clicar no link **Incluir** | Apresentação da lista com as categorias |
| 3 | Selecionar a categoria **Prédio**  | Apresentação da tela com formulário para cadastro |
| 4 | Preencher formulário com as informações do Prédio | |
| 5 | Clicar no link **Incluir** | Apresentar tela confirmando a operação e redirecionar para a página do Administrador |



**Nome do caso de uso:** Editar Estabelecimento 

**Preparação:**

* Editar as informações da Faculdade.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Acessar **Área do administrador** | Apresentação da tela de login do sistema |
| 2 | Clicar no link **Editar** | Apresentação da lista com as categorias |
| 3 | Selecionar a categoria **Faculdade**  | Apresentação da tela com a lista de Faculdades cadastradas|
| 4 | Clicar no link **FCI** | Apresentação da tela com os campos já preenchidos com as informações da Faculdade |
| 5 | Alterar o campo com o **Número do Prédio** |  |
| 6 | Clicar no link **Alterar** | Apresentação da página com a confirmação da operação e redirecionar para a área do administrador |



**Nome do caso de uso:** Excluir Estabelecimento 

**Preparação:**

* Excluir uma Prédio.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Acessar **Área do administrador** | Apresentação da tela de login do sistema |
| 2 | Clicar no link **Excluir** | Apresentação da lista com as categorias |
| 3 | Selecionar a categoria **Prédios**  | Apresentação da tela com a lista de Prédios cadastrados|
| 4 | Clicar no link **Auditório Ruy Barbosa** | Apresentação da página com a confirmação da operação e redirecionar para a área do administrador|



**Nome do caso de uso:** Consultar Prédios 

**Preparação:**

* Consultar um Prédio na lista de Prédios.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Clicar no link **Faculdades -  Restaurantes - Prédios** | Apresentação da tela com lista de Faculdade, Restaurante e Prédios |
| 2 | Clicar no link **Prédios**  | Apresentação da lista de Prédios cadastrados|
| 3 | Clicar no link **31- Edifício Paulo Breda Filho** | Apresentação da página com as informações do Prédio 31 - Edifício Paulo Breda Filho|



**Nome do caso de uso:** Consultar Faculdades 

**Preparação:**

* Consultar uma Faculdade na lista de Faculdades.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Clicar no link **Faculdades -  Restaurantes - Prédios** | Apresentação da tela com lista de Faculdades|
| 2 | Clicar no link **Prédios**  | Apresentação da lista de Prédios cadastrados|
| 3 | Clicar no link **EE- Escola de Engenharia** | Apresentação da página com as informações da Escola de Engenharia|



**Nome do caso de uso:** Consultar Restaurantes 

**Preparação:**

* Consultar um Restaurante na lista de Restaurantes.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Clicar no link **Faculdades -  Restaurantes - Prédios** | Apresentação da tela com lista de Faculdade, Restaurante e Prédios |
| 2 | Clicar no link **Restaurantes**  | Apresentação da lista de Prédios cadastrados|
| 3 | Clicar no link **Starbucks Coffee** | Apresentação da página com as informações do Restaurante Starbucks Coffee|



**Nome do caso de uso:** Reportar Erro 

**Preparação:**

* Reportar um erro na págino da Faculdade.

**Procedimento de teste:**

| Passo | Procedimento | Resultado esperado |
| --- | --- | --- |
| 1 | Clicar no link **Faculdades -  Restaurantes - Prédios** | Apresentação da tela com lista de Faculdades |
| 2 | Clicar no link **FCI - Faculdade de Computação e Informática** | Apresentação da página com as informações da Faculdade de Computação e Informática|
| 3 | Clicar no link **Sugerir alteração** | Apresentação da tela com informações da Faculdade de Computação e Informática e campo para sugerir alteração |
| 4 | Sugerir uma alteração | |
| 5 | Clicar no link **Enviar** | Apresentação da tela confirmando o envio da sugestão e redirecionar para a página da Faculdade de Computação e Informática |
 
