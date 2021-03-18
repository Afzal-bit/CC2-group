const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
document.getElementById("new_pass").addEventListener("keyup", check_pass);

document.getElementById("confirm_pass").addEventListener("keyup", check_pass);

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});
signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});



function check_pass() {
    var pass = document.getElementById("new_pass");
    var confirm_pass = document.getElementById("confirm_pass");

    if (pass.value != confirm_pass.value) {
        if (confirm_pass.value.length > 0) {
            document.getElementById("divCheckPasswordMatch").innerHTML = "Passwords do not match";
            document.getElementById("divCheckPasswordMatch").style.color = "#FF0000";
            document.getElementById("signUp_btn").disabled = true;
        }

    } else {
        document.getElementById("divCheckPasswordMatch").innerHTML = "Passwords match";
        document.getElementById("divCheckPasswordMatch").style.color = "#008000";
        document.getElementById("signUp_btn").disabled = false;
    }
}



/*var radios = document.forms["register_form"].elements["userType"];
for (var i = 0, max = radios.length; i < max; i++) {
    radios[i].onclick = function() {
        if (document.getElementById('r1').checked) {
            sellerInfo.style.display = "none";
        } else {
            sellerInfo.style.display = "block";
        }
    }
}*/