window.addEventListener('load', function(){

    let App = {},
        slides = document.querySelectorAll('#slides .slide'),
        currentSlide = 0,
        next = document.getElementById('next'),
        previous = document.getElementById('previous'),
        controls = document.querySelectorAll('.controls'),
        el = document.getElementById('slides'),
        thumbnailsIcon = document.getElementById('thumbnailsIcon'),
        closeThumbNails = document.getElementById('closeThumbNails'),
        swipegallery = document.getElementById('swipegallery'),
        containerThumbnails = document.getElementById('container-thumbnails'),
        thumbnails = document.querySelectorAll('.thumbnail'),
        mobileNav = document.getElementById("mobile-nav__inner"),
        humIcon = document.getElementById("c-hamburger");

    App = {
        onTouch: (el, callback) => {
        let touchsurface = el,
        dir,
        swipeType,
        startX,
        startY,
        distX,
        distY,
        threshold = 150, //required min distance traveled to be considered swipe
        restraint = 100, // maximum distance allowed at the same time in perpendicular direction
        allowedTime = 500, // maximum time allowed to travel that distance
        elapsedTime,
        startTime,
        handletouch = callback || function(evt, dir, phase, swipetype, distance){}

        touchsurface.addEventListener('touchstart', (e) =>{
            let touchobj = e.changedTouches[0]
            dir = 'none'
            swipeType = 'none'
            dist = 0
            startX = touchobj.pageX
            startY = touchobj.pageY
            startTime = new Date().getTime() // record time when finger first makes contact with surface
            handletouch(e, 'none', 'start', swipeType, 0) // fire callback function with params dir="none", phase="start", swipetype="none" etc
            e.preventDefault()
     
        }, false)
     
        touchsurface.addEventListener('touchmove', (e) =>{
            let touchobj = e.changedTouches[0]
            distX = touchobj.pageX - startX // get horizontal dist traveled by finger while in contact with surface
            distY = touchobj.pageY - startY // get vertical dist traveled by finger while in contact with surface
            if (Math.abs(distX) > Math.abs(distY)){ // if distance traveled horizontally is greater than vertically, consider this a horizontal movement
                dir = (distX < 0)? 'left' : 'right'
                handletouch(e, dir, 'move', swipeType, distX) // fire callback function with params dir="left|right", phase="move", swipetype="none" etc
            }
            else{ // else consider this a vertical movement
                dir = (distY < 0)? 'up' : 'down'
                handletouch(e, dir, 'move', swipeType, distY) // fire callback function with params dir="up|down", phase="move", swipetype="none" etc
            }
            e.preventDefault() // prevent scrolling when inside DIV
        }, false)
     
        touchsurface.addEventListener('touchend', (e) =>{
            let touchobj = e.changedTouches[0]
            elapsedTime = new Date().getTime() - startTime // get time elapsed
            if (elapsedTime <= allowedTime){ // first condition for awipe met
                if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint){ // 2nd condition for horizontal swipe met
                    swipeType = dir // set swipeType to either "left" or "right"
                }
                else if (Math.abs(distY) >= threshold && Math.abs(distX) <= restraint){ // 2nd condition for vertical swipe met
                    swipeType = dir // set swipeType to either "top" or "down"
                }
            }
            // Fire callback function with params dir="left|right|up|down", phase="end", swipetype=dir etc:
            handletouch(e, dir, 'end', swipeType, (dir =='left' || dir =='right')? distX : distY)
            e.preventDefault()
            }, false)
        },
        nextSlide: () =>{
            App.goToSlide(currentSlide+1);
        },
        previousSlide: () =>{
            App.goToSlide(currentSlide-1);
        },
        goToSlide: (n) =>{
            slides[currentSlide].className = 'slide';
            currentSlide = (n+slides.length)%slides.length;
            slides[currentSlide].className = 'slide showing';
        },
        checkKey: (e) =>{
             e = e || window.event;

            if (e.keyCode == '38' || e.keyCode == '39' ) {
               App.nextSlide();
            }
            else if (e.keyCode == '40' || e.keyCode == '37' ) {
                App.previousSlide();
            }
        },
        hideShowToggle:(elHide, elShow)=>{
            elHide.classList.toggle("is--hidden");
            elShow.classList.toggle("is--visible");
        },
        toggleHeight:(elHide)=>{
            elHide.classList.toggle("is--height");
            elHide.classList.toggle("is--no-height");
        },
        toggleHandler:(toggle)=> {
          toggle.addEventListener( "click", function(e) {
            e.preventDefault();
            (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
          });
        }

    }; // End of App

    for (var i = 0;  i < thumbnails.length; i++) {
        (function(index){
            thumbnails[i].onclick = function(){
                for(var i = 0; i < slides.length; i++){
                    slides[i].className = 'slide';
                }
                App.hideShowToggle(swipegallery, containerThumbnails);
                slides[index].className = 'slide showing';
            }
        })(i);
    }
    thumbnailsIcon.onclick = () =>{
        App.hideShowToggle(swipegallery, containerThumbnails);
    };

    for(let i=0; i<controls.length; i++){
        controls[i].style.display = 'inline-block';
    }

    next.onclick = ()=>{
        App.nextSlide( );
    };

    humIcon.onclick = () =>{
        App.toggleHeight(mobileNav);
    };

    previous.onclick = ()=>{
        App.previousSlide();
    };

    App.toggleHandler(humIcon);

    App.onTouch(el, function(evt, dir, phase, swipetype, distance){
        if (phase == 'end'){ // on touchend
            if (swipetype == 'left' || swipetype == 'right'){ // if a successful left or right swipe is made
                (swipetype =='left' ? (console.log("next"), App.nextSlide()) : (console.log("previous"), App.previousSlide()))
            }
        }
    }) // end ontouch

    document.onkeydown = App.checkKey;

}, false);







