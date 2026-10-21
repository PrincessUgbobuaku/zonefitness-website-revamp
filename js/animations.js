window.addEventListener("load", () => {
  gsap.registerPlugin(ScrollTrigger);

  const path = document.querySelector(".animated-line path");

  const length = path.getTotalLength(); //This returns the length of the curve in pixels. Your DevTools showed 222.491px

  gsap.set(path, {
    strokeDasharray: length,
    strokeDashoffset: -length,
  });

  gsap.to(path, {
    strokeDashoffset: 0,
    ease: "none",
    scrollTrigger: {
      trigger: ".animated-line",
      start: "top 80%", // begin when the top of the line reaches 80% down the screen
      end: "bottom 30%", // finish when the bottom of the line reaches 20% down the screen
      // Links the animation to scrolling: plays as you scroll, pauses when you stop,
      // and reverses when you scroll back up. Without it, it plays in full once it hits "start".
      scrub: true,
      // markers: true,
    },
  });
});
