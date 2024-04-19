<main class="home-section items-start bg-gray-200 rounded py-5">
    <div class=" p-4 bg-white w-5/6 flex flex-col items-center">
        <div class="flex justify-between items-center pb-3 border-b-2 border-red-500 w-full">
            <h1 class="text-3xl font-bold"><?= $grade['grade_name'] ?></h1>
            <a href="/admin/students/create">
                <button class="bg-red-500 text-white p-2">Add New Student</button>
            </a>
        </div>

        <div class="mt-3 flex justify-between w-full bg-gray-100 rounded-2xl py-10px">
            <?php foreach ($grades as $grade) : ?>
                <a href="/admin/students/show?grade=<?= $grade['id'] ?>">
                    <button class=" <?= $grade['id'] == $class_id ? 'active' : '' ?> rounded-2xl hover:bg-red-200  py-2 px-3"><?= $grade['grade_name'] ?></button>
                </a>

            <?php endforeach ?>
        </div>

        <?php if (empty($students)) { ?>
            <p class="bg-red-200 text-center inline py-2 px-3 mt-2 rounded-xl">No Students</p>
        <?php } else { ?>
            <?php foreach ($students as $student) : ?>
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
                        <tr>
                            <td><?= $student['last_name'] ?> <?= $student['first_name'] ?> <?= $student['other_name'] ?></td>
                            <td><?= $student['date_of_admission'] ?></td>
                            <td><?= $student['gender'] ?></td>
                            <td><?= $student['date_of_birth'] ?></td>
                        </tr>
                    <?php endforeach ?>

                <?php } ?>

                    </tbody>
                </table>
    </div>
</main>