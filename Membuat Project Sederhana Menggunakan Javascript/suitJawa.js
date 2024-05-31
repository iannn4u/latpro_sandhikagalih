let lagi = true;
while (lagi) {
  // Menangkap pilihan player
  const pilihanPlayer = prompt("Masukkan pilihan anda;gunting, batu, kertas");
  console.log(pilihanPlayer)
  if (pilihanPlayer == null) {
    lagi = false
    alert('Sampai jumpa lagi')
  } else {
    // Menangkap pilihan computer
    // Membangkitkan bilangan random
    const bilRandom = Math.floor(Math.random() * 3) + 1;
    let pilihanComputer;
    if (bilRandom == 1) {
      pilihanComputer = "gunting";
    } else if (bilRandom == 2) {
      pilihanComputer = "batu";
    } else {
      pilihanComputer = "kertas";
    }

    // Menentukan rules
    let winner;
    if (pilihanComputer == pilihanPlayer) {
      winner = `${pilihanPlayer} VS ${pilihanComputer} \n Kamu seri`;
    } else if (
      (pilihanComputer == "gunting" && pilihanPlayer == "kertas") ||
      (pilihanComputer == "batu" && pilihanPlayer == "gunting") ||
      (pilihanComputer == "kertas" && pilihanPlayer == "batu")
    ) {
      winner = `${pilihanPlayer} VS ${pilihanComputer} \n Kamu kalah`;
    } else if (
      (pilihanPlayer == "gunting" && pilihanComputer == "kertas") ||
      (pilihanPlayer == "batu" && pilihanComputer == "gunting") ||
      (pilihanPlayer == "kertas" && pilihanComputer == "batu")
    ) {
      winner = `${pilihanPlayer} VS ${pilihanComputer} \n Kamu menang`;
    } else {
      winner = "input tidak valid";
    }

    // Tampilkan hasilnya
    alert(winner);
    lagi = confirm("Lagi?");
  }
}
