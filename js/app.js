let divIndex = document.getElementById("index");
//let divContato = document.getElementById("cont");
//let divServico = document.getElementById("servi");

let btnIndex = document.getElementById("inde");
let btnServico = document.getElementById("servico");
let btnContato = document.getElementById("contato");
let btnCartao = document.getElementById("cartao");
//let dj2 = document.getElementById("dj2");
btnIndex.onclick = function() {
	requisitarArquivo("inde.php", divIndex);
};
btnServico.onclick = function() {
	requisitarArquivo("servicos.php", divIndex);
};
btnContato.onclick = function() {
	requisitarArquivo("contatos.php", divIndex);
};
btnCartao.onclick = function() {
	requisitarArquivo("cartao.php", divIndex);
};

let btnHistorico = document.getElementById("historico");
let divCarrega = document.getElementById("carrega");
btnHistorico.onclick = function() {
	requisitarArquivo("historico.php", divIndex);
};


