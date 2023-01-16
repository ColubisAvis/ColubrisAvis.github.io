$(document).ready(function(){
  $("#totu").click(function(){
    $("#div1").text($("form").serialize());
  });
});