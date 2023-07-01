
var BSRadio = document.getElementById("Best-sellers");
var PRadio = document.getElementById("Popular");
var DTRadio = document.getElementById("Dining-tables");
var BRadio = document.getElementById("Beds");



var img1 = document.getElementById("img1");
var img2 = document.getElementById("img2");
var img3 = document.getElementById("img3");
var img4 = document.getElementById("img4");
var oimg1 = img1.src;
var oimg2 = img2.src;
var oimg3 = img3.src;
var oimg4 = img4.src;

BSRadio.addEventListener("change", handleRadioChange);
PRadio.addEventListener("change", handleRadioChange);
DTRadio.addEventListener("change", handleRadioChange);

BRadio.addEventListener("change", handleRadioChange);

function handleRadioChange(event) {

  if (event.target.value === "option1")
  {
   img1.src = oimg1 ;
    img2.src =oimg2 ;
    img3.src = oimg3;
 img4.src = oimg4;
  }
  if (event.target.value === "option2")
  {
    img1.src= img2.src = "views/imgs/kitchen 1.svg";
    img3.src = img4.src = "views/imgs/mirrors 1.svg";
  }
  if (event.target.value === "option3")
  {
    img1.src= img2.src = "views/imgs/dining 1.svg";
    img3.src = img4.src = "views/imgs/hot 1.svg";
  }
  if (event.target.value === "option4")
  {
    img1.src= img2.src = "views/imgs/beds.svg";
    img3.src = img4.src = "views/imgs/beds2.svg";
  }
}
