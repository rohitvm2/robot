$(document).ready(function(){
  $(".microphone").click(function(){
    let mic = new webkitSpeechRecognition();
    mic.start();
    mic.onstart = function()
    {
      $(".microphone").css("color","red");
      $(".microphone").addClass("animate__animated animate__bounce animate__infinite infinite");
    }
    mic.onspeechend = function()
    {
      $(".microphone").css("color","black");
      $(".microphone").removeClass("animate__animated animate__bounce animate__infinite infinite");
    }
    mic.onresult = function()
    {
      let voice = e.results[0][0].transcript;
      $("#question").val(voice);
    }
  });
});