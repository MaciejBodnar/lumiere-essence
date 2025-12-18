document.addEventListener('DOMContentLoaded', () => {
  const tiltElements = document.querySelectorAll('[data-tilt]');

  if (!tiltElements.length) return;

  tiltElements.forEach((el) => {
    el.style.transformStyle = 'preserve-3d';

    el.addEventListener('mousemove', handleMove);
    el.addEventListener('mouseleave', handleLeave);
    el.addEventListener('mouseenter', handleEnter);
  });

  function handleMove(e) {
    const el = e.currentTarget;
    const rect = el.getBoundingClientRect();

    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateX = ((y - centerY) / centerY) * -10;
    const rotateY = ((x - centerX) / centerX) * 10;

    el.style.transform = `
      perspective(1000px)
      rotateX(${rotateX}deg)
      rotateY(${rotateY}deg)
      scale3d(1.05, 1.05, 1.05)
    `;
  }

  function handleLeave(e) {
    const el = e.currentTarget;

    el.style.transition = 'transform 0.5s ease-out';
    el.style.transform = `
      perspective(1000px)
      rotateX(0)
      rotateY(0)
      scale3d(1, 1, 1)
    `;
  }

  function handleEnter(e) {
    const el = e.currentTarget;
    el.style.transition = 'transform 0.1s ease-out';
  }
});
