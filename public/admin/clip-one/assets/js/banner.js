$(document).ready(function() {

   $('#bannerAdd').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        //invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        
        banner_title: {
            validators: {
                notEmpty: {
                    message: 'The page title value and can\'t be empty'
                }
            }
        },
        
        banner_description: {
            validators: {
                notEmpty: {
                    message: 'The page decription is required and can\'t be empty'
                }
            }
        },
        banner_image: {
            validators: {
                notEmpty: {
                    message: 'The image is required and can\'t be empty'
                }
            }
        },

    }
    });
});

$(document).ready(function() {

   $('#bannerEdit').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        //invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        
        banner_title: {
            validators: {
                notEmpty: {
                    message: 'The page title value and can\'t be empty'
                }
            }
        },
        
        banner_description: {
            validators: {
                notEmpty: {
                    message: 'The page decription is required and can\'t be empty'
                }
            }
        },

    }
    });
});
