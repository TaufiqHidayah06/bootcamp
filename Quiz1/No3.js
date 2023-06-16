const angka = [1, 2, 3, 4, 10, 11];

function jumlahkan(arr) {
  let total = 0;
  for (let i = 0; i < arr.length; i++) {
    total += arr[i];
    const equation = arr.join(" + ");
    return `${equation} = ${total}`;
  }
  return total;
}

const hasil = jumlahkan(angka);
console.log(hasil); // hasil output harus seperti ini '1 + 2 + 3 + 4 + 10 + 11 = 31'
