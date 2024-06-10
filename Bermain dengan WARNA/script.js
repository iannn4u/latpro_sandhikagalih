const text = document.querySelector(".text");
const button = document.querySelector(".button");

button.addEventListener("click", () => {
  document.body.setAttribute("class", "biru-muda");
});

const newButton = document.createElement('button');
newButton.textContent = 'Red';
document.querySelector('button').after(newButton);
newButton.addEventListener('click', () => {
  const r = Math.round(Math.random() * 255 + 1);
  const g = Math.round(Math.random() * 255 + 1);
  const b = Math.round(Math.random() * 255 + 1);
  document.body.style.background = `rgb(${r}, ${g}, ${b})`
})

const sMerah = document.querySelector('#merah');
const sHijau = document.querySelector('#hijau');
const sBiru = document.querySelector('#biru');
sMerah.addEventListener('input', () => {
  const vMerah = sMerah.value;
  const vHijau = sHijau.value;
  const vBiru = sBiru.value;
  document.body.style.background = `rgb(${vMerah}, ${vHijau}, ${vBiru})`
})
sHijau.addEventListener('input', () => {
  const vMerah = sMerah.value;
  const vHijau = sHijau.value;
  const vBiru = sBiru.value;
  document.body.style.background = `rgb(${vMerah}, ${vHijau}, ${vBiru})`
})

sBiru.addEventListener('input', () => {
  const vMerah = sMerah.value;
  const vHijau = sHijau.value;
  const vBiru = sBiru.value;
  document.body.style.background = `rgb(${vMerah}, ${vHijau}, ${vBiru})`
})

document.body.addEventListener('mousemove', (e) => {
  const xPos = Math.round((e.clientX / window.innerWidth) * 255)
  const yPos = Math.round((e.clientY / window.innerHeight) * 255)
  document.body.style.background = `rgb(${xPos}, ${yPos}, 100)`
})