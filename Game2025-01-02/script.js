let maze = [];
let playerPosition = { x: 1, y: 1 };
let score = 0;
let level = 1;
let timer; // Timer ID
let timeLeft; // Waktu tersisa

// Fungsi untuk memulai timer dengan durasi sesuai level
function startTimer() {
    clearInterval(timer); // Hapus timer sebelumnya
    timeLeft = getTimeForLevel(level); // Ambil waktu berdasarkan level
    updateTimerDisplay();

    timer = setInterval(() => {
        timeLeft--;
        updateTimerDisplay();

        if (timeLeft <= 0) {
            clearInterval(timer); // Hentikan timer
            alert(`Game Over! You ran out of time on Level ${level}.`);
            resetGame(); // Reset permainan
        }
    }, 1000);
}

// Fungsi untuk mendapatkan durasi timer berdasarkan level
function getTimeForLevel(level) {
    return 60 + (level - 1) * 10; // Waktu bertambah 10 detik untuk setiap level
}

// Fungsi untuk memperbarui tampilan timer
function updateTimerDisplay() {
    document.getElementById('timer').innerText = `Time Left: ${timeLeft}s`;
}

// Fungsi untuk mereset permainan
function resetGame() {
    score = 0;
    level = 1;
    fetchMaze(level); // Mulai dari level 1
    startTimer();
}

// Fetch maze dari server
function fetchMaze(level) {
    fetch(`maze.php?level=${level}`)
        .then(response => response.json())
        .then(data => {
            maze = data;
            playerPosition = { x: 1, y: 1 }; // Reset posisi pemain
            renderMaze();
            startTimer(); // Mulai timer untuk level baru
        });
}

function renderMaze() {
    const container = document.getElementById('maze-container');
    container.innerHTML = '';
    container.style.gridTemplateColumns = `repeat(${maze[0].length}, 30px)`;

    for (let y = 0; y < maze.length; y++) {
        for (let x = 0; x < maze[y].length; x++) {
            const cell = document.createElement('div');
            cell.classList.add('cell');

            if (maze[y][x] === 1) cell.classList.add('wall');
            if (maze[y][x] === 0) cell.classList.add('path');
            if (maze[y][x] === 2) cell.classList.add('start');
            if (maze[y][x] === 3) cell.classList.add('end');
            if (x === playerPosition.x && y === playerPosition.y) cell.classList.add('player');

            container.appendChild(cell);
        }
    }
    
    // Update skor dan level
    document.getElementById('score').innerText = `Score: ${score}`;
    document.getElementById('level').innerText = `Level: ${level}`;
}

function movePlayer(event) {
    const { x, y } = playerPosition;
    let newX = x;
    let newY = y;

    if (event.key === 'ArrowUp') newY--;
    if (event.key === 'ArrowDown') newY++;
    if (event.key === 'ArrowLeft') newX--;
    if (event.key === 'ArrowRight') newX++;

    // Check for valid move
    if (maze[newY][newX] === 0 || maze[newY][newX] === 3) {
        playerPosition = { x: newX, y: newY };
        score++; // Tambahkan skor untuk setiap langkah
        renderMaze();

        // Check if player reached the end
        if (maze[newY][newX] === 3) {
            clearInterval(timer); // Hentikan timer
            alert(`Congratulations! You've completed Level ${level} with a score of ${score}.`);
            level++; // Naik level
            fetchMaze(level); // Muat maze baru
        }
    }
}

// Muat maze pertama
fetchMaze(level);
document.addEventListener('keydown', movePlayer);
