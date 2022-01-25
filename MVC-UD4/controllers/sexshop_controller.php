<?php
function todos(){
    require './models/sexshop_model.php';

    $juguetes = obtenerTodos();
    
    include './views/sexshop_view.php';
}

function unicoElemento(){
    require './models/sexshop_model.php';

    $id = $_GET['id'];

    $juguetes = obtenerElemento($id);
    
    include './views/unicoJuguete_view.php';
}

function insertar(){
    require './models/sexshop_model.php';

    $juguetes = insertaElemento($nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen);
    
    include './views/insertarJuguete_view.php';
}


function delete(){
    require './models/sexshop_model.php';

    $id = $_GET['id'];

    $juguetes = eliminarElemento($id);
    
    include './views/sexshop_view.php';
}

function update(){
    require './models/sexshop_model.php';

    $id = $_GET['id'];

    $juguetes = editarElemento($id,$nombreProducto,$modelo,$descripcion,$precio,$stock,$fechaCreacionProducto,$imagen);
    
    include './views/sexshop_view.php';
}
?>