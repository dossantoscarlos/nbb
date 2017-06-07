$(function(){
  form();
});
function form(){
  $('input[type=file]').click(function(){
      console.log($('input[type=file]'));
  });
  $("form").submit(function(){ return true;});
}
