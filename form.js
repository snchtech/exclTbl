let form = document.querySelector('#report-form');
let formError = document.querySelector('.form-error');
let radioButton = form.querySelectorAll('input[type=radio]');

document.getElementById("submit-form").addEventListener('click', function(event){
    event.preventDefault();

    if(document.querySelector('.report-constructor')) {
       
        if(document.getElementById('form21t1').checked) {
            form.action = "handlers/form21t1.php";
        } else if(document.getElementById('form21t1p1').checked) {
            form.action = "handlers/form21t1p1.php";
        } else if(document.getElementById('form21t1p2').checked) {
            form.action = "handlers/form21t1p2.php";
            
        } else {
            formError.innerHTML = 'Виберіть один із звітів по формі 21'; 
        }
    
        radioButton.forEach(element => {
            element.addEventListener('click', function(event){
                formError.innerHTML = '';
            });
         });
    }
    
     if(form.getAttribute("action") !== '') {
        form.submit();
        radioButton.forEach(element => {
            element.checked = false;
        });
        if(document.querySelector('.report-constructor')) {
            form.setAttribute("action", "");
        }
        
     }

});