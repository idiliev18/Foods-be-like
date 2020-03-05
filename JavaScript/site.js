$(document).ready(function() { // run when the whole site is loaded

    translate("bg");
 
    $(".translate-button").on("click", function() {
        translate($(this).data("lng"));
    });

});
