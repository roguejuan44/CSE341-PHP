$(document).ready(function() {
    function dropMenu(x) {
        let displayDiv = $("."+ x);
        displayDiv.toggle(500);
    }

    $('.sel1').click(function(){
        dropMenu("drop1");
        $('.arrow1').toggleClass('rotated');
        
    });
    $('.sel2').click(function(){
        dropMenu("drop2");
        $('.arrow2').toggleClass('rotated');
    });

});