<?php include '../app/src/view/header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/style.css" />
    <link rel="stylesheet" href="<?= ROOT ?>/css/newAdmission.css" />
    <script src="<?= ROOT ?>/js/newApplication.js"></script>
</head>

<body>
    <section class="w-full p-20 flex flex-center">
        <div class="flex flex-col p-20 g-10 b-r-10 bg-shadow admission-form">
            <div class="w-full flex flex-center">
                <h2>Admission Form</h2>
            </div>
            <form method="POST" enctype="multipart/form-data" class="flex flex-col w-full g-5">
                <div class="flex flex-col g-5 w-full">
                    <label for="name">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your name"
                        class="p-10 w-full" />
                </div>
                <div class="flex flex-col g-5 w-full">
                    <label for="email">Email ID</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter Email"
                        class="p-10 w-full" />
                </div>
                <div class="flex flex-col g-5 w-full">
                    <label for="age">Age</label>
                    <input
                        type="number"
                        id="age"
                        name="age"
                        placeholder="Enter Age"
                        class="p-10 w-full" />
                </div>
                <div class="flex flex-col g-5 w-full">
                    <label for="username">Gender</label>
                    <span class="flex g-5">
                        <input type="radio" id="male" name="gender" class="p-10" value="male"/>
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female" class="p-10" value="female"/>
                        <label for="male">Female</label>
                    </span>
                </div>
                <div class="flex flex-col g-5 w-full">
                    <label for="address">Address</label>
                    <textarea
                        type="text"
                        id="address"
                        name="address"
                        placeholder="Enter Address"
                        class="p-10 w-full"></textarea>
                </div>
                <div class="flex flex-col g-5 w-full">
                    <label for="tc">uplaod TC</label>
                    <input type="file" id="tc" name="tc" class="p-10 w-full" />
                </div>
                <div class="flex flex-col g-5 w-full">
                    <label for="marksheet">uplaod Marksheet</label>
                    <input type="file" id="marksheet" name="marksheet" class="p-10 w-full" />
                </div>
                <div class="flex w-full flex flex-center">
                    <button
                        type="button"
                        onclick="getLocation()"
                        class="p-10 w-full b-1 flex g-5 flex-center bg-secondery text-primary">
                        <img src="<?= ROOT ?>/images/target.png" alt="" />
                        Get Your Current Location
                    </button>
                </div>
                <div class="flex flex-col g-5 w-full">
                    <label for="latitude">Latitude</label>
                    <input
                        type="type"
                        id="latitude"
                        name="latitude"
                        placeholder="Enter Latitude"
                        class="p-10 w-full" />
                </div>
                <div class="flex flex-col g-5 w-full">
                    <label for="longitude">Longitude</label>
                    <input
                        type="type"
                        id="longitude"
                        name="longitude"
                        placeholder="Enter Longitude"
                        class="p-10 w-full" />
                </div>
                <div class="flex w-full flex flex-center">
                    <button class="p-10 w-full b-1 bg-primary text-white" type="submit" name="newAdmission">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>