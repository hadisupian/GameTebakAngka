<?php
while (true) {
    $tries = 0;

    echo "\033[1;33m===== GAME MENCARI ANGKA =====\033[0m\n";
    echo "\033[1;33mTebak Sebuah Angka Sampai Ketemu Antara 1 sampai 10!\033[0m\n\n";

    $computer = rand(1, 10);

    echo "\033[1;33mMasukkan Tebakanmu : \033[0m\n";
    $player = trim(fgets(STDIN));

    while ($player != $computer) {
        $tries++;

        if ($player < $computer) {
            echo "\n\033[1;31mAngka yang Kamu Tebak Kurang Besar! Cari Lagi.\033[0m\n\n";
        } elseif ($player > $computer) {
            echo "\n\033[1;31mAngka yang Kamu Tebak Kurang Kecil! Cari Lagi.\033[0m\n\n";
        }
        echo "\033[1;33mMasukkan Tebakanmu : \033[0m\n";
        $player = trim(fgets(STDIN));
    }
    $tries++;
    echo "\n\033[1;32mSelamat, Kamu Telah Berhasil Mencari Angkanya!\033[0m\n";
    echo "\033[1;32mJumlah Percobaan: $tries\033[0m\n";

    echo "\n";

    echo "\033[1;34m\n\nApakah Kamu Ingin Bermain Lagi? (y/n): \033[0m";
    $playAgain = trim(fgets(STDIN));
    if (strtolower($playAgain) !== 'y') {
        break;
    }
}

echo "\033[1;37m\nTerima Kasih Telah Bermain! Sampai Jumpa Lagi!\033[0m\n";
echo "\033[1;37mGame Dibuat oleh Hadi Supian.\033[0m\n";
?>
