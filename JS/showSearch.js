
$(document).ready(function(){
  $("#suggest").keyup(function() {
   // $(".dropdown-child-form").css("display","block");
    $.get("include/suggest.php", {search: $(this).val()}).done(function(data){
      console.log(data)
      $("datalist").empty();
      $("datalist").html(data);

    });
  });
});
