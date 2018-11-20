

  var a = document.querySelectorAll('.ninja-forms-field');
  console.log(a);
  a.forEach(function(i){
    i.addEventListener('focus', function(e) {
      e.target.parentNode.parentNode.children[0].children[0].classList.add('focused')
    })
  })
