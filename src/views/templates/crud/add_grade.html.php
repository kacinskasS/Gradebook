<div class="inner">
	<form action="" method="post">
		<select name="student" type="" placeholder="Student">
            <?php
            foreach ($students as $student) {
                $student_id = $student['id'];
                $student_name = $student['name'];
                $student_surname = $student['surname'];
                echo "<option value='$student_id'>".$student_name." ".$student_surname."</option>";
            }
            ?>
		</select>
		<select name="lecture" type="" placeholder="Lecture">
            <?php
            foreach ($lectures as $lecture) {
                $lecture_id = $lecture['id'];
                $lecture_name = $lecture['name'];
                echo "<option value='$lecture_id'>$lecture_name</option>";
            }
            ?>
		</select>
		<input name="grade" type="number" placeholder="Number" autocomplete="off" min="1" max="10" required/>
		<input class="button" name="button" type="submit" value="Add" required/>
		<a href="<?= BASE_URL.'/'; ?>"><i class="fas fa-arrow-circle-left"></i></a>
	</form>
</div>
