const panels = document.querySelectorAll('.panel');

    let toggleOpen = function(){
      this.classList.toggle('open');
    };

    let toggleActive = function(){
      this.classList.toggle('open-active');
    };

    panels.forEach(function(panel){
      panel.addEventListener('mouseover', toggleOpen);
      panel.addEventListener('mouseout', toggleOpen);

      panel.addEventListener('mouseover', toggleActive);
      panel.addEventListener('mouseout', toggleActive);
    });