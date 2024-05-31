let lagi = true;

while (lagi) {
  const tebakanPlayer = prompt("Pilih angka 1 sampai 10");
  if (tebakanPlayer == null) {
    lagi = false;
    alert("terimakasih sudah berkunjung");
  } else {
    const pilihanComputer = Math.floor(Math.random() * 10) + 1;

    if (tebakanPlayer == pilihanComputer) {
      alert(`Selamat jawaban anda benar yaitu ${pilihanComputer}`);
    } else {
      alert(`Tetott jawabannya salahhh yang bener adalah ${pilihanComputer}`);
    }

    lagi = confirm("Main lagi taa?");
  }
}
