const lilin = [3, 2, 1, 3, 1, 1]; //ketinggian lilin

function hitunglilinPalingTinggi(lilin) {
  let ketinggianTertinggi = Math.max(...lilin);
  let jumlahLilinTertinggi = 0;

  for (let i = 0; i < lilin.length; i++) {
    if (lilin[i] === ketinggianTertinggi) {
      jumlahLilinTertinggi++;
    }
  }

  return `ada (${jumlahLilinTertinggi}) buah lilin paling tinggi`;
}

const hasil = hitunglilinPalingTinggi(lilin);
console.log(hasil); // hasil output harus seperti ini 'ada (2) buah lilin paling tinggi'
