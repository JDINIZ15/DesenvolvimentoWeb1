/*function carregaCidades(campo){
    var form=document.getElementsByTagName("form")[0];
    form.setAttribute("action"," ");
    form.submit();
};*/
alert("xablau");
document.addEventListener("DOMContentLoaded", () => {
  var selectClasse = document.getElementById("classe");
  selectClasse.addEventListener("change", carregaEspecies);
});
const pegaValorClasse = () => document.getElementById("classe").value;

let criaOptionsEspecies = (resposta) => {
  var selectEspecie = document.getElementById("especie");
  limpaSelect(selectEspecie);
  console.log(resposta);
  for (var especie of resposta) {
    var optionEsp = document.createElement("option");
    optionEsp.setAttribute("value", especie);
    optionEsp.textContent = especie;
    selectEspecie.appendChild(optionEsp);
  }
};
function limpaSelect(campo) {
  var opt;
  while ((opt = campo.firstChild)) {
    campo.removeChild(opt);
  }
}
function carregaEspecies() {
  //var corpo = {"estado": pegaValorEstado()};
  var formulario = new FormData();
  formulario.append("classe", pegaValorClasse());
  fetch("http://localhost/trabalhos/Aula6/animais.php", {
    mode: "no-cors",
    method: "POST",
    headers: {
      "content-type": "application-json",
      "Access-Control-Allow-Origin": "origin-list",
    },
    body: formulario,
  })
    .then(async (resposta) => {
      var cidades = await resposta.json();
      criaOptionsEspecies(cidades);
    })
    .catch((error) => console.log(error));
}
