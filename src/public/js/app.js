jQuery(function ($){

   $('.question-form .form-check-input[type="radio"]').on('change', function () {
    $(this).parents('form').trigger('submit');
   });

});