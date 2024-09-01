const carousel = document.querySelector('.carousel');
    let scrollAmount = 0;

    function scrollCarousel(direction) {
        const itemWidth = document.querySelector('.carousel-items').clientWidth;
        const visibleItems = Math.floor(carousel.clientWidth / itemWidth);
        const maxScroll = carousel.scrollWidth - carousel.clientWidth;

        scrollAmount += direction * itemWidth * visibleItems;

        if (scrollAmount < 0) {
            scrollAmount = 0;
        } else if (scrollAmount > maxScroll) {
            scrollAmount = maxScroll;
        }

        carousel.style.transform = `translateX(-${scrollAmount}px)`;
    }