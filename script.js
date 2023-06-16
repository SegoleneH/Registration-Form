function highlightSelectedOption() {
    var selectElement = document.getElementById("favTroop");
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    selectedOption.style.backgroundColor = "gold";
    selectedOption.style.color = "green";
  }
//   /!\ pas encore importé dans html