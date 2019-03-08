# Vetores e matrizes: estrutura dados

## Para os exemplos dados, considere:

```
$i = indice da lista
$n = posição atual na lista
$max = número máximo de posições do array
$vI (vetor item) = item sendo inserido/removido
$limiteInf = número mínimo de posições no array
$limtieSup = número máximo de posições no array
```
** Considere também que estamos utilizando php, então algumas partes das funções apresentadas não são necessárias já que no php podemos incluir itens além do valor máximo estabelecido para aquele vetor (desde que isso não tenha sido "proíbido" no código, claro, aqui vamos considerar que este último foi o caso).

## Algorítimos Utilizados:
#### Inserção ordenada (selection sort): 
Escaneia um array não ordenado em busca do próximo elemento que pode ser incluído nele (não é o algorítimo mais eficiente para fazer isso).

1. Começando com um array qualquer, temos que saber o tamanho do array e o que queremos incluir.
```
function adicionarItens($arr, $vI) {
    $max = sizeof($arr) - 1;
    // continua...

```

2. Depois verificandos se a posição atual na lista é menor do que o tamanho do array:

```
    if ($n < $max) {
        // O valor do índice atual terá o valor inserido no mesmo
        $i = $arr[$i]; // $arr[$i] = $n
```
3. Agora temos que procurar a posição pare inserir o item:

```
        /* Enquanto o índice da lista for maior do que zero e o valor do índice máximo do
        vetor for menor do que o valor do item a ser inserido */
        while ($i > 0 && $max > $vI) {
          // o índice será diminuído e o seu valor será igual ao da posição anterior
            $arr[$i] = $arr[$i - 1];  
            $i -= 1;
        } // Fim while
```
4. Encontrando a posição em que o número deve ser inserido
```
        // até achar a posição em que o número que se quer inserir pode ser inserido
        $arr[$i] = $vI;
     } // Fim if
```

5. Caso a posição procurada seja maior do que a posição existente (se quiser adicionar mais números do que o que é possível)**
```
else {
        // Retornar overflow da lista
        return "Overflow";
    } // Fim Else
} // Fim Função
```

#### Remoção Ordenada:


1. Começando com um array qualquer, temos que saber o tamanho do array e o que queremos remover.
```
function removerItens($arr, $vI) {
```

2. Depois verificandos se o índice deste item é menor do que o índice atual:
```
    if ($i < $arr[$i]) {
        $arr[$i] -= 1;
```

3. Enquanto este for o caso, aumentamos o valor (logo o índice) do item do vetor:
```
        while ($i < $vI) {
            $arr[$i] = $arr[$i] + 1;
            $i += 1;
        } // Fim while
 ```
 
 4. Caso o índice do item seja maior do que índice atual, retornarmos um erro:
 ```
    } else {
        return "Erro";
    } // Fim if

} // Fim função
```

#### Busca Binária:
É uma forma eificiente de encontrar um item em uma lista ordenada de itens.

1. Um vetor qualquer, primeiro dizemos qual é o menor e qual é o maior índice do array:

```
function procurarItens($arr, $p) {
    $limiteInf = 0;
    $limiteSup = sizeof($arr) - 1;
```

2. Enquanto o menor índice for maior ou igual ao menor índice:
```
    while ($limiteInf <= $limiteInf) {
        // fazemos o cáluculo do índice "meio", que é a metade dos dois:
        $meio = ($limiteInf + $limiteSup) / 2;
```

3. Se o meio dos dois índices for menor do que o valor do item procurado:
```
        if ($meio < $p) {
            // aumentamos o valor do menor índice
            $limiteInf += 1;
        } else if ($meio > $p) {
            // e diminuímos o valor do maior índice
            $limiteSup -= 1;
            
            // assim diminuindo o alcance do item correto
```

4. Se encontrarmos o meio, ou seja, se o seu índice for igual ao índice do item que estamos procurando, nós o retornamos
```
        } else {
            return $meio;
        } // Fim if/else
    } // Fim while
} // Fim função
```


## Bibliografia:
* https://pt.khanacademy.org/computing/computer-science/algorithms
