const scroller = document.querySelector('.scroller');

window.onload = () => {
    let width = 0;
    Array.from(scroller.children).forEach(child => {
        width += child.offsetWidth;
    });
    width += 25*(scroller.children.length);
    document.documentElement.style.setProperty('--translateinfinite', `-${width}px`);
}

//
// window.onload = function() {
//     setInterval(() => {
//         scroller.scrollLeft += 1;
//         if (scroller.scrollLeft >= scroller.scrollWidth /2) {
//             const child = scroller.children[0];
//             const copy = child.cloneNode(true);
//             scroller.appendChild(copy);
//             child.remove()
//         }
//     }, 10);
// }
