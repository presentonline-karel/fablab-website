const showCopiedMessage = () => {
    let modalBtn = document.getElementById("url");
    let modal = document.querySelector(".modal-copied");

    //When button copy link is clicked, show "link copied" for 1,25s
    modalBtn.onclick = function () {
        modal.style.display = "block";
        setTimeout(function(){ modal.style.display = "none"; } , 1250);
    }
}

showCopiedMessage();