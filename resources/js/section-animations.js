document.addEventListener('DOMContentLoaded', () => {
  const elements = document.querySelectorAll('[data-animate]');

  if (!elements.length) return;

  const initElement = (el) => {
    const type = el.dataset.animate || 'fade-up';

    el.classList.add('opacity-0', 'will-change-transform');

    switch (type) {
      case 'fade-left':
        el.classList.add('translate-x-6');
        break;
      case 'fade-right':
        el.classList.add('-translate-x-6');
        break;
      case 'fade-down':
        el.classList.add('-translate-y-6');
        break;
      case 'zoom-in':
        el.classList.add('scale-95');
        break;
      case 'fade-up':
      default:
        el.classList.add('translate-y-6');
        break;
    }
  };

  const activateElement = (el) => {
    el.classList.add('transition-all', 'duration-700', 'ease-out');

    requestAnimationFrame(() => {
      el.classList.remove(
        'opacity-0',
        'translate-y-6',
        '-translate-y-6',
        'translate-x-6',
        '-translate-x-6',
        'scale-95'
      );
      el.classList.add(
        'opacity-100',
        'translate-y-0',
        'translate-x-0',
        'scale-100'
      );
    });
  };

  elements.forEach(initElement);

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        const el = entry.target;
        const delay = parseInt(el.dataset.animateDelay || '0', 10);

        if (delay > 0) {
          setTimeout(() => activateElement(el), delay);
        } else {
          activateElement(el);
        }

        observer.unobserve(el);
      });
    },
    { threshold: 0.2 }
  );

  elements.forEach((el) => observer.observe(el));
});
