function validation() {
    var firstname = document.getElementById('firstname').value;
    var lasttname = document.getElementById('lastname').value;
    var password = document.getElementById('password').value;
    var confirmpass = document.getElementById('confirpass').value;
    var emailids = document.getElementById('emailids').value;
    var mobileno = document.getElementById('mobileno').value;





    if (firstname == "") {

        document.getElementById('firstname').innerHTML = "please fill the firstname field ";
        return false;
    }
    if (!isNAN(firstname)) {

        document.getElementById('firstname').innerHTML = "only characters are allowed";
        return false;

    }


    if (lastname == "") {

        document.getElementById('lastname').innerHTML = "please fill the lastname field ";
        return false;
    }

    if (!isNAN(lastname)) {

        document.getElementById('lastname').innerHTML = "only characters are allowed";
        return false;

    }


    if (password == "") {

        document.getElementById('password').innerHTML = "please fill the firstname field ";
        return false;
    }
    if ((password.length <= 1) || (password.length >= 20)) {
        document.getElementById(password).innerHTML = "password length must be between 1 and 20";
        return false;
    }

    if (pass != confirmpass) {
        document.getElementById('confirmpass').innerHTML = "password  are not matching";
        return false;

    }


    if (confirmpass == "") {

        document.getElementById('confirmpass').innerHTML = "please fill the firstname field ";
        return false;
    }

    if (emailids == "") {

        document.getElementById('emailids').innerHTML = "please fill the firstname field ";
        return false;
    }
    if (emailids.indexOf('@') <= 0) {
        document.getElementById('emailids').innerHTML = "invalid '@' position";
        return false;
    }

    if ((emailids.charAt(emailids.length - 4) != '.') && (emailids.charAt(emailids.length - 3) != '.')) {
        document.getElementById('emailids').innerHTML = "invalid '.' position";
        return false;
    }








    if (mobileno == "") {

        document.getElementById('mobileno').innerHTML = "please fill the firstname field ";
        return false;
    }
    if (isNAN(mobileno)) {
        document.getElementById('mobileno').innerHTML = "user must write digit only";
        return false;
    }
    if (mobileno.length != 10) {
        document.getElementById('mobileno').innerHTML = "user must write 10 digit mobile number";
        return false;
    }





}