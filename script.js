// JavaScript for the slider (using vanilla JavaScript)
const sliderContent = document.querySelector('.slider-content');
const sliderItems = document.querySelectorAll('.slider-item');
const prevButton = document.querySelector('.slider-control.prev');
const nextButton = document.querySelector('.slider-control.next');
const slideIndicators = document.querySelectorAll('.slide-indicator');
let slideIndex = 0;

// Function to go to a specific slide
function goToSlide(index) {
    slideIndex = index;
    const translateX = -slideIndex * 100;
    sliderContent.style.transform = `translateX(${translateX}%)`;
    updateSlideIndicators();
}

// Function to update the active indicator
function updateSlideIndicators() {
    slideIndicators.forEach((indicator, index) => {
        if (index === slideIndex) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}

// Function to handle slide navigation
function slide(direction) {
    if (direction === 'next') {
        slideIndex++;
    } else {
        slideIndex--;
    }

    if (slideIndex < 0) {
        slideIndex = sliderItems.length - 1;
    } else if (slideIndex >= sliderItems.length) {
        slideIndex = 0;
    }

    const translateX = -slideIndex * 100;
    sliderContent.style.transform = `translateX(${translateX}%)`;
    updateSlideIndicators();
}

// Automatically slide every 5 seconds
const autoSlideInterval = setInterval(() => slide('next'), 5000);

// Stop auto slide on button click
prevButton.addEventListener('click', () => {
    clearInterval(autoSlideInterval);
    slide('prev');
});

nextButton.addEventListener('click', () => {
    clearInterval(autoSlideInterval);
    slide('next');
});

// Add event listeners to slide indicators
slideIndicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        clearInterval(autoSlideInterval);
        goToSlide(index);
    });
});

// Initialize the first slide indicator as active
slideIndicators[0].classList.add('active');



  // Function to open the video modal



