const ext = (s)=> {
    return document.getElementById(s).value.toString();
}

const validation = (e) => {
    const username = ext("username");
    const pass = ext("pass");
    let validation_flag=true;
    
    if(username == ''){
        alert('Enter username');
        validation_flag = false;
    }
    if(pass == ''){
        alert('Enter password');
        validation_flag = false;
    }
    
    if(validation_flag){
        document.getElementById("login_form").submit();
    }
}