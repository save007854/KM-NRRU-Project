<?php
    $parameter = strtolower($route->getParameter(1));
    $controller_array = scandir('controller');
    $controller_array = array_change_key_case($controller_array, CASE_LOWER);
    if (in_array($parameter.'.php', $controller_array)) {
      include( 'controller/'.$parameter.'.php' );
    }else{
      include( 'controller/home.php' );
    }
?>