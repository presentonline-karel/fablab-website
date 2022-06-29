const showShareModal = () => {
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var close = document.getElementsByClassName("close")[0];

    var copyButton = document.getElementById("url");

    // When the user clicks on the share link, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    close.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // To copy the url
    function copyToClipboard() {
        var text = window.location.href;

        navigator.clipboard.writeText(text).then(function () {
            console.log('Async: Copying to clipboard was successful!');
        }, function (err) {
            console.error('Async: Could not copy text: ', err);
        });
    }

    copyButton.addEventListener("click", copyToClipboard());
}

showShareModal();