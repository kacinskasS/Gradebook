
<?php if (count($lectures) > 0): ?>
<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Description</th>
			<th>Edit</th>
			<th>Remove</th>
		</tr>
	</thead>
	<tbody>
        <?php foreach ($lectures as $lecture):?>
			<tr>
				<td><?= $lecture['id']; ?></td>
				<td><?= $lecture['name']; ?></td>
				<td><?= $lecture['description']; ?></td>
				<td>
					<a href="<?= BASE_URL; ?>/lecture/edit/<?= $lecture['id']; ?>"><i class="fas fa-edit"></i></a>
				</td>
				<td>
					<a href="<?= BASE_URL; ?>/lecture/delete/<?= $lecture['id']; ?>"><i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
        <?php endforeach;?>
	</tbody>
</table>
<?php endif;?>