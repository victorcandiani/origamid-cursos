var nome = 'Victor';

console.log(typeof nome);

// typeof nomeDaVariável
// --> Retorno o tipo de dado contido na variável

var sobrenome = 'Candiani';
var nomeCompleto = nome + ' ' + sobrenome;

console.log(nomeCompleto);

var gols = 1000;
var frase = 'Romário fez ' + gols + ' gols';

console.log(frase);

//Template String, utilizando `crase`
var gols = 1000;
var frase1 = 'Romário fez ' + gols + ' gols';
var frase2 = `Romário fez ${gols} gols`; // Utilizando Template String

console.log(frase1);
console.log(frase2);

//Exercício
// Declare uma variável contendo uma string
var telefone = 'Motorola'
// Declare uma variável contendo um número dentro de uma string
var modelo = 'Moto G6'
// Declare uma variável com a sua idade
var idade = 28
// Declare duas variáveis, uma com seu nome
// e outra com seu sobrenome e some as mesmas
var nome1 = 'Ichigo',
    sobrenome1 = 'Kurosaki',
    nomeCompleto1 = `Meu nome completo é ${nome1} ${sobrenome1}`;

console.log(nomeCompleto1);
// Coloque a seguinte frase em uma variável: It's time
var phrase = 'It\'s time'
console.log(phrase);
// Verifique o tipo da variável que contém o seu nome
console.log (typeof nomeCompleto1);
console.log (typeof idade);