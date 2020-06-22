# CRUD de Contatos

Esta é um exercício para testar seus conhecimentos básicos de PHP, MySQL e padrões de projeto. Sua tarefa consiste em:

 1. Criar uma tabela de **usuários** no banco de dados;
 2. A tabela deve conter NOME, EMAIL, SENHA, ATIVO, DATA DE CRIAÇÃO e DATA DE ATUALIZAÇÃO;
 3. Você deverá fazer o CRUD (**C**reate, **R**ead, **U**pdate e **D**elete) dessa tabela em questão;

Observe que já tem um CRUD de **contatos**, então queremos melhorá-lo.

 1. O que você faria para melhorá-lo?

    a. Incluir uma checagem caso um ou todos os campos estejam vazios ou sejam invalidos (Incluir /regex/ para validar e-mail e telefone, por exemplo);
    b. Incluir possível remorção de atributos HTML das entradas, utilizando htmlspecialchars.

 2. Como fazer uma alteração para incluir uma exclusão lógica nesse modelo?

    Definir um atribute que dá ou não acesso ao dado (atribui ou não visibilidade), algo semelhante ao o que foi utilizado na tabela "usuario", como o atributo "ativo"

 3. Quais padrões de projetos você identifica nesse projeto e quais você poderia implementar?

    Padrão Singleton, que cria classes que são utilizadas intermanente
    
 4. Como incluir tratamento de exceção?
   Utilizando try/catch. 

Pode responder essas perguntas num **.txt**, colocar na pasta do projeto e commitar.

  

Você terá um total de **4 horas** para implementar a solução. Não se preocupe com layout. O importante é o domínio das questões técnicas levantadas. Que a força esteja com você! :)
