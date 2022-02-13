/* preloader */
$(window).on("load", function (e) {
	$(".preloader").delay(200).fadeOut("slow");
});

/* form validation */

$(function() {
    $("form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
        },
        messages: {
            name: "Bu alan boş bırakılamaz",
            email: "Lütfen geçerli bir e-posta adresi girin",
            tel: "Bu alan boş bırakılamaz",
            university: "Bu alan boş bırakılamaz",
            faculty: "Bu alan boş bırakılamaz",
            class: "Bu alan boş bırakılamaz",
            kvkk: "Bu alan boş bırakılamaz"
        },
        submitHandler: function(form) {
        form.submit();
        }
    });
});