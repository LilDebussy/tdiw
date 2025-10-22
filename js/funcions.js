$(document).ready(function(){
    $("#graus").change(function(){
        $("#mencions").load("./mencions.php?grau=" + $("#graus").val())
    })
    
});