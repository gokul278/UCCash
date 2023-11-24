const clearimage = () => {
    $("#errormessage").text("");
    $('.upload__img-wrap').empty();
}

$("#imagefrm").submit(function(event) {
    event.preventDefault();

    if ($(".upload__inputfile")[0].files.length > 0) {
        var frm = $("#imagefrm")[0];
        var frmdata = new FormData(frm);
        $.ajax({
            url: "./ajax/galleryajax.php",
            type: "POST",
            data: frmdata,
            processData: false,
            contentType: false,
            cache: false,
            success: function(res) {
                var response = JSON.parse(res);
                if (response.status == "success") {
                    location.reload();
                }
            }
        });
    } else {
        $("#errormessage").text("Choose at least one image");
    }
});

$('.removeimage').click(function() {
    var buttonValue = $(this).val();
    var imagename = $(this).attr('imagename');
    $.ajax({
        url: "./ajax/galleryajax.php",
        type: "POST",
        data: { "way": "deleteimage", "deleteid": buttonValue, "imagename": imagename },
        success: function(res) {
            var response = JSON.parse(res);
            if (response.status == "success") {
                location.reload();
            }
        }
    });
});