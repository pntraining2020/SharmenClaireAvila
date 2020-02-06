





function ut() {
  var date = new Date();
  var string = date.toLocaleTimeString([], {timeStyle: 'short'});
  $('#time').text(string)
  
}
window.setInterval(ut,   1000);