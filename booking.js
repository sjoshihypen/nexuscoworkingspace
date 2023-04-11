var currentDateTime = new Date();
var Year = currentDateTime.getFullYear();
var Month = (currentDateTime.getMonth() + 1);
var Date = (currentDateTime.getDate() + 1);

if(date < 10) {
  Date = '0' + Date;
}
if(month < 10) {
  Month = '0' + Month;
}

var dateTomorrow = Year + "-" + Month + "-" + Date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}


