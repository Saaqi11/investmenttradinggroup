jQuery(document).ready(function (){
    const syncDiv = $('main>div');
    const table = $('.payment-listings table');
    
    syncDiv.width(table.width());
    syncDiv.scrollLeft(table.scrollLeft());
})

$(document).ready(function() {
    $('[data-create-date]').each(function() {
        var createDate = $(this).data('create-date');
        var formattedDate = new Date(createDate).toISOString().slice(0, 10);
        $(this).text(formattedDate);
    });
});


const selectAllCheckbox = document.getElementById("select-all");
const membershipRadios = document.querySelectorAll(".membership-radio");

selectAllCheckbox.addEventListener("change", function () {
    if (this.checked) {
        membershipRadios.forEach((radio) => (radio.checked = false));
    }
});

membershipRadios.forEach((radio) => {
    radio.addEventListener("change", function () {
        if (this.checked) {
            selectAllCheckbox.checked = false;
        }
    });
});

ClassicEditor.create(document.querySelector("#notes-message"), {
    language: "en",
    direction: "ltr",
}).catch((error) => {
    console.error(error);
});

