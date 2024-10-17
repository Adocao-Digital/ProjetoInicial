function toggleSenha() {
    let senhaInput = document.getElementById("ipassword");
    let tipo = senhaInput.getAttribute("type") === "password" ? "text" : "password";
    senhaInput.setAttribute("type", tipo);
    if (tipo === "text") {
        imgSenha.src = "img/opened-eye.png"; // Olho aberto
        imgSenha.alt = "Olho Aberto";
    } else {
        imgSenha.src = "img/closed-eye.png"; // Olho fechado
        imgSenha.alt = "Olho Fechado";
    }
}

function toggleSenha2() {
    let senhaInput = document.getElementById("iconfirm");
    let tipo = senhaInput.getAttribute("type") === "password" ? "text" : "password";
    senhaInput.setAttribute("type", tipo);
    if (tipo === "text") {
        imgSenhaConfirm.src = "img/opened-eye.png"; // Olho aberto
        imgSenhaConfirm.alt = "Olho Aberto";
    } else {
        imgSenhaConfirm.src = "img/closed-eye.png"; // Olho fechado
        imgSenhaConfirm.alt = "Olho Fechado";
    }
}