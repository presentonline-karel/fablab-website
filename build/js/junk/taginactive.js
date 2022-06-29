const tagInactive = () => {
    const tag = document.getElementById("remove-tag");

    //When clicking remove tag button, redirect to normal blog page
    tag.addEventListener("click", () => {
        window.location.href = "https://fablab.karel.decoene.nxtmediatech.eu/blog";
    })
}

tagInactive();