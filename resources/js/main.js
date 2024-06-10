//codigo filter elemnts gallery
filterSelection("all")
 function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

 function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

 function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// se modifico el codigo porque el de w3 school no funciono en esta parte
document.addEventListener('DOMContentLoaded', () => {
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
          // Remove the 'active' class from all buttons
          for (var j = 0; j < btns.length; j++) {
              btns[j].classList.remove("active");
          }
          // Add the 'active' class to the clicked button
          this.classList.add("active");
      });
  }
});

export { filterSelection, w3AddClass, w3RemoveClass };





















// codigo jquery galeria


    
