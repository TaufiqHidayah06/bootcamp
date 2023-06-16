//1. Jika nilai score lebih atau sama dengan 90
//- Isi variabel result dengan nilai: 'Selamat! Anda mendapatkan nilai A.'
//2. Jika nilai score ada di antara 80 hingga 89
//- Isi variabel result dengan nilai: 'Anda mendapatkan nilai B.'
//3. Jika nilai score ada di antara 70 hingga 79
//- Isi variabel result dengan nilai: 'Anda mendapatkan nilai C.'
//4. Jika nilai score ada di antara 60 hingga 69:
//- Isi variabel result dengan nilai: 'Anda mendapatkan nilai D.'
// 5. Jika nilai score di bawah 60:
//- Isi variabel result dengan nilai: 'Anda mendapatkan nilai E.'

let score = 90; // Ubah nilai score sesuai kebutuhan

let result;

if (score >= 90) {
  result = "Selamat! Anda mendapatkan nilai A.";
} else if (score >= 80 && score <= 89) {
  result = "Anda mendapatkan nilai B.";
} else if (score >= 70 && score <= 79) {
  result = "Anda mendapatkan nilai C.";
} else if (score >= 60 && score <= 69) {
  result = "Anda mendapatkan nilai D.";
} else {
  result = "Anda mendapatkan nilai E.";
}
console.log(result); // Output: Anda mendapatkan nilai B.
