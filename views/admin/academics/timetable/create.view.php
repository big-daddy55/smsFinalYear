<main class="home-section items-start bg-gray-200 rounded py-5">
    <style>
        .tableRow {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
        }
    </style>
    <div class=" p-4 bg-white w-5/6 flex flex-col items-center">
        <div class="flex justify-between items-center pb-3 border-b-2 border-red-500 w-full">
            <h1 class="text-3xl font-bold"><?= $grade['grade_name'] ?></h1>
            <!-- <a href="/admin/academics/timetable/create?grade=<?= $grade['id'] ?>">
                <button class="bg-red-500 text-white p-2">Create Timetable</button>
            </a> -->
        </div>


        <div class="flex flex-col w-100">
            <div class="tableRow w-100">
                <div class="cells border-black border flex flex-col items-center justify-center">
                    <p>Day</p>
                </div>
                <?php foreach ($times as $time) : ?>
                    <div class="cells border-black border flex flex-col items-center justify-center">
                        <p> <?= $time['start_time'] ?></p>
                        <p> - </p>
                        <p><?= $time['end_time'] ?></p>
                    </div>
                <?php endforeach ?>
            </div>
            <form action="/admin/academics/timetable/store?grade=<?= $grade['id'] ?>" method="POST">

                <?php foreach ($days as $day) : ?>

                    <div class="tableRow w-100">

                        <div class="cells border-black border flex flex-col items-center justify-center">
                            <p><?= $day['day'] ?></p>
                        </div>
                        <?php foreach ($times as $time) : ?>
                            <div class="cells border-black border flex flex-col items-center justify-center">

                                <input type="text" name="grade[]" value="<?= $grade['id'] ?>" hidden>
                                <input type="text" name="time_slot[]" value="<?= $time['id'] ?>" hidden>
                                <input type="text" name="day[]" value="<?= $day['id'] ?>" hidden>
                                <select name="subject[]" id="" class="w-100 my-6  text-sm bg-white">
                                    <?php foreach ($subjects as $subject) : ?>
                                        <option class="text-lg" value="<?= $subject['id'] ?>"><?= $subject['subject_title'] ?></option>
                                    <?php endforeach ?>
                                </select>

                            </div>
                        <?php endforeach ?>
                    </div>

                <?php endforeach ?>
                <input type="submit" value="Save Timetable" class="bg-red-500 text-white p-1 rounded mt-4">
            </form>
        </div>






    </div>
</main>