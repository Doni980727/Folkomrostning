$(document).ready(function(){
    $("button").click(function(){
            $.post("action_page.php", $("form").serialize());
        
    });
});