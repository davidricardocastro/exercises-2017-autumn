console.log("Good Morning!");


var value
var type


value = '123'; // assign a new value into the "value" variable
console.log(value); // log the current value of "value" variable 
var type = typeof value; //assign the type of the "value" variable into "type"
console.log(type); //log the current value of "type" variable


value = 123;
console.log(value);
var type = typeof value;
console.log(type);

value = '123 Times Square';
console.log(value);
var type = typeof value;
console.log(type);

value = 12.3;
console.log(value);
var type = typeof value;
console.log(type);

value = true;
console.log(value);
var type = typeof value;
console.log(type);

value = 'true';
console.log(value);
var type = typeof value;
console.log(type);

value = [1, 2, 3];
console.log(value);
var type = typeof value;
console.log(type);

value = {
    foo: 'bar'
};
console.log(value);
var type = typeof value;
console.log(type);

value = document;
console.log(value);
var type = typeof value;
console.log(type);


var message_element = document.getElementById('message');
console.log(message_element);
var type = typeof value;
console.log(type);


var text_within_message = message_element.innerHTML;
console.log(message_element.innerHTML); //reading the HTML and logging it
console.log(text_within_message); //logging it
message_element.innerHTML = "A new message";  //writting new html

//function declaration

function change_message() {
    // change the contants of the message element (id="message")
    var message_element = document.getElementById('message');
    message_element.innerHTML = 'Message set by a function!';

}

//function call:
change_message