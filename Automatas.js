var inputs = [1, 0, 0, 1];
var inicio = 1;
var finalizar = 1;
var actual = inicio;

var fin = false;

var contador = 0;
while (fin == false) {
  if (contador > inputs.length-1) {
    fin = true;
    break;
  }
  if(actual == 1) {
    if (inputs[contador] == 1) {
      actual=1;
    }
    if (inputs[contador] == 0) {
      actual = 2;
    }
    contador ++;
    continue;
  }
  if(actual == 2) {
    if (inputs[contador] == 1) {
      actual=2;
    }
    if (inputs[contador] == 0) {
      actual = 1;
    }
    contador ++;
    continue;
  }
}

if (actual == finalizar) {
  console.log("La cadena es correcta");
} else {
  console.log("La cadena es incorrecta");
}
