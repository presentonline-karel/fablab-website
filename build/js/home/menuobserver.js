const menuObserver = () => {
    const nav = document.querySelector(".nav-fade");
    const sectionOne = document.querySelector(".sectionOne")

    // margin on top of sectionOne for when menu goes white on home
    const sectionOneOptions = {
        rootMargin: "-666px 0px 0px 0px"
    };

    const sectionOneObserver = new IntersectionObserver(function(
        entries,
        sectionOneObserver
    ) {
        entries.forEach(entry => {
            if(!entry.isIntersecting) {
                nav.classList.add('nav-scrolled'); //add white background
            } else {
                nav.classList.remove("nav-scrolled"); //remove white background
            }
        })
    },
    sectionOneOptions);

    sectionOneObserver.observe(sectionOne);
}

menuObserver();