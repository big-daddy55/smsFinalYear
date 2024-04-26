<main class="home-section items-start bg-gray-200 rounded py-5">
    <div class=" p-4 bg-white w-5/6 flex flex-col items-center">
        <div class="flex justify-between items-center pb-3 border-b-2 border-red-500 w-full">
            <h1 class="text-3xl font-bold">Academic Years</h1>
            <a href="/admin/academics/year/create">
                <button class="bg-red-500 text-white p-2">Add New Academic Year</button>
            </a>
        </div>

        <!-- <div class="mt-3 flex justify-between w-full bg-gray-100 rounded-2xl py-10px">
            <?php foreach ($grades as $grade) : ?>
                <a href="/admin/students/show?grade=<?= $grade['id'] ?>">
                    <button class=" <?= $grade['id'] == $class_id ? 'active' : '' ?> rounded-2xl hover:bg-red-200  py-2 px-3"><?= $grade['grade_name'] ?></button>
                </a>

            <?php endforeach ?>
        </div> -->

        <?php if (empty($years)) { ?>
            <p class="bg-red-200 text-center inline py-2 px-3 mt-2 rounded-xl">No Academic Year</p>
        <?php } else { ?>
            <?php foreach ($years as $year) : ?>
                <table class="table table table-striped table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Starts On</th>
                            <th>Ends on</th>
                            <th>Number Of Terms</th>
                            <th>Status</th>
                        </tr>
                    </thead>



                    <tbody>
                        <tr>
                            <td><?= $year['year'] ?> </td>
                            <td><?= $year['start_date'] ?></td>
                            <td><?= $year['end_date'] ?></td>
                            <td><?= $year['number_of_terms'] ?></td>
                            <td><?= $year['status'] ?></td>
                        </tr>
                    <?php endforeach ?>

                <?php } ?>

                    </tbody>
                </table>
    </div>
</main>