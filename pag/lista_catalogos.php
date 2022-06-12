<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">






			<table class="table table-hover jnptable">
				<thead>
					<tr>
						<th scope="col">Cartel</th>
						<th scope="col">Nombre</th>
						<th scope="col">Ver</th>
					</tr>
				</thead>
				<tbody>

					<tr onclick="window.location='?p=catalogo&id=<?= $catalogos['1']['id'] ?>';">
						<td><img width="150" class="img-responsive" src="./img/shop01.png" alt="<?= $catalogos['1']['nombre'] ?>"></td>
						<td><?= $catalogos['1']['nombre'] ?></td>
						<td>VER</td>
					</tr>

					<tr onclick="window.location='?p=catalogo&id=<?= $catalogos['2']['id'] ?>';">
						<td><img width="150" class="img-responsive" src="./img/shop02.png" alt="<?= $catalogos['2']['nombre'] ?>"></th>
						<td><?= $catalogos['2']['nombre'] ?></td>
						<td>VER</td>
					</tr>

					<tr onclick="window.location='?p=catalogo&id=<?= $catalogos['3']['id'] ?>';">
						<td><img width="150" class="img-responsive" src="./img/shop03.png" alt="<?= $catalogos['3']['nombre'] ?>"></th>
						<td><?= $catalogos['3']['nombre'] ?></td>
						<td>VER</td>
					</tr>

					<tr onclick="window.location='?p=catalogo&id=<?= $catalogos['4']['id'] ?>';">
						<td><img width="150" class="img-responsive" src="./img/shop04.png" alt="<?= $catalogos['4']['nombre'] ?>"></th>
						<td><?= $catalogos['4']['nombre'] ?></td>
						<td>VER</td>
					</tr>



				</tbody>
			</table>




		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->