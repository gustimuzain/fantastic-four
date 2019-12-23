function passDontMatch() {    
    if(document.getElementById("confirm_password").value != document.getElementById("password").value ) {
        alert("Password Dont Match");
    }
    else {
        document.register.submit();
    }
}
