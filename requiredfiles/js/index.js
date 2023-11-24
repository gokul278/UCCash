$("#volunteerfrm").submit((event) => {
    event.preventDefault();
    var frm = $("#volunteerfrm")[0];
    var frmdata = new FormData(frm);
    $.ajax({
        url: "./requiredfiles/ajax/indexajax.php",
        type: "POST",
        data: frmdata,
        processData: false,
        contentType: false,
        cache: false,
        success: function(res) {
            var response = JSON.parse(res);
            if (response.status == "success") {
                $("#name").val('');
                $("#email").val('');
                $("#message").val('');
                new Notify({
                    status: 'success',
                    title: 'Success !',
                    text: 'Successfully Message Sended',
                    effect: 'slide',
                    speed: 300,
                    customClass: '',
                    customIcon: '',
                    showIcon: true,
                    showCloseButton: true,
                    autoclose: true,
                    autotimeout: 3000,
                    gap: 20,
                    distance: 20,
                    type: 1,
                    position: 'right top',
                    customWrapper: '',
                })
            }
            console.log(res);
        }
    });
})