$(document).ready(function() {

   $('#cmsAdd').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        //invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        
        page_title: {
            validators: {
                notEmpty: {
                    message: 'The page title value and can\'t be empty'
                }
            }
        },
        
        meta_title: {
            validators: {
                notEmpty: {
                    message: 'The meta title is required and can\'t be empty'
                }
            }
        },
        meta_description: {
            validators: {
                notEmpty: {
                    message: 'The meta decription is required and can\'t be empty'
                }
            }
        },
        page_description: {
            validators: {
                notEmpty: {
                    message: 'The page decription is required and can\'t be empty'
                }
            }
        },

    }
    });
});
