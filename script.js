// Data
var semana = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
var mes = ["janeiro", "fevereiro", "março", "abril", "Maio", "junho", "agosto", "outubro", "novembro", "dezembro"];
var s = new Date();
var m = new Date();

//Domingo
if(s.getDay() == 0){
  document.getElementById("semana").innerHTML = semana[s.getDay()];
  document.getElementById("semana1").innerHTML = semana[s.getDay()+1];
  document.getElementById("semana2").innerHTML = semana[s.getDay()+2];
  document.getElementById("semana3").innerHTML = semana[s.getDay()+3];
  document.getElementById("semana4").innerHTML = semana[s.getDay()+4];
  document.getElementById("semana5").innerHTML = semana[s.getDay()+5];
  document.getElementById("semana6").innerHTML = semana[s.getDay()+6];
}
//Segunda
if(s.getDay() == 1){
  document.getElementById("semana").innerHTML = semana[s.getDay()];
  document.getElementById("semana1").innerHTML = semana[s.getDay()+1];
  document.getElementById("semana2").innerHTML = semana[s.getDay()+2];
  document.getElementById("semana3").innerHTML = semana[s.getDay()+3];
  document.getElementById("semana4").innerHTML = semana[s.getDay()+4];
  document.getElementById("semana5").innerHTML = semana[s.getDay()+5];
  document.getElementById("semana6").innerHTML = semana[s.getDay()-1];
}
//Terça
if(s.getDay() == 2){
  document.getElementById("semana").innerHTML = semana[s.getDay()];
  document.getElementById("semana1").innerHTML = semana[s.getDay()+1];
  document.getElementById("semana2").innerHTML = semana[s.getDay()+2];
  document.getElementById("semana3").innerHTML = semana[s.getDay()+3];
  document.getElementById("semana4").innerHTML = semana[s.getDay()+4];
  document.getElementById("semana5").innerHTML = semana[s.getDay()-2];
  document.getElementById("semana6").innerHTML = semana[s.getDay()-1];
}
//Quarta
if(s.getDay() == 3){
  document.getElementById("semana").innerHTML = semana[s.getDay()];
  document.getElementById("semana1").innerHTML = semana[s.getDay()+1];
  document.getElementById("semana2").innerHTML = semana[s.getDay()+2];
  document.getElementById("semana3").innerHTML = semana[s.getDay()+3];
  document.getElementById("semana4").innerHTML = semana[s.getDay()-3];
  document.getElementById("semana5").innerHTML = semana[s.getDay()-2];
  document.getElementById("semana6").innerHTML = semana[s.getDay()-1];
}
//Quinta
if(s.getDay() == 4){
  document.getElementById("semana").innerHTML = semana[s.getDay()];
  document.getElementById("semana1").innerHTML = semana[s.getDay()+1];
  document.getElementById("semana2").innerHTML = semana[s.getDay()+2];
  document.getElementById("semana3").innerHTML = semana[s.getDay()-4];
  document.getElementById("semana4").innerHTML = semana[s.getDay()-3];
  document.getElementById("semana5").innerHTML = semana[s.getDay()-2];
  document.getElementById("semana6").innerHTML = semana[s.getDay()-1];
}
//Sexta
if(s.getDay() == 5){
  document.getElementById("semana").innerHTML = semana[s.getDay()];
  document.getElementById("semana1").innerHTML = semana[s.getDay()+1];
  document.getElementById("semana2").innerHTML = semana[s.getDay()-5];
  document.getElementById("semana3").innerHTML = semana[s.getDay()-4];
  document.getElementById("semana4").innerHTML = semana[s.getDay()-3];
  document.getElementById("semana5").innerHTML = semana[s.getDay()-2];
  document.getElementById("semana6").innerHTML = semana[s.getDay()-1];
}
//Sábado
if(s.getDay() == 6){
  document.getElementById("semana").innerHTML = semana[s.getDay()];
  document.getElementById("semana1").innerHTML = semana[s.getDay()-6];
  document.getElementById("semana2").innerHTML = semana[s.getDay()-5];
  document.getElementById("semana3").innerHTML = semana[s.getDay()-4];
  document.getElementById("semana4").innerHTML = semana[s.getDay()-3];
  document.getElementById("semana5").innerHTML = semana[s.getDay()-2];
  document.getElementById("semana6").innerHTML = semana[s.getDay()-1];
}

document.getElementById("mes").innerHTML = m.getDate() + " de " + mes[m.getMonth()];

/*****************************************************************************************/

