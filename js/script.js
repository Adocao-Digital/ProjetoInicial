document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("usuario").focus();
});

function toggleSenha() {
    const senhaInput = document.getElementById("senha");
    const tipo = senhaInput.getAttribute("type") === "password" ? "text" : "password";
    senhaInput.setAttribute("type", tipo);
    if (tipo === "text") {
        imgSenha.src = "img/opened-eye.png"; // Olho aberto
        imgSenha.alt = "Olho Aberto";
    } else {
        imgSenha.src = "img/closed-eye.png"; // Olho fechado
        imgSenha.alt = "Olho Fechado";
    }
}