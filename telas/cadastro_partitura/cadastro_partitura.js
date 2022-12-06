const notas = []

const renderizarPartitura = () => {
    retorno = ''
    let container = document.getElementById('partituraContainer')
    notas.map((nota) => {
        console.log('uepa')
        retorno += `<img class="notaPartitura" src="../../simbolos/${nota.pausa?'Pausas':'Notas'}/${nota.tempo}.png" />`
    })

    container.innerHTML = retorno
}

const handleClick = (tempo, pausa) => {
    notas.push({tempo: tempo, pausa: pausa})
    renderizarPartitura()
}

renderizarPartitura();