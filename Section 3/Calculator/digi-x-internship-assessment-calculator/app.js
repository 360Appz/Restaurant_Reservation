(function(){
  
  let screen = document.querySelector('.screen');
  let buttons = document.querySelectorAll('.btn');
  let clear = document.querySelector('.btn-clear');
  let equal = document.querySelector('.btn-equal');
  
  buttons.forEach(function(button){
    button.addEventListener('click', function(e){
      let value = e.target.dataset.num;
      screen.value += value;
      //Previously, the + was not there, it is required
      //so that both the input value pn screen will be 
      //concatenated for the eval() function to work
    })
  });
  
  equal.addEventListener('click', function(e){
    if(screen.value === ''){
      screen.value = 'Please Enter a Value';
    } else {
      let answer = eval(screen.value);
      screen.value = answer;
      //Previously, the + was there, it should
      //be removed to to prevent concatenation of
      //values after the eval() function is executed
      //In this part, we are just assigning the answer to
      //the screen.value not doing any operations
    }
  })
  
  clear.addEventListener('click', function(e){
    screen.value = '';
  })
 
})();
