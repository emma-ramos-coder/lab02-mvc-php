<?php require("layout/header.php"); ?>
<a href="indexClientes.php?m=nuevo">Nuevo Cliente</a>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Dirección</th>
		<th>RUC</th>
		<th>Teléfono</th>
		<th>Acciones</th>
	</tr>
	<?php 
	foreach ($dato as $key => $value) 
		foreach ($value as $va) {
			echo "<tr>";
			echo "<td>".$va['id']."</td>";
			echo "<td>".$va['nomcliente']."</td>";
			echo "<td>".$va['dircliente']."</td>";
			echo "<td>".$va['ruccliente']."</td>";
			echo "<td>".$va['telcliente']."</td>";
			echo "<td><a href='indexClientes.php?m=editar&id=".$va['id']."'>Actualizar</a><a href='indexClientes.php?m=eliminar&id=".$va['id']."' onclick='return confirmar()' >Eliminar</a></td>";
			echo "</tr>";
		}			
	?>	
</table>
<?php require("layout/footer.php"); ?>