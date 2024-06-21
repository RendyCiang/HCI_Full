function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

const phrases = ["Dari Rakyat, Untuk Rakyat", "Kami Hadir Untuk Membantu Anda", "Laporkan Keluhan Anda Sekarang Juga!"];
const getElement = document.getElementById("phrases");

let sleepTime = 50;
let currentPhrase = 0;

const writeLoop = async () => {
    while (true) {
        let phrase = phrases[currentPhrase];
        
        for (let i = 0; i <= phrase.length; i++) {
            getElement.innerHTML = phrase.substring(0, i);
            await sleep(sleepTime);
        }

        await sleep(200);

        for (let i = phrase.length; i >= 0; i--) {
            getElement.innerHTML = phrase.substring(0, i);
            await sleep(sleepTime);
        }

        currentPhrase = (currentPhrase + 1) % phrases.length;
    }
};

writeLoop();
