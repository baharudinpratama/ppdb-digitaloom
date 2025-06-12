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


indexedDB.open("StudentFormDB", 1).onsuccess = function (e) {
    const db = e.target.result;
    const tx = db.transaction("fileUploads", "readonly");
    const store = tx.objectStore("fileUploads");
    const getReq = store.get("achievementFiles");

    getReq.onsuccess = function () {
        const result = getReq.result;

        if (result && Array.isArray(result.files) && result.files.length > 0) {
            $("#achievement-form-status").text("Sudah diisi");
            $("#achievement-form-status").css("color", "#43b638");
        }
    };

    getReq.onerror = function () {
        console.error("Failed to get achievementFiles from IndexedDB.");
    };
};
