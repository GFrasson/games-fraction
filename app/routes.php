<?php
    
    $router->get('projetoContato', 'ControllerContato@index');

    $router->post('contato/enviar','ControllerContato@enviar');
    

?>