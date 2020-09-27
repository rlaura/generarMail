function generarMail() {
document.getElementById('res').innerHTML = ''
let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mail").value =
      this.responseText;
    }
  };
  xhttp.open("GET", "bl/generarMails.php", true);
  xhttp.send();
}

function copiar() {
	let input = document.getElementById("mail");
	if (input.value == ''){
		alert('Debe generar un mail primero')
	} else {

		input.select();
	    document.execCommand("copy");
	    if(document.execCommand("copy")){
	    	document.getElementById('res').innerHTML = 'Copiado!'
	    } else {
	    	document.getElementById('res').innerHTML = 'No se pudo copiar'
	    }
	}

}