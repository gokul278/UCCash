const clearerror = () => {
    $("#errormessage").html("");
}
$("#frm").submit((event) => {
    event.preventDefault();
    var frm = $("#frm")[0];
    var frmdata = new FormData(frm);
    $.ajax({
        url: "./ajax/indexajax.php",
        type: "POST",
        data: frmdata,
        processData: false,
        contentType: false,
        cache: false,
        success: function(res) {
            var response = JSON.parse(res);
            if (response.status == "success") {
                location.replace("donation.php");
            } else if (response.status == "checkpass") {
                $("#errormessage").html("Check Password")
            } else if (response.status == "notexits") {
                $("#errormessage").html("Invalid Username")
            }
        }
    });
})