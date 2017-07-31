$(document).ready(function(){
    
    console.log("asdasdasdasdd");
    $('<link rel="stylesheet" href="yved/style.html">').appendTo('head');
    
    var i = 0;
    
    function yved(){
        i=1;
        $('.yved:nth-child('+i+')').fadeIn(500).delay(7000).fadeOut(500);
    }
    
    setTimeout(function(){
        setInterval(
        function(){
            i=i+1;
            if(i>10) i=1;
            $('.yved:nth-child('+i+')').fadeIn(500).delay(7000).fadeOut(500);
        },30000);
        yved();
    },10000);
});