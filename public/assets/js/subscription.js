
if (document.getElementById('choices-tags')) {
    var tags = document.getElementById('choices-tags');
    const examples = new Choices(tags, {
        removeItemButton: true
    });
}
if (document.getElementById('excluded-items')) {
    var tags = document.getElementById('excluded-items');
    const examples = new Choices(tags, {
        removeItemButton: true
    });
}
