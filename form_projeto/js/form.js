// Preenche o campo "Dia" com opções de 1 a 31
const diaSelect = document.getElementById("dia");
for (let i = 1; i <= 31; i++) {
    const option = document.createElement("option");
    option.value = i;
    option.textContent = i;
    diaSelect.appendChild(option);
}

// Preenche o campo "Ano" com opções de 1900 até o ano atual
const anoSelect = document.getElementById("ano");
const anoAtual = new Date().getFullYear();
for (let i = anoAtual; i >= 1900; i--) {
    const option = document.createElement("option");
    option.value = i;
    option.textContent = i;
    anoSelect.appendChild(option);
}
