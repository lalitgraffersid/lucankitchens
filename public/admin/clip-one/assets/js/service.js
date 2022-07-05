$(document).ready(function() {

   $('#serviceAdd').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        //invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        
        service_title: {
            validators: {
                notEmpty: {
                    message: 'The page title value and can\'t be empty'
                }
            }
        },
        
        service_description: {
            validators: {
                notEmpty: {
                    message: 'The page decription is required and can\'t be empty'
                }
            }
        },

    }
    });

   $('#serviceEdit').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        //invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        
        service_title: {
            validators: {
                notEmpty: {
                    message: 'The page title value and can\'t be empty'
                }
            }
        },
        
        service_description: {
            validators: {
                notEmpty: {
                    message: 'The page decription is required and can\'t be empty'
                }
            }
        },

    }
    });



});
