$(document).ready(function(){
    $("#graus").change(function(){
        $("#mencions").load("./mencions.php?grau=" + $("#graus").val())

        //opción 2
        // $.ajax({url: "mencions.php?grau=" + $("#graus").val(), success:
        // function(result){
        //     $("#mencions").html(result);
        // }});
    })
    
});