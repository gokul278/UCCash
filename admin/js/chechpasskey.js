passkeyerrclear = () =>{
    $("#checkpasserr").html("");
}

clearpassword = () =>{
    $("#passerr").html("");
}

$("#checkpass").submit((event) => {
    event.preventDefault();
    var frm = $("#checkpass")[0];
    var frmdata = new FormData(frm);
    $.ajax({
        url: "./ajax/chechpasskey.php",
        type: "POST",
        data: frmdata,
        processData: false,
        contentType: false,
        cache: false,
        success: function(res) {
            console.log(res);
            var response = JSON.parse(res);
            if (response.status == "success") {
                location.replace("ChangePassword.php");
            } else if (response.status == "InvalidPassKey") {
                $("#checkpasserr").html("Invalid PassKey")
            } else if (response.status == "notexits") {
                $("#errormessage").html("Invalid Username")
            }
        }
    });
})

$("#passchange").submit((event) => {
    event.preventDefault();
    var frm = $("#passchange")[0];
    var frmdata = new FormData(frm);
    $.ajax({
        url: "./ajax/chechpasskey.php",
        type: "POST",
        data: frmdata,
        processData: false,
        contentType: false,
        cache: false,
        success: function(res) {
            console.log(res);
            var response = JSON.parse(res);
            if (response.status == "success") {
                location.replace("index.php");
            } else if (response.status == "repasscheck") {
                $("#passerr").html("Check Confirm Password")
            }
        }
    });
})
