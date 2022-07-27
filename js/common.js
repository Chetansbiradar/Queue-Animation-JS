
'use-strict'
//this creates those boxes
var queue,MAXSIZE;

function linedraw(ax,ay,bx,by){
  var newLine = document.createElementNS('http://www.w3.org/2000/svg','line');
  newLine.setAttribute('id','line2');
  newLine.setAttribute('x1',ax);
  newLine.setAttribute('y1',ay);
  newLine.setAttribute('x2',bx);
  newLine.setAttribute('y2',by);
  x = document.getElementById("map");
  x.append(newLine)
}

function numOfElementsCreate() {
    if (document.getElementById("numOfElementsIn").value.trim() == "" || document.getElementById("numOfElementsIn").value.trim() <3 ||  document.getElementById("numOfElementsIn").value.trim() > 12) {
        alert("ERROR: Input some value or insert 3<value<12")
        return
    }
    var numOfElementsIn = document.getElementById("numOfElementsIn");
    MAXSIZE = numOfElementsIn.value;
    queue = new Array(parseInt(MAXSIZE));
    for (let i = 0; i < MAXSIZE; i++) {
            document.getElementsByClassName("boxContainer")[0].innerHTML += '<div class="box" id="boxOf' + (i).toString() + '"></div>'
    }
    numOfElementsIn.value = ""
    numOfElementsIn.placeholder = "Disabled"
    numOfElementsIn.disabled = true;
    document.getElementById("createArrayButton").disabled = true;
    document.getElementById("createArrayButton").innerText = "Disabled";    
    console.log(document.getElementsByClassName("boxContainer")[0]);
  }


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementsByTagName("nav")[0].style.top = "0";
  } else {
    document.getElementsByTagName("nav")[0].style.top = "-70px";
  }
  prevScrollpos = currentScrollPos;
}

function refreshPage(){
  window.location.reload();
}