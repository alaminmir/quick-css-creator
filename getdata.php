<?php
    $headertag = $_POST["headertag"];
    $h1Property = $_POST["h1Property"];
    $propertyvalue = $_POST["propertyvalue"];
    $h2 = $_POST["h2"];
    if($headertag=="h1")
    {
        $h1data = "h1{".$h1Property.":".$propertyvalue.".";"}";
        echo "h1{".$h1Property.":".$propertyvalue."}";
    }
    else if($headertag=="h2")
    {
        echo "h2{".$h1Property.":".$propertyvalue."}";
    }
    
    echo "</br>";
    echo $h2;

    $css = fopen('style.css',"w");
    fwrite($css, $h1data);
    fclose($css);
?>