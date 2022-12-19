# SEND DATA USING AN XMLHttpRequest (XHR) POST CALL

_Send data from a Browser to a Web Server.
The API will use an **Ajax XMLHttpRequest (XHR) POST call**
written in javascript and php._
  
[See offsite demo](http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=ajax-XHR-calls-browser-to-web-server)

## XMLHttpRequest

XMLHttpRequest (XHR) is a JavaScript API to create AJAX requests.
The request sent by XMLHttpRequest can either be a GET or POST.
Its methods provide the ability to send network requests between a
browser and a server.

![IMAGE - ajax-XHR-calls-browser-to-web-server - IMAGE](../../../docs/pics/ajax-XHR-calls-browser-to-web-server.jpg)

## CODE

Two numbers will be
sent from a browser (client)
to a web server (server)
that will calculate
and return the sum.
A webpage will be used to
enter the data and
display the roundtrip results.

### GET USER DATA

Javascript,

```js
// GATHER ALL OPERANDS FROM INPUT 
operand1 = document.getElementById('operand_1_input_field').value;
operand2 = document.getElementById('operand_2_input_field').value;

// SEND DATA TO SERVER
send_data_to_web_server(operand1, operand2);
```

### SEND DATA USING XMLHttpRequest (XHR) POST CALL

Call this javascript every time you want to get send data to the server,

```js
// -----------------------------------------------------------------------------------------------------------------------
// SEND DATA TO WEB SERVER
function send_data_to_web_server(operand1, operand2) {

    // CREATE A NEW REQUEST
    postRequest = new XMLHttpRequest();
        if (!postRequest) {
        console.warn("Giving up :( Cannot create an XMLHTTP instance");
    }
    
    // CONVERT JSON TO STRING
    var attributesJSONString = JSON.stringify({ 
        "operand1": operand1,
        "operand2": operand2
    });

    // OPEN CONNECTION - CREATE GET REQUEST
    // true means DON'T BLOCK
    postRequest.open('POST', url, true);

    // SEND JSON FORMAT
    postRequest.setRequestHeader('Content-Type', 'application/json');
    postRequest.send(attributesJSONString);

    // LISTEN AND KICK OFF FUNCTION WHEN READY
    postRequest.onreadystatechange = function() {

        // CHECK IF IT'S DONE
        try {
            if (postRequest.readyState === XMLHttpRequest.DONE) {

                if (postRequest.status === 200) {

                    // THE MAGIC HAPPENS HERE *******************************************
                    // RECEIVE JSON FORMAT
                    serverData = JSON.parse(postRequest.responseText);
                    show_data(serverData);

                } else {
                    console.warn("There was an issue getting data to the server");
                    server_error();
                }
            }
        }
        // WHEN THE SERVER IS DOWN
        catch( e ) {
            console.warn("There was an issue getting data to the server: Caught Server Exception:" + e.description);
            server_error();
        }

    }
}
```

### RECEIVE DATA ON THE WEB SERVER & RESPOND

```php
// GET THE JSON DATA FROM THE USER
header("Content-Type: application/json");
$attributesJSON = json_decode(file_get_contents("php://input"));

// UN PARSE IT
$operand1 = $attributesJSON->operand1;
$operand2 = $attributesJSON->operand2;

// DO SOMETHING
$sum = (float)$operand1 + (float)$operand2;
sleep(1);

// BUILD ARRAY
$array = [
    'sum'=>$sum
];

// SEND IT TO THE BROWSER
echo json_encode($array);
```