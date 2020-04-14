$(document).ready(function() { // run when the whole site is loaded

    translate("bg");
 
    $(".translate-button").on("click", function() {
        translate($(this).data("lng"));
    });

});
function deleteRecord(id){
    if (confirm("Are you sure you want to delete record with id " + id)){
        $("input[name=recordId]").val(id);                
        $("form#deleteForm").submit();                
    }

    return false;
}

function approveRecord(id){
    if (confirm("Are you sure, you want to approve recipe with id " + id)){
        $("input[name=recordId]").val(id);                
        $("form#approveForm").submit();                
    }

    return false;
}