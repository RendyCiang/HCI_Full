var images = [
    '/asset/photo/jembatan_runtuh.jpeg',
    '/asset/photo/Jalan_Lubang.jpeg',
    '/asset/photo/Monyet.jpg',
    '/asset/photo/Pohon_Tumbang.jpeg'
];

var currentIndex = 0;
            
function changeImage(direction) {
    currentIndex += direction;
    if (currentIndex < 0) {
        currentIndex = images.length - 1;
    } else if (currentIndex >= images.length) {
        currentIndex = 0;
    }
    document.getElementById('Carousel_Container').src = images[currentIndex];
}

function changeImageTo(src) {
    currentIndex = images.indexOf(src);
    document.getElementById('Carousel_Container').src = src;
}

window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});