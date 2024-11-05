<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/style.css" />
    <link rel="stylesheet" href="<?= ROOT ?>/css/header.css" />
</head>

<body>
    <header class="w-full bg-primary p-10 flex justify-sb text-white">
        <div class="nav-bar flex flex-center">
            <h1>Student Portel</h1>
            <ul class="flex g-10">
                <a
                    href="home
            ">
                    <li>Home</li>
                </a>

                <a href="newAdmission">
                    <li>New Admission</li>
                </a>
                <a href="admissionStatus">
                    <li>Admission Status</li>
                </a>
                <a href="dashboard">
                    <li>DashBoard</li>
                </a>
            </ul>
        </div>
        <div>
            <a href="signin">
                <button class="p-10 bg-secondery b-1 b-r-10">Log Out</button>
            </a>
        </div>
    </header>
</body>

</html>