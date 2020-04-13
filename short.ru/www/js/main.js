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

//Generate hash code
hashCode = s => s.split('').reduce((a,b)=>{a=((a<<5)-a)+b.charCodeAt(0);return a&a},0);

//Url verification
const isLinkValid = (s) =>{
    const expression = /^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/gm
    const regexp = new RegExp(expression);
    if (s && regexp.test(s)==false && s.length != 0){
        return false;
    }
    else {
        return true
    }
}


$(document).ready(function($) {

 //Отправка с пом. ajax данных из формы   
    $('#btnUrl').click(function(event){ 
        let url = $("#url").val();


        if(isLinkValid(url)){
            let hash = Math.abs(hashCode(url));
            let data = 'url='+url+'&hash='+hash;
            let success = function(data)
            {
                if(data.err != '')
                {
                    alert(data.err);
                }
                else if(data.msg != '')
                {

                    $('#url').val("");//Очистка формы
                    $('#url').removeClass("error");//Очистка формы
                    $('p.shorten_link').html('<b><a href=\"'+data.url+'\">'+ data.url+'</a></b>');// Вывод результата на экран
                }
            };
            make_ajax('post', 'json', '/', data, success);
        }
        else {
            $('#url').addClass("error");
        }


    });

    $('#url').keyup(function(event) {
        let url = $("#url").val();
        if(isLinkValid(url)){
            $('#url').removeClass("error");
        }
        else {
            $('#url').addClass("error");
        }
    });


});

