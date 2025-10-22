$(document).ready(function(){
    $("#mencions").load("./mencions.php?grau=" + $("#graus").val())
});