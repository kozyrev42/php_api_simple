console.log('hello');

// $.ajax('http://api.kozyrev.fun/index.php?bitcoin=usd');

// $.ajax('https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC&tsyms=USD');

let div = document.querySelector('div');
let button = document.querySelector('button');

// button.addEventListener('click', function() {
// 	console.log('click');
// });


button.addEventListener('click', function () {

    fetch('http://api.kozyrev.fun/index.php?bitcoin=usd', {
        mode: 'no-cors',
        method: "get",
        headers: {
            "Content-Type": "application/json"
        }
    }).then(
        (response) => {
            // ответ сервера лежит в переменной response
            console.log(response);
            // response.text()
            // return response.json();
        }).then((data) => {
            // console.log(data);
          });
});
