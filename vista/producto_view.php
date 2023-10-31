<?php require("layout/header.php"); ?>
<a href="index.php?m=nuevo">Nuevo Producto</a>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Acciones</th>
	</tr>
	<?php 
	foreach ($dato as $key => $value) 
		foreach ($value as $va) {
			echo "<tr>";
			echo "<td>".$va['id']."</td>";
			echo "<td>".$va['nombre']."</td>";
			echo "<td>".$va['precio']."</td>";
			echo "<td><a href='index.php?m=editar&id=".$va['id']."'>Actualizar</a>";
			echo "<a href='index.php?m=eliminar&id=".$va['id'];
			echo "' onclick='return confirmar()'>Eliminar</a></td>";
			echo "</tr>";
		}			
	?>	
</table>
<?php require("layout/footer.php"); ?>