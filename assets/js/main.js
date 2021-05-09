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
      var result;
      if($(this).prop('checked') == true){
        result = "Admitted";  
      }else{
        result = "Undecided";
      }
      $.ajax({
        url: "config/change_status.php",
        method: "GET",
        data: {result:result},
        success: function(data){
          $("#ppp").html(data);
          $("#curr-status").html(data);           
        }

      }) 
    })

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

    //Ajax to Search By Name
    $("#name_search").keyup(function(){
      var search = $(this).val();
      $.ajax({
        url: "config/search_name.php",
        method: "POST",
        data: {search:search},
        success: function(data){
          $("#students-data").html(data);
        }

      }) 
    })

    //Ajax to Search By Admission status
    $("#admin_status").change(function(){
      var status = $(this).val();
      $.ajax({
        url: "config/search_status.php",
        method: "POST",
        data: {status:status},
        success: function(data){
          $("#students-data").html(data);
        }
      }) 
    })

    //Ajax to Search By Gender And Jamb score
    $("#search").click(function(e){
      e.preventDefault();
      var gender = $("#gender").val();
      var score = $("#jamb_score").val();
      $.ajax({
        url: "config/gender_score_search.php",
        method: "POST",
        data: {score,gender},
        success: function(data){
          $("#students-data").html(data);
        }
      }) 
    })


    


})

