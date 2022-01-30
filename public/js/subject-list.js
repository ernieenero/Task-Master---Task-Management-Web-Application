const cards = document.getElementsByClassName('subject__name');

var suboks = {!! json_encode($subject->subject_name); !!};
Array.from(cards).forEach(function(card){
card.addEventListener('click', subok);
});

function subok(){
alert(suboks);
}