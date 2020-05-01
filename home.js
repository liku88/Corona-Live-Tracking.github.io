function fetchdata(){
    $.get('https://api.covid19api.com/summary',
         function (data){
        var table = document.getElementById('tableid');
        for (var i = 1; i<(data['Countries'].length); i++){
            var row = table.insertRow();
            row.insertCell(0);
            table.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            
             row.insertCell(1);
            table.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
            
             row.insertCell(2);
            table.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            
            row.insertCell(3);
            table.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            
            row.insertCell(4);
            table.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
            
            row.insertCell(5);
            table.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewDeaths'];
            
            row.insertCell(6);
            table.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewRecovered'];
        }
    }
         )
}