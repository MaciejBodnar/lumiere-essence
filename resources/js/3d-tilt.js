/**
 * 3D Tilt Effect
 * Adds a 3D tilt interaction to elements with the [data-tilt] attribute.
 */
document.addEventListener('DOMContentLoaded', () => {
  const tiltElements = document.querySelectorAll('[data-tilt]');

  if (!tiltElements.length) return;

  tiltElements.forEach((el) => {
    // Add necessary styles for 3D context
    el.style.transformStyle = 'preserve-3d';

    el.addEventListener('mousemove', handleMove);
    el.addEventListener('mouseleave', handleLeave);
    el.addEventListener('mouseenter', handleEnter);
  });

  function handleMove(e) {
    const el = e.currentTarget;
    const rect = el.getBoundingClientRect();

    // Mouse position relative to the element
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    // Center of the element
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    // Calculate rotation (max 10 degrees)
    // RotateX is based on Y axis movement (up/down tilts X axis)
    // RotateY is based on X axis movement (left/right tilts Y axis)
    const rotateX = ((y - centerY) / centerY) * -10;
    const rotateY = ((x - centerX) / centerX) * 10;

    // Apply transform
    // perspective: gives the 3D depth
    // scale3d: slightly zooms in to prevent edges from clipping or looking flat
    el.style.transform = `
      perspective(1000px)
      rotateX(${rotateX}deg)
      rotateY(${rotateY}deg)
      scale3d(1.05, 1.05, 1.05)
    `;
  }

  function handleLeave(e) {
    const el = e.currentTarget;

    // Reset transform with a smooth transition
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
    // Remove transition delay for instant response when entering
    el.style.transition = 'transform 0.1s ease-out';
  }
});
