<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Totorial Join Table CodeIgniter | SUSANTOKUN</title>
  <style>
    .header {
      text-align: center;
    }

    .content {
      text-align: center
    }

    .content table,
    th,
    td {
      border: 1px solid black;
      margin: 6px auto;
    }

  </style>
</head>

<body>
  <div class="header">
    <h1>Tutorial Join Table CodeIgniter - SUSANTOKUN</h1>
    <h3>List Data</h3>
  </div>
  <div class="content">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Email</th>
          <th>Role Name</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 0;
          foreach ($dataUser as $row):
          $no++ 
        ?>
        <tr>
          <td><?=$no?>
          <td><?=$row->username?></td>
          <td><?=$row->email?></td>
          <td><?=$row->name?></td>
          <td><?=$row->description?></td>
        </tr>
        <?php endforeach; ?>
      <tbody>
    </table>
  </div>
</body>

</html>
