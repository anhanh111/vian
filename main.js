document.addEventListener('DOMContentLoaded',()=>{
  console.log("Theme Vian Custom loaded");
});
document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".banner-slide");
  const slider = document.querySelector(".banner-slider");
  const dotsContainer = document.querySelector(".banner-dots");

  let currentIndex = 0;
  let slideCount = slides.length;

  // Tạo chấm tròn
  slides.forEach((_, i) => {
    let dot = document.createElement("span");
    if (i === 0) dot.classList.add("active");
    dot.addEventListener("click", () => goToSlide(i));
    dotsContainer.appendChild(dot);
  });
  const dots = document.querySelectorAll(".banner-dots span");

  // Hàm chuyển slide
  function goToSlide(index) {
    currentIndex = index;
    slider.style.transform = `translateX(-${index * 100}%)`;
    updateDots();
  }

  // Cập nhật chấm tròn
  function updateDots() {
    dots.forEach(dot => dot.classList.remove("active"));
    dots[currentIndex].classList.add("active");
  }

  // Tự động chạy
  function autoSlide() {
    currentIndex = (currentIndex + 1) % slideCount;
    goToSlide(currentIndex);
  }
  setInterval(autoSlide, 5000); // 5s đổi slide
});
