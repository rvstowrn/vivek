let ext = (s)=> {
    return document.getElementById(s).value.toString();
}


let validation = (e) => {
    let username = ext("username");
    let pass = ext("pass");
    let f=true;
    if(username == ''){
        alert('Enter username');
        f=false
    }
    if(pass == ''){
        alert('Enter password');
        f=false
    }
   if(f){
        alert('validation successful');
    }
}