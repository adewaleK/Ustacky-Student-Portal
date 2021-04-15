// function loadLocalGovtAjax(){
//   let xmlhttp = window.XMLHttpRequest()? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
//   xmlhttp.onreadystatechange = function(){

//     if(this.readyState === 4 && this.state === 200){

//      var result = JSON.parse(this.responseText);

//      if(result){
//          document.getElementById("local").style.display = "block";
//          document.getElementById("local").style.innerHTML = result;

//          setTimeout(function(){
//             location.reload()
//          },200);

//      }
      
//   }

//   let selectedStateId = document.getElementById("state").value;

//   xmlhttp.open("POST","config/processLocal.php");

//   xmlhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");

//   xmlhttp.send("selectedStateId="+selectedStateId);


$(document).ready(function(){
    $("#state").change(function(){
      var state_id = $(this).val();
      $.ajax({
        url: "config/processLocal.php",
        method: "POST",
        data: {stateID:state_id},
        success: function(data){
           $("#local").html(data);
        }
      })

    });
})


function registerStudentAjax(){
  let xmlhttp = window.XMLHttpRequest() ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

  xmlhttp.onreadystatechange = function(){
    if(this.readyState === 4 && this.state === 200){
      var result = JSON.parse(this.responseText);

    }

  }

  let image = document.getElementById("image").value;
  let firstName = document.getElementById("fname").value;
  let middleName = document.getElementById("mname").value;
  let lastName = document.getElementById("lname").value;
  let email = document.getElementById("email").value;
  let dateOfBirth = document.getElementById("dob").value;
  let gender = document.getElementById("gender").value;
  let phoneNumber = document.getElementById("phone").value;
  let address = document.getElementById("address").value;
  let state = document.getElementById("state").value;
  let local = document.getElementById("local").value;
  let next = document.getElementById("next").value;
  let score = document.getElementById("score").value;


  xmlhttp.open("POST","config/processForm.php");
  xmlhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
  xmlhttp.send("image="+image+ "&firstName="+firstName+"&middleName="+middleName+ "&lastName="+lastName+ "&email="+email+ "&dateOfBirth="+dateOfBirth+ "&gender="+gender+ "&phone="+phone+ "&address="+address+ "&state="+state+ "&local="+local+ "&next="+next+ "&score="+score);

}
