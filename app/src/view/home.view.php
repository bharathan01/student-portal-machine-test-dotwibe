<?php include '../app/src/view/header.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./home.css" />
  <link rel="stylesheet" href="./index.css" />
  <link rel="stylesheet" href="<?= ROOT ?>/css/style.css" />
  <link rel="stylesheet" href="<?= ROOT ?>/css/home.css" />
</head>

<body>
  <section>

    <main class="flex flex-center">
      <div class="b-1 b-r-10 bg-shadow welcome-text flex flex-col p-10 g-10">
        <span class="w-full flex flex-center">
          <h2 class="text-primary">Welcome to Student Portel</h2>
        </span>
        <p>
          We’re thrilled to have you join our academic community! This portal
          is your gateway to a world of learning, opportunities, and success.
          Here, you can easily explore our programs, complete your
          application, and take the first steps toward your educational
          journey with us.
        </p>
        <div class="w-full flex g-10 flex-center">
          <button class="p-10 bg-primary b-r-10 b-1 text-white">New Admission</button>
          <button class="p-10 bg-secondery b-r-10 b-1">Check Status</button>
        </div>
      </div>
    </main>
  </section>
</body>

</html>