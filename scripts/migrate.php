<?php

include '../bootstrap.php';

use Loo\Database\DatabaseFactory;

$dates = ["19.02.2016", "22.02.2016", "23.02.2016", "24.02.2016", "25.02.2016", "26.02.2016", "27.02.2016", "29.02.2016", "01.03.2016", "02.03.2016", "07.03.2016"
    , "08.03.2016", "09.03.2016", "10.03.2015", "14.03.2015", "16.03.2016", "17.03.2016"];

$userPoints = [
    'user-1' => [4759, 4991, 5011, 5042, 5098, 5296, 5378, 5503, 5712, 5850, 6583, 6735, 7105, 7220, 7712, 7958, 8384],
    'user-2' => [2706, 3143, 3219, 3399, 3411, 3446, 3641, 3699, 4014, 4056, 4606, 4606, 5138, 5331, 5420, 5462, 5078],
    'user-3' => [1642, 1985, 2173, 2420, 2538, 2622, 2632, 2872, 3057, 3153, 3997, 4139, 4277, 4318, 5081, 5313, 5503],
    'user-4' => [58, 108, 202, 211, 211, 217, 373, 504, 565, 606, 952, 954, 1134, 1276, 1475, 1531, 1531],
];

$sql = '
        INSERT INTO points (date, "user", points) 
        VALUES (:date, :user, :points)
        ON CONFLICT (date, "user")
        DO UPDATE SET points = EXCLUDED.points
    ';
$stmt = (new DatabaseFactory())->getEntityManager()->getConnection()->prepare($sql);

for ($i = 0; $i < count($dates); $i++) {
    $date = strtotime($dates[$i]);

    foreach ($userPoints as $user => $points) {
        $stmt->execute([
            ':date' => $date,
            ':user' => $user,
            ':points' => $points[$i],
        ]);
    }
}

echo 'done' . PHP_EOL;
