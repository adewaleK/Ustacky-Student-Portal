$(document).ready(function(){

    //Ajax to Load LGAs FROM STATES

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
    
    //Ajax to Update Admission Status From Undecided to Admitted And Vice-Versa

    $("#update-status").change(function(){
      var status = $(this).val();
      $.ajax({
        url: "config/change_status.php",
        method: "GET",
        data: {newStatus:status},
        success: function(data){
           $("#ppp").html(data);
           $("#curr-status").html(data);
        }
      })  
    });

    //Control Mobile Navbar Display

    $("#menu").click(function(){
      $(".brand a").css("display", "block");
      $(".elements i").css("display", "none");
      $(".elements p").css("display", "block"); 
    })

    //Ajaxt to Close Menu Bar On Mobile

    $("#close").click(function(){
      $(".brand a").css("display", "none");
      $("#brand-id").css("display", "block");
      $(".elements i").css("display", "block");
      $(".elements p").css("display", "none"); 
    })


})

