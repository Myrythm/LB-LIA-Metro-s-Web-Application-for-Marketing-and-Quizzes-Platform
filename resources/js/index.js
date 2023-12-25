

document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.carousel-inner');

    carousel.addEventListener('click', function (event) {
        const clickedButton = event.target.closest('.regist_btn, .info_btn');

        if (clickedButton) {
            if (clickedButton.classList.contains('regist_btn')) {
                location.href = 'https://wa.me/+6285745170301';
            } else if (clickedButton.classList.contains('info_btn')) {
                location.href = 'https://wa.me/+6285745170052';
            }
        }
    });
});