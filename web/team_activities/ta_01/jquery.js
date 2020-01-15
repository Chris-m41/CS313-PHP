$(document).ready(function() {
    $("#jChangeColor").click(function() {
        var color = $("#jtxtColor").val();
        $("#div2").css("background-color", color);
    });

    $("#fade").click(function() {
        $("#div3").fadeOut("slow");
        $("#div3").fadeIn("slow");
    });
});