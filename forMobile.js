function buttonList () {
    document.getElementById("wrapper-mobile-nav-bar").style.display = "grid";
    // document.getElementById("theBody").style.background="rgba(0,0,0, 0.3";
    document.getElementById("search-engine-2").style.display = "none";
    // document.getElementById("search-field").style.display = "none";
}

function sideBarExit(){
    document.getElementById("wrapper-mobile-nav-bar").style.display = "none";
    document.getElementById("search-engine-2").style.display = "flex";
}