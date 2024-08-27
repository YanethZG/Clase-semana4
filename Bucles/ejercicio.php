<?php
$productos = array("Camiseta", "Pantalones", "Zapatos", "Sombrero", "Bufanda");


echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Lista de Productos</title>";
echo "<style>";
echo "ul { list-style-type: none; padding: 0; }";
echo "li { padding: 8px; font-size: 1.2em; }";
echo "</style>";
echo "</head>";
echo "<body>";
echo "<h1>Lista de Productos</h1>";
echo "<ul>";


foreach ($productos as $producto) {
    echo "<li>" . htmlspecialchars($producto) . "</li>";
}

echo "</ul>";
echo "</body>";
echo "</html>";
?>
