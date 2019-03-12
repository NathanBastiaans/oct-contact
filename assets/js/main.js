$(document).ready(function () {
    $(window).on('ajaxInvalidField', function(event, fieldElement, fieldName, errorMsg, isFirst) {
        $(fieldElement).closest('.form-group').addClass('has-error').find('.form-feedback').addClass('invalid-feedback');
    });

    $(document).on('ajaxPromise', '[data-request]', function() {
        $(this).closest('form').find('.form-group.has-error').removeClass('has-error');
    });
});