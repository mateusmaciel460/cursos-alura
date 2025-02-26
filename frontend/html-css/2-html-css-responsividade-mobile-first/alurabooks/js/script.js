let elemento = document.querySelector('#elemento-multiplicador');

function multiplicadorLogoRodape() {
    for (let contador = 0; contador < 4; contador++) {
        elemento.innerHTML += `
            <ul class="rodape__menu-lista modelo__vertical">
                <li class="rodape__menu-titulo texto-maiusculo">Educação</li>
                
                <li class="modelo__horizontal modelo__justifcado-alinhado--centro">
                    <img src="images/logo-caelum.png" alt="Logo da Caelum"/>
                    <a href="#" class="modelo__link">Caelum</a>
                </li>

                <li class="modelo__horizontal modelo__justifcado-alinhado--centro">
                    <img src="images/logo-caelum.png" alt="Logo da Caelum"/>
                    <a href="#" class="modelo__link">Caelum</a>
                </li>

                 <li class="modelo__horizontal modelo__justifcado-alinhado--centro">
                    <img src="images/logo-caelum.png" alt="Logo da Caelum"/>
                    <a href="#" class="modelo__link">Caelum</a>
                </li>
            </ul>
        `;
    }
}

multiplicadorLogoRodape();