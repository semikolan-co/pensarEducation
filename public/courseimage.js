
var phycom = document.getElementById("phycom");
var advele = document.getElementById("advele");
var basele = document.getElementById("basele");
var imageWidth = document.getElementById("image").width;
var ratio = imageWidth / 1203
console.log("Iama here but")
if (typeof (phycom) != 'undefined' && phycom != null) {
   phycom.coords = 274 * ratio + "," + 331 * ratio + "," + 45 * ratio
}

if (typeof (advele) != 'undefined' && advele != null) {
   advele.coords = 594 * ratio + "," + 381 * ratio + "," + 45 * ratio
}

if (typeof (basele) != 'undefined' && basele != null) {
   basele.coords = 913 * ratio + "," + 331 * ratio + "," + 45 * ratio
}