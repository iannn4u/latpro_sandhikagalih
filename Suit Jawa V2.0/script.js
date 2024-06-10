const getPilBot = () => {
  const pil = Math.random();
  if (pil < 0.34) return "gajah";
  if (pil >= 0.34 && pil < 0.67) return "semut";
  return "orang";
};

const getHasil = (getPilbot, getPilPlayer) => {
  if (getPilbot == getPilPlayer) return "SERI";
  if (getPilPlayer == "gajah") return getPilbot == "orang" ? "MENANG" : "KALAH";
  if (getPilPlayer == "semut") return getPilbot == "gajah" ? "MENANG" : "KALAH";
  if (getPilPlayer == "orang") return getPilbot == "semut" ? "MENANG" : "KALAH";
};

const imgBot = document.querySelector(".img-komputer");
const spinnerResult = () => {
  const image = ["gajah", "semut", "orang"];
  let i = 0;
  const waktuMulai = new Date().getTime();
  setInterval(() => {
    if (new Date().getTime() - waktuMulai > 1000) {
      clearInterval;
      return;
    }
    imgBot.setAttribute("src", `img/${image[i++]}.png`);
    if (i == image.length) i = 0;
  }, 100);
};

let skorsBot = 0;
let skorsPlayer = 0;
const skors = (who) => {
  const boardBot = document.querySelector(".skors-computer");
  const boardPlayer = document.querySelector(".skors-player");

  if (who == "MENANG") {
    skorsPlayer++;
    boardPlayer.textContent = skorsPlayer;
  }
  if (who == "KALAH") {
    skorsBot++;
    boardBot.textContent = skorsBot;
  }
};

const pilPlayer = document.querySelectorAll("ul li img");
pilPlayer.forEach((pil) => {
  pil.addEventListener("click", () => {
    const pilihanBot = getPilBot();
    const pilihanPlayer = pil.className;
    const hasil = getHasil(pilihanBot, pilihanPlayer);

    spinnerResult();

    setTimeout(() => {
    skors(hasil);
    const imgBot = document.querySelector(".img-komputer");
      imgBot.setAttribute("src", `img/${pilihanBot}.png`);
      const info = (document.querySelector(".info").textContent = hasil);
    }, 1000);
  });
});
