if (localStorage.getItem("studentForm")) {
    if (JSON.parse(localStorage.getItem("studentForm")).name !== "") {
        $("#student-form-status").text("Sudah diisi");
        $("#student-form-status").css("color", "#43b638");
    }
}

if (localStorage.getItem("parentForm")) {
    if (JSON.parse(localStorage.getItem("parentForm"))["father-name"] !== "") {
        $("#parent-form-status").text("Sudah diisi");
        $("#parent-form-status").css("color", "#43b638");
    }
}

if (localStorage.getItem("gradeForm")) {
    if (JSON.parse(localStorage.getItem("gradeForm"))["class-program"] !== "") {
        $("#grade-form-status").text("Sudah diisi");
        $("#grade-form-status").css("color", "#43b638");
    }
}
