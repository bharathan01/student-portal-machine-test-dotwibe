<?php include '../app/src/view/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/style.css" />
    <link rel="stylesheet" href="<?= ROOT ?>/css/dashboard.css" />
</head>

<body>
    <section class="w-full h-page flex flex-center">
        <div class="w-full p-20 flex flex-center flex-col g-10">
            <h2>Admin dashboard</h2>
            <div class="flex g-10">
                <a href="allApplications">
                    <div class="p-10 flex flex-center b-1">
                        <h3>All Applications</h3>
                    </div>
                </a>
                <a href="selectedApplication">
                    <div class="p-10 flex flex-center b-1">
                        <h3>Selected Applications</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
</body>

</html>