<?php 
$students = [
    [
       'stdNo' => '20003',
       'stdName' => 'Ahmed Ali',
       'stdEmail' => 'ahmed@gmail.com',
       'stdGAP' => 88.7
    ],
    [
       'stdNo' => '30304',
       'stdName' => 'Mona Khalid', 
       'stdEmail' => 'mona@gmail.com', 
       'stdGAP' => 78.5
    ],
    [
       'stdNo' => '10002',
       'stdName' => 'Bilal Hmaza', 
       'stdEmail' => 'bilal@gmail.com', 
       'stdGAP' => 98.7
    ],
    [
       'stdNo' => '10005',
       'stdName' => 'Said Ali', 
       'stdEmail' => 'said@gmail.com', 
       'stdGAP' => 98.7
    ],
    [
       'stdNo' => '10007',
       'stdName' => 'Mohammed ahmed',
       'stdEmail' => 'mohamed@gmail.com', 
       'stdGAP' => 98.7
    ]
];
?>


<html>
<head>
    <style>
        table {border-collapse: collapse; width:50%; text-align: center; padding: 800px;}
        th , td {border: 1px soild black; padding: 8px; text-align: center; }
        body {background-color:#E6E6FA;}
        h2{text-align: center;}
        .delete {background:red; color:white;}
        p{text-align: center; font-size:12px;}
    </style>
</head>
<body>
    <h2>Students Table : </h2>
<table border="1" style="margin:0 auto; text-align: center; font-size: 10px; background-color: #D8BFD8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>GAP</th>
        <th>Delete</th>
   </tr>
   <?php foreach($students as $row): ?>
            <tr>
                <td><?= $row['stdNo']; ?></td>
                <td><?= $row['stdName']; ?></td>
                <td><?= $row['stdEmail']; ?></td>
                <td><?= $row['stdGAP']; ?></td>
                <td><button class="deletestudent " onclick="deleteRow(this)">delete</button></td>

       </tr>
       <?php endforeach; ?>
</table>
<script>
function deleteRow(button) {
    button.parentElement.parentElement.remove();
}
</script>
<p> Total Number of Students = 5</p>
</body>
</html>