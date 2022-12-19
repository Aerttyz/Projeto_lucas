const excluir = (id) => {
    window.location.href = `./deleta.php?id=${id}`
}

const editar = (id) => {
    window.location.href = `../cadastro_partitura/cadastro_partitura.php?id=${id}`
}

const definirExcluir = () => {
  let anchors = document.getElementsByClassName("exc");
  for (var i = 0; i < anchors.length; i++) {
    let anchor = anchors[i];
    anchor.onclick = () => {
      excluir(anchor.dataset.id);
    };
  }
};

const definirBaixar = () => {
  let anchors = document.getElementsByClassName("Baixar");
  for (var i = 0; i < anchors.length; i++) {
    let anchor = anchors[i];
    anchor.onclick = () => {
      excluir(anchor.dataset.id);
    };
  }
};

const definirEditar = () => {
  let anchors = document.getElementsByClassName("edit");
  for (var i = 0; i < anchors.length; i++) {
    let anchor = anchors[i];
    anchor.onclick = () => {
      editar(anchor.dataset.id);
    };
  }
};

const start = () => {
  definirExcluir();
  definirBaixar();
  definirEditar();
};

start();
