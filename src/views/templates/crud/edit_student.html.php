<div class="inner">
	<form action="" method="post">
		<input name="name" type="text" placeholder="Name" autocomplete="off" value="<?= $student['name'] ?>" required/>
		<input name="surname" type="text" placeholder="Username" autocomplete="off" value="<?= $student['surname'] ?>" required/>
		<input name="email" type="email" placeholder="Email" autocomplete="off" value="<?= $student['email'] ?>" required/>
		<input name="phone" type="text" placeholder="Phone" autocomplete="off" value="<?= $student['phone'] ?>" required/>
		<input class="button" name="button" type="submit" value="Edit"/>
		<a href="<?= BASE_URL.'/'; ?>"><i class="fas fa-arrow-circle-left"></i></a>
	</form>
	<br>
    <?php if (count($grades) > 0): ?>
	<table>
		<thead>
			<tr>
				<th>Lecture</th>
				<th>Grade</th>
			</tr>
		</thead>
		<tbody>
            <?php foreach ($grades as $grade): ?>
				<tr>
					<td><?= $grade['name']; ?></td>
					<td><?= $grade['all_grades']; ?></td>
				</tr>
            <?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php endif; ?>