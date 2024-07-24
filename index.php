<?php


//Faça um script em PHP que lê as duas notas parciais obtidas por
//um aluno numa disciplina ao longo de um semestre, e calcule a sua
//média. A atribuição de conceitos obedece à tabela abaixo:

//Média de Aproveitamento Conceito
//Entre 9.0 e 10.0 A
//Entre 7.5 e 9.0 B
//Entre 6.0 e 7.5 C
//Entre 4.0 e 6.0 D
//Entre 4.0 e zero E
//O algoritmo deve mostrar na tela as notas, a média, o conceito
//correspondente e a mensagem “APROVADO” se o conceito for A, B
//ou C ou “REPROVADO” se o conceito for D ou E.



$nota_um=70;
$note_dois=70;
$media==(nota_um+$nota_dois)/2;


if ($media >=90 && &media<=100) {
    echo 'A';
}

if ($media >=75 && $media < 90){
    echo 'B';
}
   
   
if ($media >= 60 && $media < 75) {
        echo 'C';
    }
   
if ($media >= 40 && $media < 60) {
        echo 'D';
    }
   
if ($media<40) {
        echo 'E';
    }
   


if($media>60) {
    echo "aprovado";
}else {
    echo "reprovado";
}
   
echo $media;





