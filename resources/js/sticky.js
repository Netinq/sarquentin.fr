const stickies = document.querySelectorAll('.stickyContainer');


Array.from(stickies).forEach(sticky => {

    const stickyStartScroll = sticky.offsetTop + (window.innerHeight / 2);
    const stickyEndScroll = stickyStartScroll + sticky.offsetHeight;

    window.addEventListener('scroll', (e) => {
        const scroll = window.scrollY;
        if (scroll >= stickyStartScroll && scroll <= stickyEndScroll ) {
            sticky.classList.add('active');
        }

    });
});
