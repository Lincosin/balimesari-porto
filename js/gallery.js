class Carousel {
    constructor(container, items, controls) {
        this.carouselContainer = container;
        this.carouselControls = controls;
        this.carouselArray = [...items];
        this.isMobile = this.detectMobile(); // Pendeteksian perangkat mobile
    }

    detectMobile() {
        return window.matchMedia("(max-width: 767px)").matches;
    }

    updateGallery() {
        this.carouselArray.forEach(el => {
            el.classList.remove('gallery-item-1', 'gallery-item-2', 'gallery-item-3', 'gallery-item-4', 'gallery-item-5');
        });

        this.carouselArray.slice(0, 5).forEach((el, i) => {
            el.classList.add(`gallery-item-${i + 1}`);
        });
    }

    setCurrentState(direction) {
        if (direction.className == 'gallery-controls-previous') {
            this.carouselArray.unshift(this.carouselArray.pop());
        } else {
            this.carouselArray.push(this.carouselArray.shift());
        }
        this.updateGallery();
    }

    setControls() {
        if (!this.isMobile) {
            this.carouselControls.forEach(control => {
                galleryControlsContainer.appendChild(document.createElement('button')).className = `gallery-controls-${control}`;
                document.querySelector(`.gallery-controls-${control}`).innerText = control;
            });
        }
    }

    useControls() {
        if (!this.isMobile) {
            const triggers = [...galleryControlsContainer.childNodes];
            triggers.forEach(control => {
                control.addEventListener('click', e => {
                    e.preventDefault();
                    this.setCurrentState(control);
                });
            });
        } else {
            let touchstartX = 0;
            this.carouselContainer.addEventListener('touchstart', e => {
                touchstartX = e.touches[0].clientX;
            });
            this.carouselContainer.addEventListener('touchend', e => {
                const touchendX = e.changedTouches[0].clientX;
                if (touchendX < touchstartX) {
                    this.setCurrentState({ className: 'gallery-controls-next' });
                } else if (touchendX > touchstartX) {
                    this.setCurrentState({ className: 'gallery-controls-previous' });
                }
            });
        }
    }
}

const galleryContainer = document.querySelector('.gallery-container');
const galleryControlsContainer = document.querySelector('.gallery-controls');
const galleryControls = ['previous', 'next'];
const galleryItems = document.querySelectorAll('.gallery-item');

const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);

exampleCarousel.setControls();
exampleCarousel.useControls();
