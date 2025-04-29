var host = $("meta[name='home_url']").attr("content");
var Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000
});

//Sell With DCM
$(document).on("submit", "#newsletterForm", function (event) {
    var form = $(this);
    var formData = new FormData($("#newsletterForm")[0]);
    $(".errors").css({ display: "none" });
    $(".subscribe-btn").html('<img src="'+host+'/public/loader-gif.gif" width="80px" class="newsletter-loader">');
    $.ajax({
        type: "POST",
        url: form.attr("action"),
        data: formData,
        dataType: "json",
        encode: true,
        processData: false,
        contentType: false,
    })
        .done(function (data) {
            if (data.success == "success") {
                Toast.fire({
                    icon: "success",
                    title: data.message,
                });

                setTimeout(function () {
                    location.reload();
                }, 1000);
            } else {
                Toast.fire({
                    icon: "warning",
                    title: data.message,
                });
            }
            $(".subscribe-btn").html('SUBSCRIBE');
        })
        .fail(function (e) {
            $(".subscribe-btn").html('SUBSCRIBE');
            Toast.fire({
                icon: "warning",
                title: data.message,
            });
        });

    event.preventDefault();
});