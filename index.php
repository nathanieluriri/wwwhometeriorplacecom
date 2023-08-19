<?php
require_once("controllers/DED.PHP");

 $uri = $_SERVER['REQUEST_URI'];

if ($uri === '/home')
{
    $uri= str_replace("/home","/",$uri);

}

if ($uri === '/')
{
    require('controllers/index.php');
}
else if ($uri === '/about')

{
    require('controllers/about.php');
}
else if ($uri === '/contact')

{
    require('controllers/contact.php');  
}

else if($uri==='/services')
{
    require('controllers/services.php');
}

function isActive($name){
    global $uri;
    if ($uri===$name){
        return "true";
    }
    else if ($uri === "/")
    {
        if ($name=== "/home")
        {
            return "true";
        }
        else {return "false";}
    }
    else {
        return "false";
    }
    }
/*

else if ($uri === '/accesories-Lamps')

{
 require('controllers/Accessories/Lamps.php');
}
else if ($uri === '/accesories-Mirrors')

{
    require('controllers/Accessories/Mirrors.php');
}
else if ($uri === '/accesories-Wallpapers')

{
    require('controllers/Accessories/Wallpapers.php');
}
else if ($uri === '/Oak-Furniture')

{
    require('controllers/collections/Oak-Furniture.php');
}
else if ($uri === '/Bespoke-Commercial-Furniture')

{
    require('controllers/collections/Bespoke-Commercial-Furniture.php');

}
else if ($uri === '/High-gloss-Furniture')

{
    require('controllers/collections/High-gloss-Furniture.php');

}
else if ($uri === '/Metal-Furniture')

{
    require('controllers/collections/Metal-Furniture.php');

}
else if ($uri === '/collections')

{
    require('controllers/collections/collection.php');

}
else if ($uri === '/Accessories')

{
    require('controllers/Accessories/Accessories.php');

}
*/
?>

