document.addEventListener("DOMContentLoaded", () => {
    const toggleButton = document.querySelector(".toggle-button");
    const navMenu = document.querySelector(".nav-menu");

    toggleButton.addEventListener("click", () => {
        navMenu.classList.toggle("active");
    });

    document.querySelectorAll(".nav-link").forEach(link => {
        link.addEventListener("click", () => {
            navMenu.classList.remove("active");
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const submenuParents = document.querySelectorAll('.submenu-parent');
    
    submenuParents.forEach(parent => {
      parent.addEventListener('mouseenter', () => {
        const submenu = parent.querySelector('.submenu');
        if (submenu) submenu.style.display = 'block';
      });
  
      parent.addEventListener('mouseleave', () => {
        const submenu = parent.querySelector('.submenu');
        if (submenu) submenu.style.display = 'none';
      });
    });
  });

const headers = document.querySelectorAll('.accordion-header');

  headers.forEach(header => {
    header.addEventListener('click', () => {
      const content = header.nextElementSibling;
      const allContents = document.querySelectorAll('.accordion-content');

      allContents.forEach(section => {
        if (section !== content) {
          section.classList.remove('open');
        }
      });

      content.classList.toggle('open');
    });
});

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items: 2,
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<", ">"],
    responsive: {
      1120: {
        items:2
      },
      991: {
        items:2
      },
      768: {
        items:2
      },
      300: {
        items:1
      }
    }
  });
});

const carouselContainer = document.querySelector('.carousel-container');
        const testimonials = document.querySelectorAll('.testimonial');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');

        let currentIndex = 0;

        function updateCarousel() {
            const offset = -currentIndex * 100;
            carouselContainer.style.transform = `translateX(${offset}%)`;
        }

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            updateCarousel();
        });

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateCarousel();
        });

AOS.init();

const typedText = document.querySelector(".typed-text");
const cursor = document.querySelector(".cursor");

const textArray = ["Digital", "Modern", "Online", "Virtual"];

let textArrayIndex = 0;
let charIndex = 0;

const erase = () => {
  if (charIndex > 0) {
    cursor.classList.remove('blink');
    typedText.textContent = textArray[textArrayIndex].slice(0, charIndex - 1);
    charIndex--;
    setTimeout(erase, 200);
  } else {
    cursor.classList.add('blink');
    textArrayIndex++;
    if (textArrayIndex > textArray.length - 1) {
      textArrayIndex = 0;
    }
    setTimeout(type, 200);
  }
}
const type = () => {
  if (charIndex <= textArray[textArrayIndex].length - 1) {
    cursor.classList.remove('blink');
    typedText.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, 200);
  } else {
    cursor.classList.add('blink');
    setTimeout(erase, 2000);
  }
}
document.addEventListener("DOMContentLoaded", () => {
  type();
})