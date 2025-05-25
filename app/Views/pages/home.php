<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar JavaScript</title>
</head>
<body>
    <main>
        <section class="mainGames">
            <div class="mainGames_container">
                <div class="mainGames_box">
                    <div class="mainGames_boxPlayer">
                        <button id="btnRock">Rock</button>
                        <button id="btnPapers">Paper</button>
                        <button id="btnScissors">Scissors</button>
                        <p id="player_choose">You're choosing: </p>
                    </div>
                    <div class="mainGames_boxComputer">
                        <p id="computer_choose">The Computer picks: </p>
                    </div>
                    <div class="mainGames_result">
                        <p id="result">Result: </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Ambil elemen tombol
        const btnRock = document.getElementById("btnRock");
        const btnPapers = document.getElementById("btnPapers");
        const btnScissors = document.getElementById("btnScissors");

        // Ambil elemen untuk menampilkan hasil
        const playerChooseText = document.getElementById("player_choose");
        const computerChooseText = document.getElementById("computer_choose");
        const resultText = document.getElementById("result");

        // Tambahkan event listener ke masing-masing tombol
        btnRock.addEventListener("click", function() {
            games("Rock");
        });

        btnPapers.addEventListener("click", function() {
            games("Paper");
        });

        btnScissors.addEventListener("click", function() {
            games("Scissors");
        });

        // Fungsi utama
        function games(player_choose) {
            // Tampilkan pilihan pemain
            playerChooseText.innerText = "You're choosing: " + player_choose;

            // Pilihan komputer secara acak
            let computer_choose = "";
            let random = Math.floor(Math.random() * 3); // 0, 1, 2

            if (random === 0) {
                computer_choose = "Rock";
            } else if (random === 1) {
                computer_choose = "Paper";
            } else {
                computer_choose = "Scissors";
            }

            // Tampilkan pilihan komputer
            computerChooseText.innerText = "The Computer picks: " + computer_choose;

            // Tentukan pemenang
            let hasil = "";
            if (player_choose === computer_choose) {
                hasil = "Draw!";
            } else if (
                (player_choose === "Rock" && computer_choose === "Scissors") ||
                (player_choose === "Paper" && computer_choose === "Rock") ||
                (player_choose === "Scissors" && computer_choose === "Paper")
            ) {
                hasil = "You Win!";
            } else {
                hasil = "You Lose!";
            }

            // Tampilkan hasilnya
            resultText.innerText = "Result: " + hasil;
        }
    </script>
</body>
</html>
