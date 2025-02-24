let componente = document.querySelector('#componente');
const listaComponentes = [
    { 
        id: 1, html: `
            <div class="conteudo__camada conteudo__vertical">
                <h1 class="conteudo__subtitulo">Lorem ipsum dolor sit amet.</h1>
                <p class="conteudo__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae aliquid natus, incidunt nihil illo aspernatur tempora iste illum veniam laborum alias, in quasi nulla rem quae quas itaque sequi? Beatae!</p>
            </div>

            <img src="../imagens/imagem-comum.png" alt="Imagem comum" class="conteudo__imagem"/>
        `,
    }, 
    {
        id: 2, html: `
            <h2 class="conteudo__subtitulo">Sobre</h2>
            <p class="conteudo__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione non accusantium voluptates alias dignissimos tempora soluta nesciunt. Est ducimus quis accusamus voluptas voluptate repellendus consequuntur enim nemo iste suscipit officia ab facilis amet, molestiae placeat adipisci aut nostrum, commodi aliquid? Eos, quaerat quibusdam rerum saepe temporibus labore consequuntur ex, eveniet ipsum quisquam recusandae minus aspernatur veniam ipsam et dolorem fugiat voluptates architecto! Dolorem, unde! Est, nulla cumque praesentium veniam excepturi sint enim nobis dolores consectetur quod magnam laboriosam? Atque id sit minima amet facere debitis aliquid sequi. Iure fugiat, quidem voluptates veritatis qui reprehenderit, et quam id quibusdam doloremque rerum!</p>
        `,
    },
    {
        id: 3, html: `
            <div class="conteudo__grupo">
                <div class="conteudo__camada conteudo__vertical">
                    <img src="../imagens/imagem-comum.png" alt="imagem 01"/>
                    <span class="conteudo__destaque">Planta 04</span>
                </div>

                <div class="conteudo__camada conteudo__vertical">
                    <img src="../imagens/imagem-comum.png" alt="imagem 01"/>
                    <span class="conteudo__destaque">Planta 04</span>
                </div>

                <div class="conteudo__camada conteudo__vertical">
                    <img src="../imagens/imagem-comum.png" alt="imagem 01"/>
                    <span class="conteudo__destaque">Planta 04</span>
                </div>

                <div class="conteudo__camada conteudo__vertical">
                    <img src="../imagens/imagem-comum.png" alt="imagem 01"/>
                    <span class="conteudo__destaque">Planta 04</span>
                </div>
            </div>
        `,
    },
    {
        id: 4, html: `
            <div class="conteudo__camada conteudo__vertical">
                <h2 class="conteudo__subtitulo">Entre em contato</h2>

                <ul class="conteudo__menu-lista conteudo__vertical">
                    <li class="conteudo__menu-item">
                        Email: <span class="conteudo__destaque">nome@email.com</span>
                    </li>

                    <li class="conteudo__menu-item">
                        Telefone: <span class="conteudo__destaque">(88) 98888 - 8888</span>
                    </li>

                    <li class="conteudo__menu-item">
                        Rua: <span class="conteudo__destaque">Avenida Brasil</span>
                    </li>
                </ul>
            </div>
        `
    }
];

function mostrarPaginaIndex() {
    componente.innerHTML += `${listaComponentes[0].html}`;
}

function buscarComponente(idComponente) {
    for (let contador = 0; contador < 5; contador++) {
        listaComponentes.forEach((elemento) => {
            if (idComponente == elemento.id) {
                componente.innerHTML = `${elemento.html}`;
            }
        })
    }
}

mostrarPaginaIndex();