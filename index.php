<?php

$categorias = []; 
$categorias [] = 'infantil'; 
$categorias [] = 'adolecente'; 
$categorias [] =  'adulto';
             
//print_r($categorias); 
    
$nome = 'Eduardo';
$idade = 8; 

//var_dump($nome); 
//var_dump($idade); 

if($idade >= 6 && $idade <= 12) 
{
   for($i = 0; $i <= count ($categorias); $i++) 
   {
       if($categorias[$i] == 'infantil') 
          echo "o nadador" .$nome. "compete na categoria" .$categorias[$i];
   }
} 
else if ($idade >= 13 && $idade <= 18) 
{
    for($i = 0; $i <= count ($categorias); $i++) 
    {
        if($categorias[$i] == 'adolecente') 
           echo "o nadador" .$nome. "compete na categoria adolecente";
    }
} 
else 
{
    for($i = 0; $i <= count ($categorias); $i++) 
    {
        if($categorias[$i] == 'adulto') 
           echo "o nadador" .$nome. "compete na categoria adulto";
    }
}