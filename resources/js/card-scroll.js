const deviceCards = document.querySelectorAll('.card');
const observer = new IntersectionObserver(
  (entries) => {
    console.log(entries);
    entries.forEach((entry) => {
      entry.target.classList.toggle('show', entry.isIntersecting);
      if (entry.isIntersecting) observer.unobserve(entry.target);
    });
  },
  {
    threshold: 0.7,
  }
);

deviceCards.forEach((card) => {
  observer.observe(card);
});
