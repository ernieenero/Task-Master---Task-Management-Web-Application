const monthTag = document.querySelector('h1.currMonth');
const fullDateTag = document.querySelector('h3.weekDate');
const monthDays = document.querySelector('div.num-date');
const rightButton = document.querySelector('a.next');
const leftButton = document.querySelector('a.prev');

const months = {
    1: 'January',
    2: 'February',
    3: 'March',
    4: 'April',
    5: 'May',
    6: 'June',
    7: 'July',
    8: 'August',
    9: 'September',
    10: 'October',
    11: 'November',
    12: 'December'
}
const weekDays = {
    1: 'Sun',
    2: 'Mon',
    3: 'Tue',
    4: 'Wed',
    5: 'Thu',
    6: 'Fri',
    7: 'Sat'
}


const date = new Date();
var currMonth = date.getMonth();
var currDate = date.getDate();
var currYear = date.getFullYear();

startCalendar(currMonth, currDate, currYear);

rightButton.addEventListener('click', clickRight);
function clickRight(){
    if(currMonth < 12){
        currMonth+=1;
        dateHelper(currYear, currMonth, currDate);
    }else {
        currMonth = 0;
        currYear+=1;
        dateHelper(currYear, currMonth, currDate);
    }
}   

leftButton.addEventListener('click', clickLeft);
function clickLeft(){
    if(currMonth > 0){
        currMonth -= 1;
        dateHelper(currYear, currMonth, currDate);
    }else{
        currMonth = 11;
        currYear -=1;
        dateHelper(currYear, currMonth, currDate);
    }
}   

function dateHelper(currYear, currMonth, currDate){
    const date = new Date(currYear, currMonth, currDate);
    currMonth = date.getMonth();
    currDate = date.getDate();
    currYear = date.getFullYear();
    weekDate = date.getDay();

    startCalendar(currMonth, currDate, currYear);
}

function startCalendar(currMonth=null, currDate=null, currYear=null){
    var weekDate = new Date(currYear, currMonth, currDate).getDay();
    var startDate = new Date(currYear, currMonth, 1).getDay();
    var numOfDays = new Date(currYear, currMonth+1, 0).getDate();
    var prevNumOfDays = new Date(currYear, currMonth, 0).getDate();
    
    var calendarCol = 35;
    var fullDate = "";
    var numDays = '';
    
    console.log(weekDate, startDate);

    if(currDate < 10){
        finalDate = "0" + currDate;
    }else{
        finalDate = currDate;
    }
    subok = 1;

    fullDate = weekDays[weekDate+1] + " " + months[currMonth + 1] + " " + finalDate + ", " + currYear;


    monthTag.textContent = months[currMonth + 1];
    fullDateTag.textContent = fullDate;

    
    prevNumOfDays =  prevNumOfDays - weekDate + 1;
  
    for(let y= 0; y < startDate; y++){
        numDays += "<div class='prev-dates'>" + prevNumOfDays + "</div>";
        prevNumOfDays++;
    }

    for(let x=1; x <= numOfDays; x++){
        if(x !== currDate){
            numDays += '<div>'+x+'</div>';
        }else{
            numDays += '<div class="current-day">'+x+'</div>';
        }
    }
   
    calendarCol = calendarCol - weekDate - numOfDays + 7;

    for(let y= 1; y <= calendarCol; y++){
        numDays += "<div class='next-dates'>" + y + "</div>";
    }

    monthDays.innerHTML = numDays;
}
