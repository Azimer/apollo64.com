
function bannerupdate() {

  var ns4 = (document.layers)? true:false;
  
  if (ns4 == false) {
    parent.banner.location = "ie_frames_banner.htm";
  }
  
  if (ns4 == true) {
    parent.frames["banner"].location = "ns_frames_banner.htm"
  }
}


function changeall(values) {

var ns4 = (document.layers)? true:false;

if (ns4 == false) {
  parent.main.location = "main_" + values + ".htm";
}

}
