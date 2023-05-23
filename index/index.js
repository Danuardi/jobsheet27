const fs = require('fs');
const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question('Masukkan perintah (buka [nama_file]): ', (command) => {
  const parts = command.split(' ');
  if (parts.length === 2 && parts[0] === 'buka') {
    const fileName = parts[1];
    fs.readFile(fileName, 'utf8', (err, data) => {
      if (err) {
        console.error(`Terjadi kesalahan: ${err}`);
      } else {
        console.log(`Isi file ${fileName} adalah:\n${data}`);
      }
      rl.close();
    });
  } else {
    console.log('Perintah tidak valid.');
    rl.close();
  }
});
