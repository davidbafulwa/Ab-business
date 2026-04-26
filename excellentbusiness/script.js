 function toggleAuth() {
    const action = document.getElementById('auth-action');
    const title = document.getElementById('auth-title');
    const sexe = document.getElementById('sexe-container');
    const toggleText = document.querySelector('.auth-toggle');

    if (action.value === 'connexion') {
        action.value = 'inscription';
        title.innerText = 'Inscription';
        sexe.style.display = 'block';
        toggleText.innerText = 'Déjà un compte ? Se connecter';
    } else {
        action.value = 'connexion';
        title.innerText = 'Connexion';
        sexe.style.display = 'none';
        toggleText.innerText = 'Pas de compte ? Créer un compte';
    }
}

// Fade-in effect
    const faders = document.querySelectorAll('.fade-in');
    const appearOptions = { threshold: 0.2 };
    const appearOnScroll = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, appearOptions);
    faders.forEach(fader => appearOnScroll.observe(fader));

// FAQ Toggle
document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const item = button.parentElement;
        item.classList.toggle('active');
    });
});

// WhatsApp Order
document.getElementById('orderForm').addEventListener('submit', (e) => {
    e.preventDefault();
    const name = document.getElementById('clientName').value;
    const product = document.getElementById('clientProduct').value;
    const message = `Bonjour Excellence Business, je suis ${name}. Je souhaite commander : ${product}`;
    const url = `https://wa.me/243972105874?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
});

//animation des nitresv conteur client et bouteille 

let client =0;
let bouteilles=0;

let interval = setInterval(() => {
    if (client < 954 ) { 
        client +=5;
        document.getElementById("client").innerText=client;
}

if (bouteilles < 3020) {
     bouteilles += 10;
     document.getElementById("bouteilles").innerText = bouteilles;

}

if (clients >= 954 && bouteilles >= 3020 ) {
    clearInterval(interval);
 }
},50 );
