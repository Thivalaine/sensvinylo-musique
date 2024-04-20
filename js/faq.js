export function faq() {
    const faqItems = document.querySelectorAll('.faqItem'); 

    faqItems.forEach(faqItem => {
        const faqToggle = faqItem.querySelector('.faqToggle');
        const faqAnswer = faqItem.querySelector('.faqAnswer');
        const faqGroup = faqItem.querySelector('.faqGroup');

        faqGroup.addEventListener('click', () => {
            faqAnswer.classList.toggle('show');
            faqToggle.classList.toggle('active');
        });
    });
}