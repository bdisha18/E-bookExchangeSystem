
var message = '';
<?php
$success = Session::get('success');
$error = Session::get('error');
$warning = Session::get('warning');
$information = Session::get('information');

if ($success) {
    Session::forget('success');
    ?>
    var message = '<?= $success ?>';
    var type = 'success';
    <?php
}
if ($error) {
    Session::forget('error');
    ?>
    var message = '<?= $error ?>';
    var type = 'error';
    <?php
}
if ($warning) {
    Session::forget('warning');
    ?>
    var message = '<?= $warning ?>';
    var type = 'warning';
    <?php
}
if ($information) {
    Session::forget('information');
    ?>
    var message = '<?= $information ?>';
    var type = 'information';
    <?php
}
?>
if (message !== '') {
    noty({
        text: message, type: type, layout: "topRight", timeout: 400000,
        animation: {
            open: 'animated bounceInRight', // in order to use this you'll need animate.css
            close: 'animated bounceOutRight',
            easing: 'swing',
            speed: 500
        }
    });
}
        