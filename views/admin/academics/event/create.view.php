<main class="home-section items-center bg-gray-200 flex-col py-4 rounded">
    <style>
        input,
        select {
            border: 2px solid rgba(229, 231, 235, 1);
            padding: 5px;
            width: 100%;
            border-radius: 5px;
        }

        input:active {
            border: 1px solid red;
        }
    </style>
    <div class="bg-white w-4/5 p-4 flex flex-col items-center h-full">
        <h1 class="text-xl font-semibold">Create Academic Calendar</h1>

        <form action="" class="w-full flex flex-col items-center">
            <table class="table  w-2/3">
                <tbody>
                    <tr>
                        <td>Academic Year</td>
                        <td>
                            <select name="academic_year" id="" class="bg-white">
                                <?php foreach ($years as $year) : ?>
                                    <option value=""><?= $year['year'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Events</td>
                        <td>
                            <div class="flex flex-col justify-between h-32">
                                <input type="text" placeholder="Event Name">
                                <div class="inline-grid grid-cols-3">
                                    <label for="">Start Date:</label>
                                    <p></p>
                                    <label for="" class="pr-5">End Date:</label>
                                </div>
                                <div class="inline-grid grid-cols-3 items-center ">
                                    <input type="date">
                                    <div class="flex justify-center">
                                        <hr class="w-5 border-2">
                                    </div>
                                    <input type="date">

                                </div>
                            </div>

                            <!-- <button>Add Event</button> -->
                        </td>
                    </tr>

                    <tr>
                        <td> Event Type</td>
                        <td>
                            <select name="event_type" id="" class="bg-white">
                                <option value="Public Holiday">Public Holiday</option>
                                <option value="School Event">School Event</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>School Status</td>
                        <td class="flex justify-between">
                            <div class="flex">
                                <input type="radio" name="status" id="" class="mr-4">
                                <label for="status">Open</label>
                            </div>
                            <div class="flex pr-24 ">
                                <input type="radio" name="status" id="" class="mr-4">
                                <label for="status">Closed</label>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="footer w-full flex justify-end  mt-5 px-4 py-2">
                <button class="bg-white py-2 w-36 border-2 border-red-300 text-red-500 rounded">Cancel</button>
                <button class="bg-red-500 py-2 w-36 ml-3 text-white rounded">Save</button>
            </div>
        </form>

</main>