$(document).ready(function() {

    
    $("#add_new_important_date_form").validate({

        rules: {

            title:{

                required:true

            },

            important_date:{

                required:true

            },

            short_desc:{

                required:false

            },

            status:{

                required:false

            }

        },

        //For custom messages

        messages: {

            

        },

        debug: true,

        errorElement: 'span',

        errorPlacement: function(error, element) {

            var placement = $(element).data('error');

            if(placement) {

                $(placement).append(error)

            } else {

                error.insertAfter(element);

            }

        }

    });

    $("#add_new_upcomig_event_form").validate({

        rules: {

            title:{

                required:true

            },

            event_date:{

                required:true

            },

            short_desc:{

                required:false

            },

            status:{

                required:false

            }

        },

        //For custom messages

        messages: {

            

        },

        debug: true,

        errorElement: 'span',

        errorPlacement: function(error, element) {

            var placement = $(element).data('error');

            if(placement) {

                $(placement).append(error)

            } else {

                error.insertAfter(element);

            }

        }

    });

    $("#add_new_announcement_form").validate({

        rules: {

            title:{

                required:true

            },

            short_desc:{

                required:false

            },

            status:{

                required:false

            }

        },

        //For custom messages

        messages: {

            

        },

        debug: true,

        errorElement: 'span',

        errorPlacement: function(error, element) {

            var placement = $(element).data('error');

            if(placement) {

                $(placement).append(error)

            } else {

                error.insertAfter(element);

            }

        }

    });

    $("#add_new_question_form").validate({

        rules: {

            title:{

                required:true

            },

            description:{

                required:false

            }

        },

        //For custom messages

        messages: {

            

        },

        debug: true,

        errorElement: 'span',

        errorPlacement: function(error, element) {

            var placement = $(element).data('error');

            if(placement) {

                $(placement).append(error)

            } else {

                error.insertAfter(element);

            }

        }

    });



    $("#leave_solution_form").validate({

        rules: {

            name:{

                required:true

            },

            email:{

                required:false

            },

            phone: {

                required:false

            },

            description: {

                required:true

            }

        },

        //For custom messages

        messages: {

            

        },

        debug: true,

        errorElement: 'span',

        errorPlacement: function(error, element) {

            var placement = $(element).data('error');

            if(placement) {

                $(placement).append(error)

            } else {

                error.insertAfter(element);

            }

        }

    });



    



});