function select_event(value) {
    document.getElementById("ydl1").style.display = "none";
    document.getElementById("xxl1").style.display = "none";
    document.getElementById("medf1").style.display = "none";
    document.getElementById("mxg1").style.display="none";
    if (value === "ydlselect") {
        document.getElementById("ydl1").style.display = "";
    } else if (value === "xxlselect") {
        document.getElementById("xxl1").style.display = "";
    }   else if (value === "medfselect") {
        document.getElementById("medf1").style.display = "";
    }   else if( value==="mxgselect") {
        document.getElementById("mxg1").style.display="";
    }

}