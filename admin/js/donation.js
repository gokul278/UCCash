const printInvoice = (button) => {
    const donatorId = button.value;
    window.open("./ajax/donationajax.php?way=printinvoice&donatorID=" + donatorId, "_blank");
}

$(document).ready(function() {
    $('button[data-enlargable]').click(function() {
        // Find the closest image element relative to the clicked button
        var $img = $(this).siblings('img[data-enlargable]');
        var src = $img.attr('src');

        var $overlay = $('<div>').css({
            background: 'RGBA(0,0,0,.5) no-repeat center',
            backgroundSize: 'contain',
            width: '100%',
            height: '100%',
            position: 'fixed',
            zIndex: '10000',
            top: '0',
            left: '0',
            cursor: 'zoom-out'
        });

        var $enlargedImg = $('<img>').attr('src', src).css({
            width: 'auto',
            height: '100%',
            position: 'absolute',
            top: '50%',
            left: '50%',
            transform: 'translate(-50%, -50%)',
        });

        $overlay.append($enlargedImg);

        $overlay.click(function() {
            $(this).remove();
        });

        $overlay.appendTo('body');
    });

    // Hide the original images
    $('img[data-enlargable]').hide();
});