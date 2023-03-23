<?php
include_once "Conexao.php";

try{

    $data = $conn->query('Select*from Usuario');

    foreach($data as $row) {
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }
}


catch(PDOException $e){
    echo 'ERROR: ' . $e->getMessage();
}
?>