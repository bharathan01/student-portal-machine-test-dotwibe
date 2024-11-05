<?php include '../app/src/view/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="<?= ROOT ?>/css/style.css" />
  <link rel="stylesheet" href="<?= ROOT ?>/css/allApplication.css" />

</head>

<body>
  <section class="w-full flex-center flex flex-col allApplication" id="allApplication-sec">
    <h2 class="p-20">All Applications</h2>
    <table>
      <thead class="bg-primary text-white">
        <tr>
          <td>Name</td>
          <td>Email</td>
          <td>Age</td>
          <td>Gender</td>
          <td>Address</td>
          <td>TC</td>
          <td>Mark Sheet</td>
          <td>Action</td>
        </tr>
      </thead>

      <body>
        <?php
        if ($data) {
          foreach ($data as $row) {
        ?>
            <tr>
              <td><?= $row['name'] ?></td>
              <td><?= $row['email'] ?></td>
              <td><?= $row['age'] ?></td>
              <td><?= $row['gender'] ?></td>
              <td><?= $row['address'] ?></td>
              <td class="view" id="tc" onclick="ShowTc('<?= ROOT . "/uploads/" . htmlspecialchars($row['tc'], ENT_QUOTES, 'UTF-8') ?>')">View</td>
              <td class="view" id="marksheet" onclick="ShowMarkSheet('<?= ROOT . "/uploads/" . htmlspecialchars($row['marksheet'], ENT_QUOTES, 'UTF-8') ?>')">View</td>
              <td>
                <button class="p-10 b-1 bg-primary text-white" onclick="selectUser(<?= $row['admission_id'] ?>)">Select</button>
              </td>
            </tr><?php }
              } ?>
      </body>
    </table>
  </section>
  <script src="<?= ROOT ?>/js/allApplication.js" defer></script>
</body>

</html>