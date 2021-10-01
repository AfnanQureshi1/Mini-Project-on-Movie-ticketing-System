function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if(username == ""){
    alert("Please enter a User Name")
    formLogin.username.focus()
    return false
}
if(password == ""){
    alert("Please enter a Password")
    formLogin.password.focus()
    return false
}
if( username == "admin" && password == "admin123"){
    alert("Login successfully");
    window.location = "admin.php";
    return true;
}
else{
 alert("Login failed - Please enter correct Username and Password")   
}
                
}
