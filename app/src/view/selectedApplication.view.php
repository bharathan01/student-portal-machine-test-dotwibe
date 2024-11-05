<?php include '../app/src/view/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/style.css" />
    <link rel="stylesheet" href="<?= ROOT ?>/css/selectedApplication.css" />
    <script src="./allApplication.js" defer></script>
</head>

<body>
    <section class="w-full flex-center flex flex-col allApplication">
        <h2 class="p-20">Selected Applications</h2>
        <table>
            <thead class="bg-primary text-white">
                <tr>
                    <td>Check Bus Charge</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Age</td>
                    <td>Gender</td>
                    <td>Address</td>
                    <td>Bus Charge</td>
                </tr>
            </thead>

            <body>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>John</td>
                    <td>john@gmail.com</td>
                    <td>20</td>
                    <td>Male</td>
                    <td>13th Street. 47 W 13th St, New York, NY 10011, USA.</td>
                    <td>free</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>John</td>
                    <td>john@gmail.com</td>
                    <td>20</td>
                    <td>Male</td>
                    <td>13th Street. 47 W 13th St, New York, NY 10011, USA.</td>
                    <td>
                        Paid
                    </td>
                </tr>
            </body>
        </table>
    </section>
</body>

</html>