var nome = 'Victor';
var idade = 28;
var possuiFaculdade = true;

console.log(nome, idade, possuiFaculdade);

var preco = 25;
var totalComprado = 5;
var totalPreco = preco * totalComprado;

console.log(totalPreco);

var sobrenome = 'Candiani',
    cidade = 'São Paulo',
    estado = 'SP';

console.log(sobrenome, cidade, estado);

var semDefinir;

console.log(semDefinir);

// Comentário de Linha

/*
Comentário
De
Bloco
*/

//Hoisting
var comida;
console.log(comida);
comida = 'Pizza';
console.log(comida);

//Alterando o valor de uma variável
var time = 'Brasil'
console.log(time);
//Redeclarando o Valor
time = 'Tsubasa FC'
console.log(time);

//Exercício 

// Declarar uma variável com o seu nome
var nome = nome
// Declarar uma variável com a sua idade
var idade = idade
// Declarar uma variável com a sua comida
// favorita e não atribuir valor
var comidaFavorita;
// Atribuir valor a sua comida favorita
comidaFavorita = 'Macarrão';
// Declarar 5 variáveis diferentes sem valores
var dolar,
    euro,
    yen,
    peso,
    rublos;