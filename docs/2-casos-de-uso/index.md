# Casos de uso

## 1. Diagrama de casos de uso


![Diagrama dos casos de uso](UseCaseDiagram1.png)

## 2. Especificação dos casos de uso

**Instruções do professor**: Para cada caso de uso, criar as tabelas com a especificação do caso de uso. Siga o exemplo dado abaixo:

### 2.1. Caso de uso **Consultar Faculdades**

| Campo          | Informação        |
|---|---|
| Identificador: | CSU01              |
| Nome:          | Consultar Faculdades. |
| Atores:        | Usuário (Funcionários/Professores/Alunos/Tercerizados). |
| Sumário:       | Consultar informações da faculdade. |

| Fluxo Principal |
|---|
| 1) O Usuário acessa a lista de **Faculdades**. |
| 2) O Usuário localiza a Faculdade desejada.             |
| 3) Aplicação retorna a página com as informações da faculdade. |

### 2.2. Caso de uso **Consultar Restaurantes**

| Campo          | Informação        |
|---|---|
| Identificador: | CSU02              |
| Nome:          | Consultar Restaurantes. |
| Atores:        | Usuário (Funcionários/Professores/Alunos/Tercerizados). |
| Sumário:       | Consultar informações do restaurante. |

| Fluxo Principal |
|---|
| 1) O Usuário acessa a lista de **Restaurantes**. |
| 2) O Usuário localiza o Restaurante desejado.             |
| 3) Aplicação retorna a página com as informações do Restaurante. |

### 2.3. Caso de uso **Propor Mudança**

| Campo          | Informação        |
|---|---|
| Identificador: | CSU03              |
| Nome:          | Propor Mudança. |
| Atores:        | Usuário (Funcionários/Professores/Alunos/Tercerizados). |
| Sumário:       | Propor alguma mudança da página ao Administrador. |

| Fluxo Principal |
|---|
| 1) O Usuário acessa a lista. |
| 2) O Usuário localiza o local desejado.             |
| 3) Aplicação retorna a página com as informações do local. |
| 3) O Usuário clica no campo "Alterar". |
| 4) A aplicação retorna a página com campos a serem alterados. |
| 5) O Usuário faz as alteração e clica em "Enviar". |
| 6) A aplicação envia a proposta de mudança para a conta do Administrador. |

| Fluxo Alternativo |
|---|
| 1) O Usuário acessa a lista. |
| 2) O Usuário localiza o local desejado.             |
| 3) Aplicação retorna a página com as informações do local. |
| 3) O Usuário clica no campo "Alterar". |
| 4) A aplicação retorna a página com campos a serem alterados. |
| 5) O Usuário clica em "Cancelar". |
| 6) A Aplicação retorna a página do local. |
