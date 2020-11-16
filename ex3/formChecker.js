document.addEventListener("DOMContentLoaded", () => {
  const button = document.querySelector("#button")
      button.addEventListener("click", () => {
        resetall();
        alert("All has been reset!");
      })

function resetall()
{
  document.querySelector("#qpen").value = "";
  document.querySelector("#qpencil").value = "";
  document.querySelector("#qeraser").value = "";
  document.querySelector("#username").value = "";
  document.querySelector("#password").value = "";
  document.getElementById("ship1").checked = false;
  document.getElementById("ship2").checked = false;
  document.getElementById("ship3").checked = false;
}

function ValidateEmail(inputText)
{
  var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if(inputText.match(mailformat))
  {
    return true;
  }else
  {
    return false;
  }
}

function validateForm()
{
  if(document.querySelector("#qpen").value == "" || document.querySelector("#qpencil").value == "" ||   document.querySelector("#qeraser").value == "")
  {
    alert("Cannot leave the item quantity blank!");
    return false;
  }else if(document.querySelector("#qpen").value<0|| document.querySelector("#qpencil").value<0||   document.querySelector("#qeraser").value<0)
  {
    alert("Item quantity cannot be negative!");
    return false;
  }else if(!ValidateEmail(document.querySelector("#username").value))
  {
    alert("User name not in correct format!");
    return false;
  }else if(document.querySelector("#password").value == "")
  {
    alert("Password cannot be blank!");
    return false;
  }else if(document.getElementById("ship1").checked==false && document.getElementById("ship2").checked==false && document.getElementById("ship3").checked==false)
  {
    alert("Must select a shipping method!");
    return false;
  }else
  {
    return true;
    alert("here");
  }
}

//document.getElementById("myForm").onsubmit = function() {validateForm()};

})
