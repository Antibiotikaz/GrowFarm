
  // var x = 10;
  // var y = "Labas";
  // var masinos = ['Porsche', 'Audi', 'BMW'];
  //
  // console.log(typeof(x));
  // console.log(typeof(y));
  //
  // console.log(y + " man yra " + x + " metų");
  // console.log(masinos[0]);
  //
  // var text = document.getElementById("BigText");
  // text.innerHTML = "Goodbye!";

  // var off = document.getElementById("mygtukasOff");
  // var paragrafas = document.getElementById("para");
  //
  // function paragrafoIsjungimas() {
  //     paragrafas.style.display = "none";
  // }
  // function paragrafoIjungimas(){
  //   paragrafas.style.display = "block";
  // }
//
//   var x = document.createElement("button");
//   var cont = document.getElementById("buttonContainer");
//   x.innerHTML = "Sukurtas Mygtukas";
//   var counter = 0;
//
// function newElement(){
//   do {
//     x.classList.add("btn", "btn-lg", "p-3", "text-white", "bg-secondary");
//     cont.appendChild(x);
//     counter++;
//   } while (counter <= 1);
// }

// 1. paspaudus ant naujai sukurto mygtuko, atsiranda paveiksliukas.
// 2. perrasyti funkcija, kad paspaudus ant Isjungimo mygtyko – pradingtų ir paragrafas su paveiksliuku ir naujai sukurtas mygtukas
// 3. sukurti mygtuką, kurį paspaudus, pries paragrafą sukurtų h1 elementą
// 4. sukurti nauja mygtuka "Naujas paragrafas", kuris pridetu naują paragrafą apačioje

// 5 (papildomai) sudėti mygtukus į elementų masyvą ir atvaizduoti

  // $('#mygtukasOff').click(function(){
  //   $('#para').hide();
  // });
  // $('#mygtukasOn').click(function(){
  //   $('#para').show("slow");
  // });
  // $('#universal').click(function(){
  //   $('#para').toggle();
  // });
// $("#mygtukasOff").click(function(){
//    $("#para").hide();
//  });

// var MasyvasZmones = ['Mantas', 'Antanas', 'Tautvydas'];
// var x = MasyvasZmones;
//
// x.push("Motiejus");
// // x.pop();
// // x.shift();
//
// x.splice(2, 2, "Tadas", "Mykolas");
// console.log(x.indexOf());


var sarasas = Array();
var x = 0;

function addToArray(){
  sarasas[x] = document.getElementById("text").value;
  console.log(sarasas[x] + " " + "Elementas yra pridėtas!");
  x++;
  document.getElementById("text").value = "";
  console.log(x);

  if(document.getElementById('text').value.length == 0)
  {
    alert("KLaida!!!!")
    return false;
  }
  return true;
}



function showResult(){
 var rez = "<br/>";
  for (var i=0; i<sarasas.length; i++) {
    // sarasas[i];
    rez = rez + i + ". " + sarasas[i] + "<br/>";
  }
document.getElementById("rezultatas").innerHTML = rez;





// 1. palikus tuscia laukeli ir paspaudus Add, turėtų parašyti "Klaida. Laukelis tuscias."
// 2. Sukurti mygtuka "warning", kuris išvalytų visą sąrašą.
// 3. Sukurti mytuką "danger", kuris panaikins paskutinį sarase esantį elementą (arba atsitiktinai)

}

function remove(){
  sarasas.pop();
  showResult();
}

function empty(){
  sarasas.length = 0;
  showResult();
}
