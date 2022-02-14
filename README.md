Tecnologia em Análise e Desenvolvimento de Sistemas

Setor de Educação Profissional e Tecnológica - SEPT

Universidade Federal do Paraná - UFPR

---

*DS120 - Desenvolvimento de Aplicações Web 1*

Prof. Alexander Robert Kutzke

# Trabalho Prático de WEB I

## Sistema de controle de clientes

A plataforma desenvolvida consiste em um sistema de controle de clientes, que possibilita a visualização de clientes já cadastrados, a edição de suas informações e exclusão dos registros caso necessário.

## Ambiente de Desenvolvimento

* Front-end
    * Framework: Bootstrap e recursos CSS;
    * Validação de campos: Jquery e Javascript;

* Back-end
    * Linguage de programação: PHP;
    * Banco de dados: MySql;
    * Outros: Vagrant;

## Pré-requisitos

### Obrigatório

* PHP 7.3
* Apache HTTP Server 2.4.38
* MySQL 5.7

### Opcional

* Git 2.33 (Ou superior)

## Execução do projeto

*É necessário que as [tags curtas](https://www.php.net/manual/pt_BR/language.basic-syntax.phptags.php) estejam habilitadas e os avisos desativados no servidor PHP.*

### Ambiente Linux

1. Para executar o projeto, efetue o download ou o colone desse repositório.
```
git clone https://github.com/igorjuancc/controle-clientes.git
```
2. Acesse o MySQL via console ou Workbench e execute o script *ScriptBD.sql* encontrado na pasta raiz desse projeto.
3. Copie todos os arquivos da pasta controle-clientes para o diretório padrão do PHP *(Normalmente /var/www/html)*. 
4. Altere o arquivo *credentials.php* com os dados de configuração do banco de dados do seu computador.
5. Execute os softwares PHP e Apache e utilize o navegador de internet para testar a aplicação.

<table>
      <tr align="center">
        <th>Lista de Clientes</th>
        <th>Formulário de Cadastro</th>
      </tr>
      <tr>
        <td>
          <img height="250vh" width="600vw" src="https://github.com/igorjuancc/documentacao/blob/main/SGR/Telas/Morador/LoginMorador%20-%201.1.PNG" />
        </td>
        <td>
          <img height="250vh" width="600vw" src="https://github.com/igorjuancc/documentacao/blob/main/SGR/Telas/1.LoginFuncionario.PNG" />
        </td>
      </tr>  
    </table> 

## Sobre

O projeto de controle de clientes foi desenvolvido como requisito de avaliação parcial da disciplina DS120 - Desenvolvimento de Aplicações Web 1, do curso de Tecnólogia em Análise de Desenvolvimento de Sistemas, do Setor de Educação Profissional e Tecnológica da Universidade Federal do Paraná, sob orientação do Prof. Alexander Robert Kutzke, no ano de 2019.

## Autor
<a href="https://br.linkedin.com/in/igor-juan-cordeiro-da-costa-2b4a77101">
<img src="https://avatars.githubusercontent.com/u/50890812?s=400&u=566e615dd1691c75eabd1dcb4ba749be82d1e86c&v=4" width="100px;" alt="Igor Juan" />
</a>
<br />
<a href="https://br.linkedin.com/in/igor-juan-cordeiro-da-costa-2b4a77101" target="_blank"> > Igor Juan < </a><br /><br />
Desenvolvido por Igor Juan 🤙<br />
Em caso de dúvidas, sugestões e informações, entre em contato: <br /> 
<a href="https://br.linkedin.com/in/igor-juan-cordeiro-da-costa-2b4a77101" target="_blank"> <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white" target="_blank"> </a>
<a href="https://www.facebook.com/igorjuan.cordeirodacosta" target="_blank"> <img src="https://img.shields.io/badge/Facebook-1877F2?style=for-the-badge&logo=facebook&logoColor=white" target="_blank"> </a>
<a href="https://twitter.com/zig_cwb" target="_blank"> <img src="https://img.shields.io/badge/Twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white" target="_blank"> </a>
<a href="https://github.com/igorjuancc" target="_blank"> <img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white" target="_blank"> </a>
