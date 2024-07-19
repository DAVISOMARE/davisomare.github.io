// scripts.js
document.addEventListener('DOMContentLoaded', function () {
    let index = 0;
    const testimonials = document.querySelectorAll('.testimonial');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    function showTestimonial(n) {
        testimonials.forEach((testimonial, i) => {
            testimonial.style.display = 'none';
            if (i === n) {
                testimonial.style.display = 'block';
            }
        });
    }

    function nextTestimonial() {
        index = (index + 1) % testimonials.length;
        showTestimonial(index);
    }

    function prevTestimonial() {
        index = (index - 1 + testimonials.length) % testimonials.length;
        showTestimonial(index);
    }

    prevButton.addEventListener('click', prevTestimonial);
    nextButton.addEventListener('click', nextTestimonial);

    showTestimonial(index);
    setInterval(nextTestimonial, 45000); // Auto-slide every 45 seconds
});
