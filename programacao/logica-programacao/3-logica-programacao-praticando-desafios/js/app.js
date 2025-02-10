import { listaProjetos } from "./listaProjetos.js";

let listagemProjetos = document.querySelector('#listar-projetos');

function exibirListagemNaTela() {
    listaProjetos.forEach((projeto) => {
        listagemProjetos.innerHTML += `
            <div class="conteudo__bloco conteudo__vertical">
                <img src="${projeto.imagemProjeto}" alt="Projeto - ${projeto.tituloProjeto}" class="conteudo__imagem"/>
                <h2 class="conteudo__subtitulo">${projeto.tituloProjeto}</h2>
                <a href="${projeto.caminhoProjeto}/" target="_blank" class="conteudo__botao conteudo__botao-azul">Acessar</a>
            </div>
        `;
    });
}   

exibirListagemNaTela();