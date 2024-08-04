$(document).ready(function(){
    $.ajax({
        type: "POST",
        url: "../php/list.php",
        contentType: "application/json; charset=utf-8",
        success: function (response) {
            var tr='';
            var mass=JSON.parse(response);
            $.each(mass,function(index,value){
                    // console.log(value.FIO);
                    tr += '<tr><td>' + value.FIO +'</td>' +'<td>' + value.PHONE +'</td>'+'<td>' + value.EMAIL + '</td>'+'<td>' + value.CITY +'</td></tr>'
                    
                })
            $('.list_info').replaceWith(tr);
        }
    })
    $('.csv').click(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../php/csv.php",
            contentType: "application/json; charset=utf-8",
            success: function (response) { 
                window.location.href = '../csv/file.csv';

            }})
      
    })
    $('.heading.city').click(function(){
        var table = $(this).parents('.list').eq(0)
        var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
        this.asc = !this.asc
        if (!this.asc){rows = rows.reverse()}
        for (var i = 0; i < rows.length; i++){table.append(rows[i])}
    })
    function comparer(index) {
        return function(a, b) {
            var valA = getCellValue(a, index), valB = getCellValue(b, index)
            return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
        }
    }
    function getCellValue(row, index){ return $(row).children('td').eq(index).text() }

    })