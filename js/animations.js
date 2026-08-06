window.addEventListener("load", () => {
  gsap.registerPlugin(ScrollTrigger);

  const path = document.querySelector(".animated-line path");

  const length = path.getTotalLength();

  gsap.set(path, {
    strokeDasharray: length,
    strokeDashoffset: -length,
  });

  gsap.to(path, {
    strokeDashoffset: 0,
    ease: "none",
    scrollTrigger: {
      trigger: ".animated-line",
      start: "top 80%",
      end: "bottom 20%",
      scrub: true,
    },
  });
});
