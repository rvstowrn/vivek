const ext = (s)=> {
    return document.getElementById(s).value.toString();
}

const email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{1,})+$/;
const password_regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
const alphabet_regex = /^[A-Za-z ]+$/;

const validation = (e) => {

    let validation_flag = true;

    const name = ext("name");
    const email = ext("email");
    const username = ext("username");
    const pass = ext("pass");
    const cpass = ext("cpass");
    const phone = ext("phone");

    if(!email.match(email_regex))
    {
      alert("Enter valid email");
      validation_flag = false;
    }
    if(!name.match(alphabet_regex))
    {
      alert("Enter valid name");
      validation_flag = false;
    }
    if(phone.length!=10)
    {
      alert("Enter valid phone number");
      validation_flag = false;
    }
    if(username == "")
    {
      alert("Enter valid username");
      validation_flag = false;
    }
    if(pass == "" || !pass.match(password_regex))
    {
      alert("enter valid password with atleast one upper case, one lower case and one numeric character");
      validation_flag = false;
    }
    if (pass !== cpass)
    {
      alert("password and confirm password not matching");
      validation_flag = false;
    }

    if(validation_flag){
        alert('validation successfull');
    }

}