<?php
$menu =[
    "Home" => "index.php",
    "About" => "about.php",
    "Contact" => "contact.php",
    "foto" => "foto.php",
    "Quotes" => "quotes.php"
]

?>


<!-- Sidebar-->
<div class="border-end" id="sidebar-wrapper" style="background-color: moccasin;">
                <div class="sidebar-heading border-bottom bg-transparent"></div>
                <div class="list-group list-group-flush bg-transparent">
                   <?php foreach ($menu as $key => $value): ?>
                    <a class="list-group-item list-group-item-action list-group-item bg-transparent p-3" href="<?=$value?>"><?=$key?></a> 
                   <?php endforeach ?>
                </div>
            </div>

