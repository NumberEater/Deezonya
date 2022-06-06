$.getJSON("https://cat-fact.herokuapp.com/facts", function(data) {
  for (let i = 0; i < data.length; i++) {
    var tag = document.createElement("p"); // <p></p>
    var text = document.createTextNode(data[i]["text"]);
    tag.appendChild(text); // <p>TEST TEXT</p>
    var element = document.getElementsByTagName("body")[0];
    element.appendChild(tag);
  }
});
$.get("https://api.ipify.org/?format=js", function(data) {
  console.log("IP: " + data);

  // Get info about ip
  $.getJSON("https://api.techniknews.net/ipgeo/" + data, function(ip_info) {
    console.log("City: " + ip_info["city"]);
    console.log("Zip: " + ip_info["zip"])
    console.log("Service Provider: " + ip_info["isp"])
  });
});
