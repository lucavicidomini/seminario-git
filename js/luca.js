/**
 * Plays a video set as background-iframe when the slide is shown, then pauses
 * it when the slide is hid. The function has two requirements:
 *  1. Slides with iframe background must have data-state="iframevideo"
 *     attribute.
 *  2. Slide with iframe background must have a UNIQUE css-class. Then, for
 *     each of these slide, you need to call:
 *     playPauseBgIframe("uniqueCssClass").
 * 
 * Known limitations:
 *  - QUICK AND DIRT
 *  - Only tested on Chrome (but compatibility should be easy to implement)
 *  - Only works for YouTube player (requires enablejsapi=1parameter)
 *  - Not optimized for a lot of slides with video background
 *  - Doesn't work when the presentation is loaded (or refreshed) on a slide
 *    that has a video iframe as background
 *
 * @author Luca Vicidomini https://github.com/lucavicidomini
 * @param  string className A unique css class assigned to the slide
 *                          containing the background video iframe
 * @return void
 */
function playPauseBgIframe( className ) {
	Reveal.addEventListener( 'iframevideo', function(event) {
		Reveal.addEventListener( 'slidechanged', function(event) {
			if ("iframevideo" == event.currentSlide.getAttribute("data-state")) {
				var div = document.getElementsByClassName("slide-background " + className)[0];
				var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
				iframe.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
			} else {
				var div = document.getElementsByClassName("slide-background " + className)[0];
				var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
				iframe.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
				this.removeEventListener('slidechanged', arguments.callee, false);
			}
		});
	});
};