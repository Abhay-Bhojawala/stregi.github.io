function validation()
{
    var test=/^[A-Za-z0-9._@#$%^&*!?~]*\@gmail\.[A-Za-z]{2,5}$/;
    var latter=/^[A-Za-z]+$/;
    var no=/^[6-9]$/;
    var no=/^[0-9]+$/;
    var firstname=document.register.fname.value;
    var lastname=document.register.lname.value;
    var Age=document.register.age.value;
    var Email=document.register.email.value;
    var Datee=document.register.date_of_birth.value;
    var da=new Date(Datee)
    var to=new Date();
    var y=to.getFullYear()-da.getFullYear();
    var Gender=document.register.gender.value;
    var Depart=document.register.department.value;
    var collagename=document.register.college.value;
    var mobileno=document.register.mobile.value;
    var add=document.register.address.value;
    if(firstname==""){
        alert("enter your first name");
        document.register.fname.focus();
        return false;
    }
    if(!firstname.match(latter))
    {
        alert("don't use number in first name");
        document.register.fname.focus();
        return false;
    }
    if(lastname==""){
        alert("enter your last name");
        document.register.lname.focus();
        return false;
    }
    if(!lastname.match(latter))
    {
        alert("don't use number in last name");
        document.register.lname.focus();
        return false;
    }
    if(Age==""){
        alert("enter your age");
        document.register.age.focus();
        return false;
    }
    if(isNaN(Age))
    {
        alert("please enter age in number form");
        document.register.age.focus();
        return false;
    }
    if(Age<18){
        alert("check your age");
        document.register.age.focus();
        return false;
    }
    if(Age.length>2)
    {
        alert("please enter rigth age");
        document.register.age.focus();
        return false;
    }
    if(Email=="")
    {
        alert("email can't be blank");
        document.register.email.focus();
        return false;
    }
    if(!Email.match(test))
    {
        alert("please write valid email address");
        document.register.email.focus();
        return false;
    }
    if(Datee=="")
    {
        alert("please write your birth date");
        document.register.date_of_birth.focus();
        return false;
    }
    if(!Age.match(y))
    {
        alert("check your birth date");
        document.register.date_of_birth.focus();
        return false;
    }
    if(collagename=="")
    {
        alert("please write your collage name");
        document.register.college.focus();
        return false;
    }
    if(!collagename.match(latter))
    {
        alert("Collage name must in alphabet don't use digits");
        document.register.college.focus();
        return false;
    }
    if(mobileno=="")
    {
        alert("please write your mobile number");
        document.register.mobile.focus();
        return false;
    }
    if(!mobileno.match(no))
    {
        alert("mobile number must in digits");
        document.register.mobile.focus();
        return false;
    }
    if(mobileno.length!=10)
    {
        alert("please check your mobile number is too short or long");
        document.register.mobile.focus();
        return false;
    }
    if(!mobileno.charAt(0).match(no))
    {
        alert("please enter valid mobile number");
        document.register.mobile.focus();
        return false;
    }
    if(add=="")
    {
        alert("enter your address");
        document.register.address.focus();
        return false;
    }
}