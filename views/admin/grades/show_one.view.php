<main class="home-section items-start bg-gray-200">
    <div class=" p-4 bg-white w-5/6  mt-5">
        <div class="flex justify-between items-center pb-3 border-b-2 border-red-500">
            <h1 class="text-3xl font-bold">Grades</h1>
            <a href="/admin/teachers/create">
                <button class="bg-red-500 text-white p-2">Add New Grade</button>
            </a>
        </div>
        <table class="table table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th>Name of Student</th>
                    <th>Joined On</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($grades as $grade) : ?>
                    <tr>
                        <td><?= $grade['grade_name'] ?></td>

                        <?php
                        $number_of_students = number_of_students($grade['id']);

                        error_log($number_of_students);
                        ?>
                        <td><?= $number_of_students ?></td>
                        <!-- <td><?= $grade['number_of_student'] ?></td> -->

                        <?php
                        if (isset($grade['class_teacher_number'])) {
                            $teacher = teacher($grade['class_teacher_number']);

                        ?>
                            <td><?= $teacher['first_name'] ?> <?= $teacher['other_name'] ?> <?= $teacher['last_name'] ?></td>

                        <?php } else { ?>
                            <td>No Teacher</td>
                        <?php } ?>



                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>