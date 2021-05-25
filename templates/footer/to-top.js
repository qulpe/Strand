const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const square = entry.target.querySelector('#toTop');
  
      if (entry.isIntersecting) {
        square.classList.add('square-animation');
        return; // if we added the class, exit the function
      }
  
      square.classList.remove('square-animation');
    });
  });
  
observer.observe(document.querySelector('.square-wrapper'));