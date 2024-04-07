<main class="home-section items-start bg-gray-200 rounded pb-5">
    <style>
        a button.active {
            background-color: rgba(239, 68, 68, 1);
            color: white;
        }
    </style>

    <div class=" p-4 bg-white w-5/6  mt-5">
        <div class="flex justify-between items-center pb-3 border-b-2 border-red-500">
            <h1 class="text-3xl font-bold">Facilitators</h1>
            <a href="/admin/teachers/create">
                <button class="bg-red-500 text-white p-2">Add New Facilitator</button>
            </a>
        </div>

        <div class="mt-2">
            <a href="/admin/teachers/show">
                <button class=" <?= $teacher_type === NULL ? 'active' : '' ?> rounded-lg hover:bg-red-200 px-3 py-2">All</button>
            </a>
            <a href="/admin/teachers/show?teacher_type=class_teacher">
                <button class="<?= $teacher_type === 'class_teacher' ? 'active' : '' ?> rounded-lg hover:bg-red-200 px-3 py-2">Class Teachers</button>
            </a>
            <a href="/admin/teachers/show?teacher_type=subject_teacher">
                <button class=" <?= $teacher_type === 'subject_teacher' ? 'active' : '' ?> rounded-lg hover:bg-red-200 px-3 py-2">Subject Teachers</button>
            </a>
        </div>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Date of Employment</th>
                    <th>Phone Number</th>
                    <th>Teacher Role</th>
                </tr>
            </thead>

            <tbody>
                <?php
                // $role_teachers = ;
                foreach ($teachers as $teacher) : ?>
                    <tr>
                        <td><?= $teacher['first_name'] ?> <?= $teacher['other_name'] ?> <?= $teacher['last_name'] ?></td>
                        <td><?= $teacher['email'] ?></td>
                        <td><?= $teacher['date_of_birth'] ?></td>
                        <td><?= $teacher['date_of_employment'] ?></td>
                        <td><?= $teacher['contact'] ?></td>
                        <td><?= $teacher['teacher_type'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>