// this funciton help to Voice start, pause, resume and stop
(function($) {
	$(document).ready(function() {
		responsiveVoice.cancel();
	})
	//error message 
	$('body').on("change, keypress", ".tts_container .Blog_Audio_text", function() {
		if ($(".Blog_Audio_msg .error").length) {
			$(".Blog_Audio_msg").html("");
		}
	});
	//Start voice playing
	$('body').on("click", ".play", function() {
		//Start voice playing from starting
		if (!responsiveVoice.isPlaying()) {
			var container = $(this).parent(".tts_container");
			var speak_words = $(".Blog_Audio_text", container).val();
			var voice = $(".Blog_Audio_voice", container).val();
			if (speak_words != '') {
				responsiveVoice.speak(speak_words, voice);
				if (responsiveVoice.isPlaying()) {
					console.log("I hope you are listening");
				}
			} else {
				$(".Blog_Audio_msg", container).html('<div class="error">Please write some blog.</div>');
			}
		} else {
			//resume the voice playing
			responsiveVoice.resume();
		}
	});
	//pause voice playing
	$('body').on("click", ".tts_container .pause", function() {
		if (responsiveVoice.isPlaying()) {
			responsiveVoice.pause();
		}
	});
	//Stop voice playing
	$('body').on("click", ".tts_container .stop", function() {
		if (responsiveVoice.isPlaying()) {
			responsiveVoice.cancel();
		}
	});
})(jQuery);