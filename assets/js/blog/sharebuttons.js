const shareButtons = () => {
    const facebookBtn = document.querySelector(".facebook-button");
    const twitterBtn = document.querySelector(".twitter-button");
    const whatsappBtn = document.querySelector(".whatsapp-button");

    function init(){
        let postUrl = encodeURI(document.location.href);
        let postTitle = encodeURI(document.querySelector(".h1").innerText);

    facebookBtn.setAttribute(
        "href",
        `https://www.facebook.com/sharer.php?u=${postUrl}`
    )
    twitterBtn.setAttribute(
        "href",
        `https://twitter.com/share?url=${postUrl}&text=${postTitle}`
    )
    whatsappBtn.setAttribute(
        "href",
        `https://api.whatsapp.com/send?text=${postTitle}    ${postUrl}`
    )
    }
    init();
}

shareButtons();