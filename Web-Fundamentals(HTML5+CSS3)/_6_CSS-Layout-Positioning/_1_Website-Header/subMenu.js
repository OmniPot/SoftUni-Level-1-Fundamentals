$(document).ready(function() {
    $('.mainList > li').bind('mouseover', openSubMenu);
    $('.mainList > li').bind('mouseout', closeSubMenu);

    function openSubMenu() {
        $(this).find('ul').css('visibility', 'visible');
    }

    function closeSubMenu() {
        $(this).find('ul').css('visibility', 'hidden');
    }
});