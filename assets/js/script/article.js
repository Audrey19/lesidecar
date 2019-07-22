$(".filter").click(function(){
    $(".article_menu").toggleClass("is-active");
    $(".category-site-vitrine").removeClass("not-active");
    $(".category-e-commerce").removeClass("not-active");
});

$(".btn2").click(function(){
    var boite = $(this).data('filtre');
    console.log(boite);
    $(".article").addClass("not-active");
    $(boite).removeClass("not-active");
});
