jQuery(document).ready(function (){
    const syncDiv = $('main>div');
    const table = $('.payment-listings table');

    syncDiv.width(table.width());
    syncDiv.scrollLeft(table.scrollLeft());
})

$(document).ready(function() {
    $('.subscription-page .col.active .button a').text('Current Membership')
    $('.subscription-page .col.active .button a').addClass('disable')
    $('[data-create-date]').each(function() {
        var createDate = $(this).data('create-date');
        var formattedDate = new Date(createDate).toISOString().slice(0, 10);
        $(this).text(formattedDate);
    });
    $('.alert-block .close').click(function(){
        $(this).parents('.alert-block').remove();
    })
    $('.crpto-heading .tab').click(function(){
        $(this).parents('.tabset').find('.tab').removeClass('active');
        $(this).addClass('active')
    })
        $("#category").on("change", function() {
            var selectedCategory = $(this).val();
            $(".tabset .tab").removeClass("active");
            $(".tabset .tab:contains(" + selectedCategory + ")").addClass("active");
        });
    $('.dashboard .tab').click(function(){
        $(this).parents('.tabset').find('.tab').removeClass('active');
        $(this).addClass('active')
    })
});




ClassicEditor.create(document.querySelector("#notes-message"), {
    language: "en",
    direction: "ltr",
}).catch((error) => {
    console.error(error);
});


