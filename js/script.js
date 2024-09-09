document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Gracias por su mensaje. Nos pondremos en contacto pronto.');
    this.reset();
});