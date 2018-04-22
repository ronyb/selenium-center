$(function() {
    console.log("ready!" );
});

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})