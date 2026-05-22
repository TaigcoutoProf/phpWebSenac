const botao = document.getElementById("btnSalvar");

botao.addEventListener("click", () => {

    const nome = document.getElementById("nome").value;
    const idade = document.getElementById("idade").value;
    const cidade = document.getElementById("cidade").value;
    const email = document.getElementById("email").value;

        if(nome.trim() === "" || email.trim() === "") {
        alert("Preencha todos os campos");
        return;
    }

    fetch("salvar.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            nome: nome,
            idade: idade,
            cidade: cidade,
            email: email,
        })
    })                        // ✅ fechamento correto do fetch()
    .then(response => response.json())
    .then(dados => {
        alert(dados.mensagem);
        listarUsuarios();
    })
    .catch(erro => {
        console.log("Erro:", erro);
    });

});

function listarUsuarios() {

    fetch("listar.php")
    .then(response => response.json())
    .then(usuarios => {

        const resultado = document.getElementById("resultado");
        resultado.innerHTML = "";

        usuarios.forEach(usuario => {
            resultado.innerHTML += `
                <div class="usuario">
                    <p><strong>Nome:</strong> ${usuario.nome}</p>
                    <p><strong>Idade:</strong> ${usuario.idade}</p>
                    <p><strong>Cidade:</strong> ${usuario.cidade}</p>
                    <p><strong>Email:</strong> ${usuario.email}</p>
                </div>
            `;
        });

    });

}

listarUsuarios();