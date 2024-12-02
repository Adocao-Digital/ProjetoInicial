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

const senha = document.getElementById('ipassword')
const confirma = document.getElementById('iconfirm')
const escrita = document.getElementById('escrita')
const form = document.getElementById('formscad')

function validar()
{
  if (senha.value !== confirma.value) 
    {
        escrita.textContent = 'As senhas não coincidem!'
    } 
    else 
    {
        escrita.textContent = ''
    }
}

senha.onchange = validar()
confirma.onkeyup = validar()

form.onsubmit = function(event) 
{
    if (senha.value !== confirma.value) 
    {
        event.preventDefault();
        escrita.textContent = 'As senhas não coincidem!';
    }
  }