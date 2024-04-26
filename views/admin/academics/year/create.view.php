<main class="home-section items-center bg-gray-200 flex-col py-4 rounded">
    <style>
        input {
            border: 2px solid rgba(229, 231, 235, 1);
            padding: 5px;
            width: 100%;
            border-radius: 5px;
        }

        input:active {
            border: 1px solid red;
        }

        #alert {
            transition: opacity 1s ease-out;
            opacity: 1;
        }
    </style>
    <div class="bg-white w-4/5  flex flex-col items-center h-full pb-3">
        <h2 class="w-full bg-red-100 p-3 font-semibold text-lg">New Academic Year</h2>
        <?php if (isset($alert)) : ?>
            <p class="text-center bg-red-200 py-2 px-4 rounded mt-2 mb-2" id="alert"><?= $alert ?></p>
        <?php endif ?>
        <form action="/admin/academics/year/store" class="w-full px-12 mt-4" method="POST">
            <div class="flex justify-between">
                <div>
                    <label for="">Year</label>
                    <input type="text" required name="year" placeholder="2023/2024">
                </div>
                <div>
                    <label for="">Start Date</label>
                    <input type="date" required name="year_start_date" id="">
                </div>
                <div>
                    <label for="">End Date</label>
                    <input type="date" required name="year_end_date" id="">
                </div>
            </div>

            <div class="flex mt-4">
                <label for="" class="mr-2">Number of Terms</label>
                <select name="number_of_terms" id="quantity" class="px-2" required onchange="createFormGroups()">
                    <option value="">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <table class="table mt-6">
                <thead>
                    <tr>
                        <th>Terms</th>
                        <th>Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                </thead>
                <tbody id="formGroupsContainer">


                </tbody>


            </table>

            <!-- <div id="formGroupsContainer"></div> -->

            <button class="px-4 py-2 bg-red-500 text-white rounded">Save</button>

        </form>

    </div>

</main>

<script>
    function createFormGroups() {
        var quantity = document.getElementById("quantity").value;
        var formGroupsContainer = document.getElementById("formGroupsContainer");

        // Clear existing form groups
        formGroupsContainer.innerHTML = "";

        // Generate new form groups
        // for (var i = 1; i <= quantity; i++) {
        //     var formGroup = document.createElement("div");
        //     formGroup.className = "form-group";
        // formGroup.innerHTML = "<label for='input" + i + "'>Input " + i + ":</label>" +
        //     "<input type='text' id='input" + i + "' name='input" + i + "'>";
        //     formGroupsContainer.appendChild(formGroup);
        // }

        for (var i = 1; i <= quantity; i++) {
            var formGroup = document.createElement("tr");
            formGroup.className = "form-group";
            // formGroup.innerHTML = "<label for='input" + i + "'>Input " + i + ":</label>" +
            //     "<input type='text' id='input" + i + "' name='input" + i + "'>";
            formGroup.innerHTML = "<td>" + i + "</td>" +
                "<td><input type='text' required placeholder='Term " + i + "' name='term_name[]'></td>" +
                "<td> <input type = 'date' required name = 'term_start_date[]' > </td>" + "<td> <input type = 'date' required name = 'term_end_date[]'></td>";
            formGroupsContainer.appendChild(formGroup);
        }
    }
</script>

<script src="/../resource/script/admin/alert.js"></script>