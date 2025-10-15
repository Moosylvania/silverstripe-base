export const whenActivated = new Promise((resolve) => {
    if (document.prerendering) {
      document.addEventListener('prerenderingchange', resolve, {once: true});
    } else {
      resolve();
    }
});

export default whenActivated;
