<?php
// Pode parecer que não mas esse é o erro mais recorrente em todo código que é executado pela primeira vez.

    $nome = "henrique" // Aqui podemos ver que a variável foi declarada sem o ponto e vírgula, diferente de javascript o php faz essa cobrança no final de cada código.

    echo $nome;
//     Ao rodar o programa e tentar exibir o 'echo' reberemos esse erro:
//     Parse error: syntax error, unexpected token "echo" in C:\xampp\htdocs\Php\1-errors\1-sintaxe\index.php on line 6.

//     Vejam que ele acusou a linha 6 como um erro e não a linha 4 onde foi declarada a variável, isso porque a linha 6 no qual fecha o com ";"
//     está finalizando uma linha de código, então o navegador leria como ' $nome = "henrique" echo $nome ' o que daria um conflito pois a variável
//     estaria recebendo o 'echo' junto de seu atributo.
?>