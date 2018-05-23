'use strict';
function log(args) {
  var str = '';
  for (var i = 0; i < arguments.length; i++) {
    if (typeof arguments[i] === 'object') {
      str += JSON.stringify(arguments[i]);
    } else {
      str += arguments[i];
    }
  }
  var div = document.createElement('div');
  div.innerHTML = str;
  document.body.appendChild(div);
}

NodeList.prototype[Symbol.iterator] = Array.prototype[Symbol.iterator];
HTMLCollection.prototype[Symbol.iterator] = Array.prototype[Symbol.iterator];

var list = document.getElementsByClassName('page_item');
for (var item of list) {
  log(item.id);
}
