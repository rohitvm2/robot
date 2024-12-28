$(document).ready(function(){
  $(".insert-btn").click(function(){
    let question = $("#question").val();
    let answer = $("#answer").val();
    $.ajax({
      type : "POST",
      url : "php/insert_data.php",
      data : {
        question : question,
        answer : answer,
      },
      success : function(response){
        alert(response);
      }
    });
  });
});