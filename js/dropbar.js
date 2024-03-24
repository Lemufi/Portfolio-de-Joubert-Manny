$('.click-to-top').click(function() {
    var topZ = 0;
    $('.click-to-top').each(function() {
        var thisZ = parseInt($(this).css('z-index'), 10);
        if (thisZ > topZ) {
            topZ = thisZ;
        }
    });
    $(this).css('z-index', topZ + 1);
});