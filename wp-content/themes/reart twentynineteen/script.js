const toggleButton = document.querySelector('.toggleButton')
const navbarLinks = document.querySelector('.menu')

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})


const faders = document.querySelectorAll(".novostiBox, .textBox.antiqueRuby.reartFestival, .textBox");
const sliders = document.querySelectorAll(".boxTekstLijevo, .boxSlikaLijevo, .boxSlikaDesno, .boxTekstDesno, .boxSlikaDesno2, section .pomjeriSLijeva h2, section .pomjeriSDesna h2");

const appearOptions = {
    threshold: 0.15,
    rootMargin: "0px 0px -20px 0px"
 };

const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            entry.target.classList.add('appear');
            appearOnScroll.unobserve(entry.target);
        }
    });
}, appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});

sliders.forEach(slider => {
    appearOnScroll.observe(slider);
})