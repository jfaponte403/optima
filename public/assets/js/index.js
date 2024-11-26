const methodSelector = document.getElementById('method-selector');
const graphicMethod = document.getElementById('graphic-method');
const twoPhasesMethod = document.getElementById('two-phases-method');

methodSelector.addEventListener('change', function() {
    if (this.value === 'graphic') {
        graphicMethod.style.display = 'block';
        twoPhasesMethod.style.display = 'none';
    } else {
        graphicMethod.style.display = 'none';
        twoPhasesMethod.style.display = 'block';
    }
});

methodSelector.value = 'graphic';
methodSelector.dispatchEvent(new Event('change'));