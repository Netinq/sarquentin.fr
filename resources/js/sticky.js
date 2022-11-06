const stickies = document.querySelectorAll('.stickyContainer');
const tube_reverse = document.querySelector('#tube_reverse');
const tube_reverse_width = tube_reverse.offsetWidth;

Array.from(stickies).forEach(sticky => {

    const stickyStartScroll = sticky.offsetTop;
    const stickyEndScroll = stickyStartScroll + sticky.offsetHeight;
    let lastScroll = 0;

    window.addEventListener('scroll', (e) => {
        const scroll = window.scrollY;

        const delta = scroll-stickyStartScroll;
        const max = stickyEndScroll - stickyStartScroll;
        const scale = 10 - (delta / max * 10);

        lastScroll = scroll;
        if (scroll >= stickyStartScroll && scroll <= stickyEndScroll ) {
            tube_reverse.style.opacity = scale*0.1;
        }
    });
});
