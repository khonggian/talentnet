$(function() {


    $(".dashboard .item")
        .mouseover(function() {
            var src = $(this).children('div').find('img').attr("src").match(/[^\.]+/) + "-hover.png";
            console.log(src);
            var add = "..";
            if(src.indexOf(add) != -1){
                alert("found");
                $(this).children('div').find('img').attr("src",src);
            }else{
                $(this).children('div').find('img').attr("src", ".." + src);    
            }
        })
        .mouseout(function() {
            var src = $(this).children('div').find('img').attr("src").replace("-hover.png", ".png");
            $(this).children('div').find('img').attr("src", src);
        });

        $("nav ul li").each(function(index, value){
            var $width = $(this).width();
            var $width_a = $(this).children("a").width();
            var $padding = ($width - $width_a)/2;
            //$(this).children("a").css({'padding-left': $padding, 'padding-right': $padding});
        })
});