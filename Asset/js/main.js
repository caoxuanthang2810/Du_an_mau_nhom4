function CheckPass(){
    var CheckEmail = /^\w+@[a-zA-Z]{3,}\.com$/i;


    var Email = document.getElementById("Email")
    var Pass = document.getElementById("Pass")
    var ChangePass = document.getElementById("ChangePass")
    
    if(Pass.value == ""){
        Pass.focus;
        Pass.style.backgroundColor = "Yellow";
        document.getElementById("error-2").innerHTML = "Nhập mật khẩu"
    }
    else{
        Pass.focus;
        Pass.style.backgroundColor = "White";
        document.getElementById("error-2").innerHTML = ""

        if(Pass.value != ChangePass.value){
            document.getElementById("error-3").innerHTML = "Hai mật khẩu không giống nhau"
        }
        else{
            document.getElementById("error-3").innerHTML = ""
        }
    }

    if(ChangePass.value == ""){
        ChangePass.focus;
        ChangePass.style.backgroundColor = "Yellow";
        document.getElementById("error-4").innerHTML = "Nhập lại mật khẩu"
    }
    else{
        ChangePass.focus;
        ChangePass.style.backgroundColor = "White";
        document.getElementById("error-4").innerHTML = ""
        
        if(ChangePass.value != Pass.value){
            document.getElementById("error-3").innerHTML = "Hai mật khẩu không giống nhau"
        }
        else{
            document.getElementById("error-3").innerHTML = ""
        }
    }

    if(Email.value == ""){
        Email.focus;
        Email.style.backgroundColor = "Yellow";
        document.getElementById("error-7").innerHTML = "<img src='./1200px-Nuvola_apps_error.svg.png'> Nhập Email"
    }
    else{
        if(!CheckEmail.test(Email.value)){
            Email.focus;
            Email.style.backgroundColor = "Yellow";
            document.getElementById("error-8").innerHTML = "<img src='./1200px-Nuvola_apps_error.svg.png'> Sai định dạng Email"
        }
        else{
            Email.focus;
            Email.style.backgroundColor = "White"
            document.getElementById("error-7").innerHTML = ""
        }
    }
}