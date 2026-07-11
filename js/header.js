// document.addEventListener("DOMContentLoaded", () => {
//   const mobileNav = document.getElementById("mobile-menu-control-wrapper");
//   const header = document.querySelector(".inside-header");
//   const toggleBtn = mobileNav?.querySelector(".menu-toggle");

//   if (!mobileNav || !header || !toggleBtn) {
//     return;
//   }

//   toggleBtn.addEventListener("click", () => {
//     requestAnimationFrame(() => {
//       requestAnimationFrame(() => {
//         if (mobileNav.classList.contains("toggled")) {
//           setTimeout(() => {
//             header.classList.add("mobile-menu-open");
//           }, 10);
//         } else {
//           header.classList.remove("mobile-menu-open");
//         }
//       });
//     });
//   });
// });
