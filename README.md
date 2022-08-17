# Acessando_banco_de_dados_PDO_CRUD_com_PDO
**Acessando banco de dados, PDO, CRUD com PDO**

__Passos__
1. Criar base de dados como utf8mb4_unicode_ci
1. Criar tabela usuarios via SQL
    ```
     create table `usuarios`(

    `id` int not null auto_increment primary key,

    `nome` varchar(100) not null,

    `email` varchar(100) not null

   )ENGINE=INNODB DEFAULT charset = utf8mb4; 
    ```
1. Inserir dados na tabela usuarios ...   
1. Criar arquivo de configuração da Base de Dados
1. Adicionar elementos aos campos criados na Base de Dados
1. Abrir o index.php para acompanhar o exemplo 

  *   __obs: A pasta  com o progeto deve estar em **C:\xampp\htdocs\Nome_da_Pasta**, para que o PHP tenho acesso ao MYSQL__