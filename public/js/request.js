const HANDLER = '/core/handler.php';

// функция для отправки данных на сервер
function server(data)
{
   data.url = (!!data.url)? data.url : HANDLER;
   switch(data.method)
   {
        case 'GET': sendGetRequest(data); break;

        case 'PUT':
        case 'PATH':
        case 'DELETE':
        case 'POST': sendPostRequest(data); break;
        // OPTIONS используется для описания параметров соединения с целевым ресурсом.
        case 'OPTIONS': break;
        default: throw "неизвестный метод"; break;
   }
}

// отправка запросов у которых есть тело
function sendPostRequest(data)
{
    console.log(data)
    fetch(data.url,{
        method: data.method,
        body: data.body
    }) 
    .then(response => response.json() )
    .then(response => console.log(response) )
    .catch(error => console.error(error) ) 
}

// отправка запросов без тела - небезопасно
function sendGetRequest(data)
{
    console.log(data)
    fetch(data.url+'?param1=test') 
    .then(response => response.json() )
    .then(response => console.log(response) )
    .catch(error => console.error(error) ) 
}

export default server;