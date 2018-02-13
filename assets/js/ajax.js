function filterContent(contentID) {
    // display loading message
    document.getElementById("ajax-loading").style.opacity = 1;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            // set content to xmlhttp's response
            document.getElementById("content").innerHTML = this.responseText;

            // done!
            setTimeout(function(){document.getElementById("ajax-loading").style.opacity = 0; }, 50);
        }
    }

    xmlhttp.open("GET", "content.php?content=" + contentID, true);
    xmlhttp.send();
}
