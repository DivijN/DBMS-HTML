var box = $("#box"),
    open = $(".open"),
    close = $(".close"),
    text = $("p"),
    step0 = "#step-0",
    step1 = "#step-1",
    step2 = "#step-2",
    step3 = "#step-3",
    step4 = "#step-4";

TweenMax.set(close, {
  scale: 0,
  transformOrigin: "center center"
});

var tl = new TimelineMax({
});

open.on("click", function(){

  $(this).addClass("off");

  tl
  .to(box, .2, {
    morphSVG:{
      shape: step1
    },
    delay: .3,
    ease: Power4.easeOut
  })
  .to(box, .2, {
    morphSVG:{
      shape: step2
    },
    ease: Power4.easeOut
  })
  .to(box, .2, {
    morphSVG:{
      shape: step3
    },
    ease: Power4.easeOut
  })
  .to(box, .2, {
    morphSVG:{
      shape: step4
    },
    ease: Power4.easeOut
  })
  .set(text, {className:"+=show"})
  
  .to(close, .3, {
    scale: 1,
    delay: .3,
    ease: Bounce.easeOut
  })

});

close.on("click", function(){

  tl
  .to(close, .3, {
    scale: 0,
    ease: Power4.easeOut
  })
  .set(text, {className:"-=show"})
  .to(box, .2, {
    morphSVG:{
      shape: step3
    },
    delay: .3,
    ease: Power4.easeOut
  })
  .to(box, .2, {
    morphSVG:{
      shape: step2
    },
    ease: Power4.easeOut
  })
  .to(box, .2, {
    morphSVG:{
      shape: step1
    },
    ease: Power4.easeOut
  })
  .to(box, .2, {
    morphSVG:{
      shape: step0
    },
    ease: Power4.easeOut
  })

  .set(open, {className:"-=off"});

})

// copy
balapaCop("Origami Dialog Effect", "rgba(255,255,255,.9)");