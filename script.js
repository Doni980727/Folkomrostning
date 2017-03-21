$(document).ready(function(){
    $("#in").click(function(){
            $.post("action_page.php", $("form").serialize());
        
    });
});

$("#table").click(function(){
    $.get("results.php", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});