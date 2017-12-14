$(document).ready(function () {
    var url = "http://localhost:8888/exam2017/explore_california_api.php";

    $.get(url,function (data) {
        // parse JSON data
        var toursData = JSON.parse(data);
        // create a table with JSON
        var table = "<table class='table'>";
        table += "<thead>";
        table += "<tr>";
        table += "<th> -Navn- </th>";
        table += "<th> -Beskrivelse- </th>";
        table += "<th> -Pris- </th>";
        table += "<th> -N.O.- </th>";
        table += "<th> -Billede- </th>";
        table += "</tr>";
        table += "</thead>";


        table += "<tbody>";

        for (var i = 0; i < toursData.length; i++){
            table += "<tr>";
            table += "<td>" + toursData[i].tourName +"</td>";
            table += "<td>" + toursData[i].description +"</td>";
            table += "<td>" + toursData[i].price + "$</td>";
            table += "<td>" + toursData[i].keywords + "</td>";
            table += "<td>"+"<img src='http://localhost:8888/exam2017/billeder/"+toursData[i].graphic+"' alt='"+toursData[i].graphic+"'</img>"+"</td>";
            table += "<tr>";

        }
        table += "</tbody>";
        table += "</table>";

        // append table to html DOM manipulation
        $("#table").append(table);

    });
    
});