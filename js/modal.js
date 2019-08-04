$(document).ready(function() {

    $(".lelien").click(function(e) {
        console.log(e.target.id);
        $.get("modal.php", {id: e.target.id}, function(data) {

            $("#myModalNoBS").html(data);
            $("#myModalNoBS").css("transform", "scale(1,1)");
            $("#myModalNoBS").css("opacity", "1");

            $(".cross").click(() => {
                $("#myModalNoBS").css({"transform": "scale(0,0)", "opacity": "0"});
                $("#myModalNoBS").one('transitionend', () => {
                    $("#myModalNoBS").html("");
                });
            });
            
        });
    });

});