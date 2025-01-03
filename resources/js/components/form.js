(function() {
  document.addEventListener('DOMContentLoaded', function() {

    // Handle form submission
    document.querySelectorAll('form').forEach(form => {
      form.addEventListener('submit', function(e) {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    });

    // Handle input focus
    document.querySelectorAll('input').forEach(input => {
      input.addEventListener('focus', function() {
        const parent = this.parentElement;
        const label = parent.querySelector('.js-label');
        const labelGroups = document.querySelectorAll('.js-label-group');
        const error = parent.querySelector('.js-error');

        if (label) {
          label.classList.remove('hidden');
          label.classList.remove('!text-red-500');
        }

        if (labelGroups) {
          labelGroups.forEach(labelGroup => {
            labelGroup.classList.remove('!text-red-500');
          });
        }

        if (error) {
          error.classList.add('hidden');
        }
        this.classList.remove('!border-red-500');
      });
    });
  });
})();