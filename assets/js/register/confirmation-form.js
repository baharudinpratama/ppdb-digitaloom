const modalLoading = new bootstrap.Modal("#modal-loading");
const modalResponse = new bootstrap.Modal("#modal-response");

$("#confirmation-form").on("submit", async function (e) {
    e.preventDefault();

    const formData = new FormData();

    ["studentForm", "parentForm", "gradeForm", "achievementForm"].forEach(formId => {
        const saved = JSON.parse(localStorage.getItem(formId) || "{}");
        for (const key in saved) {
            formData.append(key, saved[key]);
        }
    });

    const files = await new Promise((resolve, reject) => {
        const dbReq = indexedDB.open("StudentFormDB", 1);
        dbReq.onsuccess = function () {
            const db = dbReq.result;
            const tx = db.transaction("fileUploads", "readonly");
            const store = tx.objectStore("fileUploads");
            const getReq = store.get("achievementFiles");

            getReq.onsuccess = function () {
                resolve(getReq.result?.files || []);
            };
            getReq.onerror = function () {
                reject(getReq.error);
            };
        };
        dbReq.onerror = function () {
            reject(dbReq.error);
        };
    });

    files.forEach(file => {
        formData.append("achievementFiles[]", file);
    });

    $.ajax({
        url: "/ppdb/register/submit",
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function () {
            modalLoading.show();
        },
        success: function (response) {
            if (response.success) {
                ["studentForm", "parentForm", "gradeForm", "achievementForm", "achievementFileName"].forEach(key => {
                    localStorage.removeItem(key);
                });

                const dbReq = indexedDB.open("StudentFormDB", 1);

                dbReq.onsuccess = function (event) {
                    const db = event.target.result;
                    const tx = db.transaction("fileUploads", "readwrite");
                    const store = tx.objectStore("fileUploads");
                    store.delete("achievementFiles");
                };

                dbReq.onerror = function () {
                    console.error("Failed to open IndexedDB");
                };

                modalResponse.show();

                $("#modal-response .btn-ok").on("click", function () {
                    window.location.href = '/ppdb/register/student';
                })

                setTimeout(function () {
                    window.location.href = '/ppdb/register/student';
                }, 1000 * 5);
            } else {
                setTimeout(function () {
                    modalLoading.hide();
                    alert(response.message);
                }, 1000);
            }
        },
        error: function () {
            setTimeout(function () {
                modalLoading.hide();
                alert("Terjadi kesalahan.");
            }, 1000);
        }
    });
});

$("#modal-response .btn-ok").on("click", function () {
    modalResponse.hide();
    modalLoading.hide();
});
