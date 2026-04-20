const footer = document.getElementById("footerAuto");
const baseText = "chefsito’s consultoría ✦ ";
let repeated = "";

while (repeated.length < 3000) {
  repeated += baseText;
}
footer.textContent = repeated;