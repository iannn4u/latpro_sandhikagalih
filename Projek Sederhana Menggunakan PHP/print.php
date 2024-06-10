<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'function.php';

$students = query('SELECT * FROM students');
$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List of Students</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <table border="1" cellpadding="10" cellspacing="0">
      <thead>
        <tr>
          <th>No.</th>
          <th>Picture</th>
          <th>NIS</th>
          <th>Name</th>
          <th>Email</th>
          <th>Jurusan</th>
        </tr>
      </thead>
      <tbody>';

$iteration = 1;
foreach ($students as $s) {
  $html .= '<tr>
        <td>' . $iteration . '</td>
        <td><img src="' . $s['img_student'] . '" alt="' . $s['name_student'] . '" width="50"></td>
        <td>' . $s['nis_student'] . '</td>
        <td>' . $s['name_student'] . '</td>
        <td>' . $s['email_student'] . '</td>
        <td>' . $s['jurusan_student'] . '</td>
    </tr>';
  $iteration++;
}

$html .= '</tbody>
  </table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('list-students', 'D');
