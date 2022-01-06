function myFunction() {
    var blank = document.getElementById("blank");
    var description = document.getElementById("description")
    var btnText = document.getElementById("myBtn");
    
  
    if (blank.style.display === "none") {
      blank.style.display = "inline";
      btnText.innerHTML = "Show Details";
      description.style.display = "none";
    } else {
      blank.style.display = "none";
      btnText.innerHTML = "Hide Details";
      description.style.display="inline"
    }
  }
 