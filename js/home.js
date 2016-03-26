

function validateSignUp(form) {


    var fname = validateFirstName(form);
    var lname = validateLastName(form);
    var email = validateEmail(form);

    var password      = validatePassword(form);
    var passwordAgain = true;
    if (password)
        passwordAgain = validatePasswordAgain(form);

    var result = fname && lname && email && password && passwordAgain;
    return result;
}

function validateFirstName(form) {

    var fgroup = $("#signup-fname-group");
    if (form['signup-fname'].value == "") {
        setErrorForm(fgroup);
        unhideElement("#fname-error");
        return false;
    }

    hideElement("#fname-error");
    setSuccessForm(fgroup);
    return true;
}

function validateLastName(form) {

    var fgroup = $("#signup-lname-group");
    if (form['signup-lname'].value == "") {
        setErrorForm(fgroup);
        unhideElement("#lname-error");
        return false;
    }
    
    hideElement("#lname-error");
    setSuccessForm(fgroup);
    return true;
}


function validatePassword(form) {

    var fgroup = $("#signup-password-group");
    if (form['signup-password'].value.length >= 6) {
        hideElement("#password-error");
        setSuccessForm(fgroup);
        return true;
    } else {
        unhideElement("#password-error");
        setErrorForm(fgroup);
        return false;
    }
}


function validatePasswordAgain(form) {

    var fgroup = $("#signup-password-repeat-group");
    if (form['signup-password-repeat'].value == 
        form['signup-password'].value) {
        hideElement("#password-repeat-error");
        setSuccessForm(fgroup);
        return true;
    } else {
        unhideElement("#password-repeat-error");
        setErrorForm(fgroup);
        return false;
    }
}

function validateEmail(form) {
 
    var email    = form['signup-email'].value;
    var fgroup   = $("#signup-email-group");
    var error    = "";

    if (email == "") {
        error    = "Please enter your email address";
    } 
    else {
        /* Make an AJAX request in the background to check email
           returns wheter email exists or not in the database
         */
        $.ajax({
            url:     "scripts/signup.php",
            type:    "POST",
            async:   false,
            timeout: 1000,      
            success: function(result) {
                if (result == "exists") {
                    error  = "Email already is in use";
                }
            },
            data : {
                "check-email" : email /* data to transmit */
            }
         });
    }

    if (error != "") {
        $("#email-error").text(error);
        unhideElement("#email-error"); 
        setErrorForm(fgroup);
    } else {
        hideElement("#email-error"); 
        setSuccessForm(fgroup);
    }

    return error == "";
    
}

function setErrorForm(formGroup) {
    formGroup.addClass("has-error").removeClass("has-success");
}

function setSuccessForm(formGroup) {
    formGroup.addClass("has-success").removeClass("has-error");
}

function hideElement(id) {
    $(id).addClass("hidden");
}

function unhideElement(id) {
    $(id).removeClass("hidden");
}