var $acordion = document.getElementsByClassName('acordion');
var $acordionTrigger = document.getElementsByClassName('acordion-header');

for(var i = 0; i < $acordionTrigger.length; i++){
    $it = $acordionTrigger[i];
    $it.onclick = function(){
        showAcordion(this);
    };
}

function showAcordion(a){
    $it = a;
    console.log(a);
    $target = document.getElementById($it.getAttribute('data-target'));

    
    if(!$it.classList.contains('open')){
        $it.classList.add('open');
    } else {
        $it.classList.remove('open');
    }

    if(!$target.classList.contains('open')){
        $target.classList.add('open');
    } else {
        $target.classList.remove('open');
    }
}