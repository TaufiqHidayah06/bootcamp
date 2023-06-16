const penulisanJam = (jam) => {
  const jamArray = jam.split(":");
  const jamAngka = parseInt(jamArray[0]);
  const menitAngka = parseInt(jamArray[1]);

  let hasil = "";

  if (menitAngka === 0) {
    hasil = `Jam ${jamAngka} tepat`;
  } else if (menitAngka === 1) {
    hasil = `Jam ${jamAngka} lebih satu menit`;
  } else if (menitAngka === 15) {
    hasil = `Jam ${jamAngka} lebih seperempat`;
  } else if (menitAngka === 30) {
    hasil = `Jam setengah ${jamAngka + 1}`;
  } else if (menitAngka === 45) {
    hasil = `Jam ${jamAngka + 1} kurang seperempat`;
  } else if (menitAngka === 59) {
    hasil = `Jam ${jamAngka + 1} kurang satu menit`;
  } else {
    const menitString =
      menitAngka > 30 ? `kurang ${60 - menitAngka}` : `lebih ${menitAngka}`;
    hasil = `Jam ${jamAngka + 1} ${menitString} menit`;
  }

  return `${jam} = ${hasil}`;
};

const text = penulisanJam("5:30");
console.log(text); // Output: '5:30 = Jam setengah enam'
