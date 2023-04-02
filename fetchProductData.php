<?php 	

require_once 'core.php';

$sql = "SELECT productos.id_producto, productos.nombre, productos.prioridad, productos.id_generico,
productos.id_generico, productos.precio, productos.tipodeprecio, productos.descripcion, productos.descripcion2, productos.descripcion3,
productos.id_categoria, productos.id_subcategoria, productos.telefono, productos.whats, productos.faceb, productos.googm, productos.inicio, productos.id_tipo, productos.id_contrato, productos.municipio, productos.id_estado, productos.fechainicio, productos.fechafin FROM productos 
INNER JOIN categorias ON productos.categoria_id = categorias.id 
INNER JOIN tipos ON productos.id_tipo = tipo.id_tipo";
$result = $connect->query($sql);

$data = $result->fetch_all();

$connect->close();

echo json_encode($data);