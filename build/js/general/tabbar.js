const tabbar = () => {
    let tabHeader = document.querySelector(".tabscontainer__tabs__tabheader");
    let tabBody = document.querySelector(".tabscontainer__tabs__tabbody");
    let tabsPane = tabHeader.getElementsByTagName("div");

    let indicator = document.querySelector(".tabindicator");
    let tabIndicatorHome;
    let tabIndicatorContact;

    //If it finds the home tabbar, else the contact tabbar
    if(indicator.classList.contains('tabscontainer__tabs__tabindicatorhome')) {
        tabIndicatorHome = document.querySelector(".tabscontainer__tabs__tabindicatorhome");
    } else {
        tabIndicatorContact = document.querySelector(".tabscontainer__tabs__tabindicatorcontact");
    }



    var activeClass = "active";



    //Add class active to first body of accessibility tab body
    var j = 0;
    var allDescriptions = document.querySelectorAll(".tabscontainer__tabs__tabbody__item");
    allDescriptions[j].classList.add(activeClass);



    //To change active tab
    for(let i=0; i < tabsPane.length; i++) {
        tabsPane[i].addEventListener("click", function() {
            tabHeader.querySelector("." + activeClass).classList.remove(activeClass);
            tabsPane[i].classList.add(activeClass);

            tabBody.querySelector("." + activeClass).classList.remove(activeClass);
            tabBody.getElementsByClassName("tabscontainer__tabs__tabbody__item")[i].classList.add(activeClass);



            if(typeof tabIndicatorHome === 'undefined') {
                //do nothing
            } else {
                // divide by how many tabs
                tabIndicatorHome.style.left = `calc(calc(100% / 2) * ${i})`;
            }

            if(typeof tabIndicatorContact === 'undefined') {
                //do nothing
            } else {
                // divide by how many tabs
                tabIndicatorContact.style.left = `calc(calc(100% / 4) * ${i})`;
            }
        });
    }
}



tabbar();