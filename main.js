var hamburger=document.querySelector(".hamburger"),navigation=document.querySelector("#menu_container_responsive");hamburger.addEventListener("click",function(){hamburger.classList.toggle("is-active"),navigation.classList.toggle("is-active")}),$("li.menu-item").click(function(){$("ul.menu").removeClass("is-active"),$("button.hamburger").removeClass("is-active")}),function(e){e(function(){window.sr=ScrollReveal(),e(window).width()<768?e(".timeline-content").hasClass("js--fadeInLeft")&&e(".timeline-content").removeClass("js--fadeInLeft").addClass("js--fadeInRight"):sr.reveal(".js--fadeInLeft",{origin:"left",distance:"300px",easing:"ease-in-out",duration:800}),sr.reveal(".js--fadeInRight",{origin:"right",distance:"300px",easing:"ease-in-out",duration:800}),sr.reveal(".js--fadeInLeft",{origin:"left",distance:"300px",easing:"ease-in-out",duration:800}),sr.reveal(".js--fadeInRight",{origin:"right",distance:"300px",easing:"ease-in-out",duration:800})})}(jQuery);