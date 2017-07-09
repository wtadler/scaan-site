function timeline_height() {
    var project_h=document.getElementById('project-section').clientHeight;
    var facebook_h=document.getElementById('facebook-twitter-header').clientHeight; // block incl fb widget and text
    var fb_h = document.getElementById("fb-widget").clientHeight;
    if (fb_h < 100) { // if facebook widget hasn't loaded yet, it will be short. compensate for expected height difference.
    	// better solution would be only to run the function when the fb widget has fully loaded
    	facebook_h = facebook_h + 106;
    }
    var twitter_h=Math.max(project_h-facebook_h-8, 250);
    document.getElementById('twitter-widget-0').setAttribute("style","height:"+twitter_h+"px");
}

window.onload = timeline_height;
