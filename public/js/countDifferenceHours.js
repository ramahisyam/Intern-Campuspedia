function difference() {
    var timeOfCall = $('#entryHours').val(),
        timeOfResponse = $('#homeHours').val(),
        hours = timeOfResponse.split(':')[0] - timeOfCall.split(':')[0],
        minutes = timeOfResponse.split(':')[1] - timeOfCall.split(':')[1];
            
        var a = 0;    
        if ((timeOfCall <= "12:00:00" && timeOfResponse >= "13:00:00")){
          a = a + 1;
        }
        if ((timeOfCall <= "15:59:59" && timeOfResponse >= "16:59:59")){
          a = a + 1;
        }
        if ((timeOfCall <= "17:59:59" && timeOfResponse >= "18:59:59")){
          a = a + 1;
        }
        else {
            a = 0;
        }
        minutes = minutes.toString().length<2?'0'+minutes:minutes;
        if(minutes<0){ 
            hours--;
            minutes = 60 + minutes;        
        }
        hours = hours.toString().length<2?'0'+hours:hours;
       
        $('#workingHours').val(hours-a+ ':' + minutes);
}