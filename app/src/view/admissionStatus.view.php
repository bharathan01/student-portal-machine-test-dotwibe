<?php include '../app/src/view/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/style.css" />
    <link rel="stylesheet" href="<?= ROOT ?>/css/admissionStatus.css" />
</head>

<body>
    <section class="w-full h-page flex flex-center">
        <div class="status b-1 b-r-10 p-10">
            <div class="w-full flex flex-center p-10">
                <h2>Admission Status</h2>
            </div>
            <div class="">
                <ul class="flex flex-col g-10">
                    <li>Name : john Doe</li>
                    <li>email : john Doe@gmail.com</li>
                    <li>Age : 20 Year</li>
                    <li>gender : Male</li>
                    <li>Address : john Doe.ladc,afasfasdf,123</li>
                    <li>TC : john Doe</li>
                    <li>MarkSheet : john Doe</li>
                    <li>
                        Admission Status :
                        <b class="text-primary">On Hold/ Admission Successful </b>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>