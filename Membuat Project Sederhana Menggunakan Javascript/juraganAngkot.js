// let noUnit = 1;
// let unitBeroperasi = 6;
// const maxUnit = 10;

// for (noUnit; noUnit <= 10; noUnit++) {
//   if (noUnit <= unitBeroperasi && noUnit != 5) {
//     console.log(`Angkot No. ${noUnit} beroperasi dengan baik`);
//   } else if (noUnit == 8 || noUnit == 10 || noUnit == 5) {
//     console.log(`Angkot No. ${noUnit} sedang lembur`);
//   } else {
//     console.log(`Angkot No. ${noUnit} sedang tidak beroperasi`);
//   }
// }

let penumpang = [];
const tambahPenumpang = (namaPenumpang, penumpang) => {
  if (penumpang.length <= 0) {
    penumpang.push(namaPenumpang);
    return penumpang;
  } else {
    for (let i = 0; i < penumpang.length; i++) {
      if (penumpang[i] == undefined) {
        penumpang[i] = namaPenumpang;
        return penumpang;
      } else if (penumpang[i] == namaPenumpang) {
        console.log(namaPenumpang + " sudah ada di dalam angkot");
        return penumpang;
      } else if (i == penumpang.length - 1) {
        penumpang.push(namaPenumpang);
        return penumpang;
      }
    }
  }
};

const hapusPenumpang = (namaPenumpang, penumpang) => {
  if (penumpang.length <= 0) {
    return "Angkot masih kosong!";
  } else {
    for (let i = 0; i < penumpang.length; i++) {
      if (penumpang[i] == namaPenumpang) {
        penumpang[i] = undefined;
        return penumpang;
      } else {
        console.log(namaPenumpang + " Tidak ada di dalam Angkot");
        return penumpang;
      }
    }
  }
};
