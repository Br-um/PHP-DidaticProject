<?php
//  Aqui podemos ver um include simples include para puxarmos o arquivo de outra pasta e printarmos uma variável $nome na tela o qual retornaria o nome 'henrique'.
    include('/a/b/c/nome.php');

    echo $nome;
//      Podemos ver que o código não apresenta nenhum erro em arquivo, mas quando executamos no navegador recebemos:

//      Warning: include(/a/b/c/nome.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\Php\1-errors\2-semântica\index.php on line 3
//      Warning: include(): Failed opening '/a/b/c/nome.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\Php\1-errors\2-semântica\index.php on line 3
//      Warning: Undefined variable $nome in C:\xampp\htdocs\Php\1-errors\2-semântica\index.php on line 5

//      MINHA NOSSA QUANTOS ERROS!!! Mas fique tranquilo, esse tipo de erro é um dos mais irritantes de encontrar pois enquanto estamos programando ele não nos acusa nada.
//      Então vamos direto ao ponto, onde esta o erro? ele esta no 'include(/a/b/c/nome.php)' queremos pegar a variável do arquivo que está dentro desse jogo de pastas
//      mas ele não está encontrando, isso porque ocorre um erro de semântica na declaração das pastas, o certo seria: include('a/b/c/nome.php') ou include('./a/b/c/nome.php'),
//      percebe que trocamos o primeiro '/' do include por apenas o nome da primera pasta ou './', usamos isso pois a primeira pasta que iremos abrir esta na mesma camada que nossa index.php.
//      mas e se o arquivo index.php estivesse dentro de uma pasta e a pasta que queremos acessar estive fora dessa pasta? ai usaremos '../' para sair uma camada e ai executar o resto do comando
//      por exemplo include('../a/b/c/nome.php').
//      Pode parecer um erro idiota mas é encontrado até por grandes projetos em seus testes basta só uma pequena falta de atenção, então preste atenção em cada declaração e no que esta codando. 



?>