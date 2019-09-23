<?php
// echo "<pre>";
// var_dump($_FILES);
// echo "</pre>"; 

// array(1) {
//     ["imagem"]=>
//     array(5) {
//       ["name"]=>
//       string(12) "54414747.png"
//       ["type"]=>
//       string(9) "image/png"
//       ["tmp_name"]=>
//       string(24) "C:\xampp\tmp\phpEC71.tmp"
//       ["error"]=>
//       int(0)
//       ["size"]=>
//       int(17136)
//     }
//   }

$extensoesValidas = ['image/jpeg', 'image/jpg', 'image/png'];

if ($_FILES['imagem']['error'] == 0) {
    if(array_search($_FILES['imagem']['type'], $extensoesValidas) === false){
        echo "Extensão de arquivo inválida";
        exit;
    }
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], 'img/'.$_FILES['imagem']['name'])){
        echo "Arquivo salvo com sucesso";
    } else {
        echo "Erro ao salvar arquivo";
    }
} else {    
    echo "Erro no envio do arquivo!";
}
?>