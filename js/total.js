var qtd = document.querySelector("#qtd")
var valor = document.querySelector("#preco")
var total = document.querySelector("#total")
function alterapreco(){
	var a = qtd.value
	var b = valor.textContent
	b = b.replace("R$", "")
	b = b.replace(",", ".")
	var c = a * b
	c = "R$ " + c.toFixed(2)
	c = c.replace(".", ",")
	total.value = c
}
qtd.oninput = alterapreco
