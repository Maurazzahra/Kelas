<?php
// maze.php
header('Content-Type: application/json');

// Mendapatkan level dari query string (default ke level 1)
$level = isset($_GET['level']) ? (int)$_GET['level'] : 1;

// Ukuran maze berdasarkan level
$rows = 10 + ($level - 1) * 2;
$cols = 10 + ($level - 1) * 2;

// Membuat maze kosong
$maze = array_fill(0, $rows, array_fill(0, $cols, 1));

// Membuat jalur
function generateMaze(&$maze, $x, $y) {
    $directions = [[0, 1], [1, 0], [0, -1], [-1, 0]];
    shuffle($directions);

    foreach ($directions as [$dx, $dy]) {
        $nx = $x + $dx * 2;
        $ny = $y + $dy * 2;

        if (isset($maze[$ny][$nx]) && $maze[$ny][$nx] === 1) {
            $maze[$y + $dy][$x + $dx] = 0;
            $maze[$ny][$nx] = 0;
            generateMaze($maze, $nx, $ny);
        }
    }
}

// Titik awal
$maze[1][1] = 0;
generateMaze($maze, 1, 1);

// Titik awal dan akhir
$maze[1][1] = 2; // Start
$maze[$rows - 2][$cols - 2] = 3; // End

echo json_encode($maze);
