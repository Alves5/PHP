
let divIndex = document.getElementById("index");
let divContato = document.getElementById("cont");
let divServico = document.getElementById("servi");
//let divCarrega = document.getElementById("carrega");
let btnIndex = document.getElementById("inde");
let btnServico = document.getElementById("servico");
let btnContato = document.getElementById("contato");
//let dj2 = document.getElementById("dj2");
btnIndex.onclick = function() {
	requisitarArquivo("index.php", divIndex);
};
btnServico.onclick = function() {
	requisitarArquivo("servicos.php", divIndex);
};
btnContato.onclick = function() {
	requisitarArquivo("contatos.php", divIndex);
};
/*dj2.onclick = function() {
	requisitarArquivo("evideo.php", divCarrega);
};*/


