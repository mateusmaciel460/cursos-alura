function multiplicadorLogoRodape(id) {
    let elemento = document.querySelector(`#elemento-multiplicador-${id}`);

    for (let contador = 0; contador < 4; contador++) {
        elemento.innerHTML += `
            <li class="modelo__horizontal modelo__justifcado-alinhado--centro">
                <img src="images/logo-caelum.png" alt="Logo - Caelum 01"/>
                Caelum
            </li>
        `;
    }
}

multiplicadorLogoRodape(1);
multiplicadorLogoRodape(2);
multiplicadorLogoRodape(3);