var notify = {
    error: function (text) {
        toastr.error(text, 'Lỗi', {
            closeButton: false,
            //debug: true,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-center",
            preventDuplicates: true,
            onclick: null,
            showDuration: "300",
            hideDuration: 3000,
            timeOut: 3000,
            extendedTimeOut: 3000,
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        });
    },
    warning: function (text) {
        toastr.warning(text, 'Cảnh báo', {
            closeButton: false,
            //debug: true,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-center",
            preventDuplicates: true,
            onclick: null,
            showDuration: "300",
            hideDuration: 3000,
            timeOut: 3000,
            extendedTimeOut: 3000,
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        });
    },
    success: function (text) {
        toastr.success(text, 'Thông báo', {
            closeButton: false,
            //debug: true,
            newestOnTop: false,
            progressBar: true,
            positionClass: "toast-top-center",
            preventDuplicates: true,
            onclick: null,
            showDuration: "300",
            hideDuration: 1000,
            timeOut: 1000,
            extendedTimeOut: 1000,
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        });
    }
};