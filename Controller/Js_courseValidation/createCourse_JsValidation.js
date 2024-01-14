function JsValidation() {
    if (document.getElementById("courseName").value == "") {
        alert("Course cannot be null!");
    }

    if (document.getElementById("teacherName").value == "") {

        alert("Teacher Name cannot be null!");
    }
    reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@(([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (document.getElementById("email").value == "") {
        alert("Email cannot be null!");

    } else if (!reg.test(document.getElementById("email").value)) {
        alert("Invalid email formate!");

    }



}