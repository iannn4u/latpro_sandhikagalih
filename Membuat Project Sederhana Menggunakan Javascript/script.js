// let noUnit = 1;
// const maxUnit = 10;
// let unitBeroperasi = 6;

// while (noUnit <= unitBeroperasi) {
//   console.log(`Angkot No. ${noUnit} beroperasi dengan baik`);
//   noUnit++;
// }

// for(noUnit; noUnit <= maxUnit; noUnit++) {
//   console.log(`Angkot No. ${noUnit} sedang tidak beroperasi`);
// }

let s = "";
for (let a = 0; a < 10; a++) {
  for (let b = 0; b < 10; b++) {
    s += "*";
  }
  s += "\n";
}
console.log(s);

let p = "";
for (let a = 0; a < 10; a++) {
  for (let b = 0; b <= a; b++) {
    p += "*";
  }
  p += "\n";
}
console.log(p);

let pk = "";
for (let a = 10; a > 0; a--) {
  for (let b = 0; b < a; b++) {
    pk += "*";
  }
  pk += "\n";
}
console.log(pk);