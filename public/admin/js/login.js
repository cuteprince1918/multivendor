var Login = function () {
    var register = function () {

        var form = $('#loginform');
        var rules = {
            email: {required: true, email: true},
            password: {required: true},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    }
    var reset = function () {

        $('#forgotpasswordform').validate({
            rules: {
                email: {required: true, email: true},
            },
            messages: {
                email: {required: "Please Enter your Email"},
            },
            submitHandler: function (form) {
                handleAjaxFormSubmit(form);
            }
        });
    }
    var freset = function () {

        $('#resetpasswordform').validate({
            rules: {
                password: {
                    required: true
                },
                cpassword: {
                    required: true,
                    equalTo: "#password"
                }

            },
            messages: {
                password: {required: "Please Enter your Password"},
                cpassword: {required: "Please Enter your password", equalTo: "please enter same password"},
            },
            submitHandler: function (form) {
                handleAjaxFormSubmit(form);
            }
        });
    }
    return {
        init: function () {
            register();
        },
        freset: function () {
            reset();
        },
        reset: function () {
            freset();
        }
    }
}();