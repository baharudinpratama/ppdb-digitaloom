const modalLoading = new bootstrap.Modal("#modal-loading");
const toast = new bootstrap.Toast("#toast");

document.getElementById("toast").addEventListener("hidden.bs.toast", () => {
    window.location.href = "/ppdb/users";
})

$("#btn-submit").on("click", function () {
    const student_id = $("#student-id").val();
    const username = $("#username").val();
    const password = $("#password").val();

    modalLoading.show();

    $.ajax({
        method: "POST",
        url: BASE_URL + "student/user_store",
        data: {
            student_id,
            username,
            password
        },
        dataType: "json",
        success: function (response) {
            if (response.success) {
                setTimeout(function () {
                    modalLoading.hide();
                    $("#toast-message").text(response.message);
                    toast.show();
                }, 1000);
            } else {
                setTimeout(function () {
                    modalLoading.hide();
                    alert(response.message);
                }, 1000);
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                modalLoading.hide();
                alert("Terjadi kesalahan.");
            }, 1000);
        }
    });
});
