function make_ajax(type, dataType, url, data, success)
{
    if(type === "") type = "get";
    if(dataType === "") dataType = "json";
    var obj = { 
                type: type, dataType: dataType, url: url, success: success
              };
              
    if(data !== "") obj.data = data;
    $.ajax(obj);   
}

$(document).ready(function($) {
 //Отправка с пом. ajax данных из формы   
    $('#btnUrl').click(function(event){ 
        var url = $("#url").val();
        var data = 'url='+url;
        var success = function(data)
                        {
                            if(data.err != '')
                            {
                                alert(data.err);
                            }
                            else if(data.msg != '')
                            {
                                
                                //console.log(data.url); 
                                $('#url').val("");//Очистка формы
                                $('p.shorten_link').html('<b><a href=\"'+data.url+'\">'+data.url+'</a></b>');// Вывод результата на экран
                            }
                        };
        make_ajax('post', 'json', '/', data, success);        
    });
});