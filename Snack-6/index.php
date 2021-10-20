<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>

<body>
    <div style="background-color: green;">
        <?php foreach ($db['teachers'] as $teacher) { ?>
            <?php echo $teacher['name'] . " " . $teacher['lastname']; ?>
        <?php } ?>
    </div>
    <div style="background-color: gray;">
        <?php foreach ($db['pm'] as $pm) { ?>
            <?php echo $pm['name'] . " " . $pm['lastname']; ?>
        <?php } ?>
    </div>

</body>

</html>