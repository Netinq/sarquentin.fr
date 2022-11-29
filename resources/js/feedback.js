const reviews = document.querySelectorAll('.review');
const next = document.querySelector('#next');
let displayedReviews = [0, 1, 2]

if (window.innerWidth >= 991) displayedReviews = [0, 1]
else displayedReviews = [0]

Array.from(reviews).forEach((review, index) => {
    const reviewBody = review.querySelector('p.reviewBody');
    const reviewAuthor = review.querySelector('h4');
    if (reviewAuthor.textContent.length > 30) reviewAuthor.innerHTML = redureAuthor(reviewAuthor.textContent);
    reviewBody.innerHTML = reduceText(reviewBody.innerHTML);
    const max = window.innerWidth >= 1200 ? 3 : window.innerWidth >= 991 ? 2 : 1;
    if (index >= max) {
        review.style.display = 'none';
    }
});

next.addEventListener('click', nextReviews);

function nextReviews() {
    const max = window.innerWidth >= 1200 ? 3 : window.innerWidth >= 991 ? 2 : 1;
    if (window.innerWidth >= 1200) {
        if (displayedReviews[2] + max <= reviews.length - 1) displayedReviews[2] += max;
        else displayedReviews[2] = 2 - ((reviews.length - 1) - displayedReviews[2]);
    } else if (window.innerWidth >= 991) {
        if (displayedReviews[1]+max <= reviews.length - 1) displayedReviews[1] +=max ;
        else displayedReviews[1] = 2 - ((reviews.length - 1) - displayedReviews[1]);
    } else {
        if (displayedReviews[0]+max <= reviews.length - 1) displayedReviews[0] +=max;
        else displayedReviews[0] = 2 - ((reviews.length - 1) - displayedReviews[0]);
    }
    console.log(displayedReviews);
    displayReviews();
}

function displayReviews() {
    let count = 0.0;
    Array.from(reviews).forEach((review, index) => {
        if (displayedReviews.includes(index)) {
            count += 0.1;
            review.style.display = 'flex';
            review.style.animation = `review .3s ${count}s ease-out, opacity ${count}s`;
        }
        else {
            review.style.display = 'none';
        }
    });
}

function reduceText(text) {
    if (text.length > 150) {
        return text.substring(0, 100) + '...';
    } else {
        return text;
    }
}

function redureAuthor(text) {
    return text.split(' ')[0]+',<span>'+text.split(',')[1]+'</span>';
}
