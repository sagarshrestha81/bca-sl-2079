function sub() {
    let validation = false;
    error = document.getElementsByClassName("error");
    for (i = 0; i < error.length; i++) {
        error[i].innerText = ''
    }
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
    if (!course) {
        document.getElementById("error-course").innerText = 'Please enter course';

    }

    if (fullname && phone && gender && course) {
        validation = true;
    } else {
        validation = false;
    }

    return validation;

}