const reviews = document.querySelectorAll('.review');
const next = document.querySelector('#next');
let displayedReviews = [0, 1, 2]

Array.from(reviews).forEach((review, index) => {
    const reviewBody = review.querySelector('p.reviewBody');
    const reviewAuthor = review.querySelector('h4');
    if (reviewAuthor.textContent.length > 30) reviewAuthor.innerHTML = redureAuthor(reviewAuthor.textContent);
    reviewBody.innerHTML = reduceText(reviewBody.innerHTML);
    if (index >= 3) {
        review.style.display = 'none';
    }
});

next.addEventListener('click', nextReviews);

function nextReviews() {
    if (displayedReviews[2]+3 <= reviews.length - 1) displayedReviews[2] +=3 ;
    else displayedReviews[2] = 2 - ((reviews.length - 1) - displayedReviews[2]);
    if (displayedReviews[1]+3 <= reviews.length - 1) displayedReviews[1] +=3 ;
    else displayedReviews[1] = 2 - ((reviews.length - 1) - displayedReviews[1]);
    if (displayedReviews[0]+3 <= reviews.length - 1) displayedReviews[0] +=3;
    else displayedReviews[0] = 2 - ((reviews.length - 1) - displayedReviews[0]);
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
