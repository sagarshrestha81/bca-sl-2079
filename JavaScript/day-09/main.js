function sub() {
    error = document.getElementsByClassName("error");
    for (i = 0; i < error.length; i++) {
       error[i].innerText=''
    }


    // option 1
    // const fullname = document.getElementById("fullname").value;
    // option 2
    // fullname = form['fullname'].value;

    // option 4 
    // fullname = document.getElementsByClassName("fullname")[0].value;

    // option 3 (only if form)
    const form = document.getElementById("myform");
    fullname = form.fullname.value;
    phone = form.phone.value;
    gender = form.gender.value;
    course = form.course.value;
    query = form.query.value;

    if (!fullname) {
        document.getElementById("error-fullname").innerText = 'Please enter fullname';
    }
    if (!phone) {
        document.getElementById("error-phone").innerText = 'Please enter phone';
    }
    if (!gender) {
        document.getElementById("error-gender").innerText = 'Please enter gender';
    }

}