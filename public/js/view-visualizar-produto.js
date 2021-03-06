const imgs = document.querySelectorAll('.img-selecao a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.mostruario img:first-child').clientWidth;

    document.querySelector('.mostruario').style.transform = `translateX(${- (imgId ) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);