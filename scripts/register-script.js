let ext = (s)=> {
    return document.getElementById(s).value.toString();
}


let validation = (e) => {
    let name = ext("name");
    let email = ext("email");
    let username = ext("username");
    let pass = ext("pass");
    let cpass = ext("cpass");
    let phone = ext("phone");
    var nameTest = name.search(/[a-zA-Z]/g);   
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var f=true;

    
    if (nameTest == -1||name == ""){
        alert("Please enter only letters in name field.");
        f=false;
    }
    if(email == ''){
        alert("Please enter email");
        f=false;
    }
    if(!email.match(mail))
    {
      alert("Enter valid email");
      f=false;
    }
    if(username == ''){
        alert("Please enter valid username");
        f=false;
    
    }
    if (pass.length < 6){
        alert("Please enter atleast 6 digits passwords.");
        f=false;
    }
    if (pass != cpass){
        alert("Please enter confirm password field correctly");
        f=false;
    }
    if (phone.length!=10){
        alert("Please enter 10 digit phone number");
        f=false;
    }
    if(f){
        alert('validation successful');
    }
}