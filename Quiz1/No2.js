let angka = [1, 46, 75, 12, 89, 54, 101];
let ganjil = [];

for (let i = 0; i < angka.length; i++) {
  if (angka[i] % 2 !== 0) {
    ganjil.push(angka[i]);
  }
}

console.log(ganjil);
