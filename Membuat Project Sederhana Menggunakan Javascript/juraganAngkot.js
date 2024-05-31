let noUnit = 1;
let unitBeroperasi = 6;
const maxUnit = 10;

for (noUnit; noUnit <= 10; noUnit++) {
  if (noUnit <= unitBeroperasi && noUnit != 5) {
    console.log(`Angkot No. ${noUnit} beroperasi dengan baik`);
  } else if (noUnit == 8 || noUnit == 10 || noUnit == 5) {
    console.log(`Angkot No. ${noUnit} sedang lembur`);
  } else {
    console.log(`Angkot No. ${noUnit} sedang tidak beroperasi`);
  }
}
