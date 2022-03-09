import $ from "jquery";
import * as ScrollMagic from "scrollmagic"; // Or use scrollmagic-with-ssr to avoid server rendering problems
import { TweenMax, TimelineMax } from "gsap"; // Also works with TweenLite and TimelineLite
import { ScrollMagicPluginGsap } from "scrollmagic-plugin-gsap";
import './lib/sticky';
//Animation mouseMove Hero part
let currentX = '';
let currentY = '';
let movementConstant = .025; //值越大移動越大

$(document).mousemove(function(e) {
    if (currentX == '') currentX = e.pageX;
    var xdiff = e.pageX - currentX;
    currentX = e.pageX;
    if (currentY == '') currentY = e.pageY;
    var ydiff = e.pageY - currentY;
    currentY = e.pageY;

    $('.hero__title .hero__titleItem-1').each(function(i, el) {
        var movement = (i + 1) * (xdiff * movementConstant);
        var movementy = (i + 1) * (ydiff * movementConstant);
        var newX = $(el).position().left + movement;
        var newY = $(el).position().top + movementy;
        var cssObj = {
            'left': newX + 'px',
            'top': newY + 'px'
        };

        // $(el).css('left', newX + 'px');
        // $(el).css('top', newY + 'px');
        $(el).css({
            "transform": "translate(" + newX + "px," + newY + "px)"
        });
    });
    $('.hero__title .hero__titleItem-2').each(function(i, el) {
        var movement = (i + 1) * (xdiff * movementConstant);
        var movementy = (i + 1) * (ydiff * movementConstant);
        var newX = $(el).position().left + movement;
        var newY = $(el).position().top + movementy;
        var cssObj = {
            'left': newX + 'px',
            'top': newY + 'px'
        };

        // $(el).css('left', newX + 'px');
        // $(el).css('top', newY + 'px');
        $(el).css({
            "transform": "translate(" + newX + "px," + 0 + "px)"
        });
    });
    $('.hero__title .hero__titleItem-3').each(function(i, el) {
        var movement = (i + 1) * (xdiff * movementConstant);
        var movementy = (i + 1) * (ydiff * movementConstant);
        var newX = $(el).position().left + movement;
        var newY = $(el).position().top + movementy;
        var cssObj = {
            'left': newX + 'px',
            'top': newY + 'px'
        };

        // $(el).css('left', newX + 'px');
        // $(el).css('top', newY + 'px');
        $(el).css({
            "transform": "translate(" + 0 + "px," + newX + "px)"
        });
    });

    $('.hero__paragraphs').each(function(i, el) {
        var movement = (i + 1) * (xdiff * movementConstant);
        var movementy = (i + 1) * (ydiff * movementConstant);
        var newX = $(el).position().left + movement;
        var newY = $(el).position().top + movementy;
        var cssObj = {
            'left': newX + 'px',
            'top': newY + 'px'
        };

        // $(el).css('left', newX + 'px');
        // $(el).css('top', newY + 'px');
        $(el).css({
            "transform": "translate(" + newX + "px," + (newY / 80) + "px)"
        });
    });
    // $('.cls-1').each(function(i, el) {
    //     var movement = (i + 1) * (xdiff * movementConstant);
    //     var movementy = (i + 1) * (ydiff * movementConstant);
    //     var newX = $(el).position().left + movement;
    //     var newY = $(el).position().top + movementy;
    //     var cssObj = {
    //         'left': newX + 'px',
    //         'top': newY + 'px'
    //     };

    //     // $(el).css('left', newX + 'px');
    //     // $(el).css('top', newY + 'px');
    //     $(el).css({
    //         "transform": "translate(" + (newX - 390) + "px," + (newY * 0.1) + "px)"

    //     });
    // });
});


var frameNumber = 0, // start video at frame 0
    // lower numbers = faster playback
    playbackConst = 500,
    // get page height from video duration
    setHeight = document.getElementById("set-height"),
    // select video element         
    vid = document.getElementById('v0');
// var vid = $('#v0')[0]; // jquery option

// dynamically set the page height according to video length
vid.addEventListener('loadedmetadata', function() {
    setHeight.style.height = Math.floor(vid.duration) * playbackConst + "px";
});


// Use requestAnimationFrame for smooth playback
function scrollPlay() {
    var frameNumber = window.pageYOffset / playbackConst;
    vid.currentTime = frameNumber;
    window.requestAnimationFrame(scrollPlay);
}

window.requestAnimationFrame(scrollPlay);