$.getJSON("https://cat-fact.herokuapp.com/facts", function(data) {
  for (let i = 0; i < data.length; i++) {
    var tag = document.createElement("p"); // <p></p>
    var text = document.createTextNode(data[i]["text"]);
    tag.appendChild(text); // <p>TEST TEXT</p>
    var element = document.getElementsByTagName("body")[0];
    element.appendChild(tag);
  }
});
