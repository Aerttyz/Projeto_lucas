let notas = [];
let partituraId = '';

const renderizarPartitura = () => {
  retorno = "";
  let container = document.getElementById("partituraContainer");
  notas.map((nota) => {
    retorno += `<img class="notaPartitura" src="../../simbolos/${
      nota.pausa ? "Pausas" : "Notas"
    }/${nota.tempo}.png" />`;
  });
  console.log(notas);
  container.innerHTML = retorno;
};

const handleClick = (tempo, pausa) => {
  notas.push({ tempo: tempo, pausa: pausa });
  renderizarPartitura();
};

const defineNotas = (arrayNotas) => {
  notas = arrayNotas || [];
};

const defineId = (id) => {
    partituraId = id;
  };

function post(path, params, method = "post") {
  const form = document.createElement("form");
  form.method = method;
  form.action = path;

  for (const key in params) {
    if (params.hasOwnProperty(key)) {
      const hiddenField = document.createElement("input");
      hiddenField.type = "hidden";
      hiddenField.name = key;
      hiddenField.value = params[key];

      form.appendChild(hiddenField);
    }
  }

  document.body.appendChild(form);
  form.submit();
}

const salvar = () => {
  post("./update.php", { pauta: JSON.stringify(notas), id: partituraId });
};

const defineSalvar = () => {
  let botaoSalvar = document.getElementById("botaoSalvar");
  botaoSalvar.onclick = salvar;
};

const start = () => {
  renderizarPartitura();
  defineSalvar();
};

start();
