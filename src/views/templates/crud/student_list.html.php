<div class="inner">
	<div class="menu_all">
		<a class="menu" href="<?= BASE_URL; ?>/student/add">Add Student</a>
		<a class="menu" href="<?= BASE_URL; ?>/lecture/add">Lectures</a>
		<a class="menu" href="<?= BASE_URL; ?>/grade/add">Add Grades</a>
	</div>
    <?php if (count($students) > 0): ?>
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Surname</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Edit/More Info</th>
					<th>Remove</th>
				</tr>
			</thead>
			<tbody>
                <?php foreach ($students as $student): ?>
					<tr>
						<td><?= $student['id']; ?></td>
						<td><?= $student['name']; ?></td>
						<td><?= $student['surname']; ?></td>
						<td><?= $student['email']; ?></td>
						<td><?= $student['phone']; ?></td>
						<td>
							<a href="<?= BASE_URL; ?>/student/edit/<?= $student['id']; ?>"><i class="fas fa-edit"></i></a>
						</td>
						<td>
							<a href="<?= BASE_URL; ?>/student/delete/<?= $student['id']; ?>"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
                <?php endforeach; ?>
			</tbody>
		</table>
</div>
    <?php endif; ?>

