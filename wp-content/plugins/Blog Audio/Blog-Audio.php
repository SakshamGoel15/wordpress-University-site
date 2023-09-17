<?php
/*
Plugin Name: Blog Audio
Description: This widget help to convert the Blog into audio
Author:      Saksham Goel  
*/
/**
 * Name:- Saksham Goel
 * UFID:- 92792975
 * Email:- goelsaksham@ufl.edu
 */

/**
 * Class Blog_Audio widget.
 */
class Blog_Audio extends WP_Widget
{
    /**
     * Register widget with WordPress.
     */
    function __construct()
    {
        parent::__construct(
            "Blog_Audio", // Base ID
            __("Blog Audio", "Blog-Audio"), // Name
            ["description" => __("Converts text to spech", "Blog-Audio")] // Args
        );
    }
    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        // Check if we are on a single post page
        if (is_single()) {
            // Get the post content
            $post_content = strip_tags(get_the_content());
           // echo "Hey". esc_html($post_content);
    
            // Enqueue styles and scripts
            wp_enqueue_style("Style");
            wp_enqueue_script("responsivevoice");
            wp_enqueue_script("voice");
    
            echo $args["before_widget"];
            echo '<div class="tts_container">';
            echo '<textarea style="display:none" name="Blog_Audio_text" class="Blog_Audio_text" placeholder="Write text which you would like to speak">' .
                esc_html($post_content) . // Output the post content here
                "</textarea>";
            echo '<select style="display:none" disabled="true" class="Blog_Audio_voice" value="US English Female">US English Female </select>';
            echo '<div class="Blog_Audio_msg"></div>';
        //Display Play buttom
        echo '<span class="play" >
		<div class="wrapper">
			<div class="icon blog">
			<div class="tooltip">Play</div>
			<span type="button" ><i class="far fa-play-circle"></i></span>
			</div>
	    </div>
		</span>';
        //Display Pause buttom
        echo '<span class="pause" >
		    <div class="wrapper">
			<div class="icon blog">
			<div class="tooltip">Pause</div>
			<span type="button"><i class="far fa-pause-circle"></i></span>
			</div>
	    </div>
		</span>';
        //Display Stop buttom
        echo '<span class="stop" >
			<div class="wrapper">
			<div class="icon blog">
			<div class="tooltip">Stop</div>
			<span type="button"  ><i class="far fa-stop-circle"></i></span>
			</div>
		</div>
		</span>';
        echo "</div>";
        echo $args["after_widget"];
    }
    }
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        $title = !empty($instance["title"]) ? $instance["title"] : __(""); ?>
		<p>
		<label for="<?php echo $this->get_field_id(
      "title"
  ); ?>"><?php _e("Write your blog post here:"); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id(
      "title"
  ); ?>" name="<?php echo $this->get_field_name("title"); ?>" type="text" value="<?php echo esc_attr($title); ?>">
	</p>
		<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance["title"] = !empty($new_instance["title"])
            ? strip_tags($new_instance["title"])
            : "";

        return $instance;
    }
}
add_action("wp_enqueue_scripts", "font_awesome");

function font_awesome()
{
    wp_enqueue_style(
        "custom-fa",
        "https://use.fontawesome.com/releases/v5.0.6/css/all.css"
    );
}

// class Blog_Audio
function register_Blog_Audio()
{
    register_widget("Blog_Audio");
}
add_action("widgets_init", "register_Blog_Audio");

function Blog_Audio_scripts()
{
    //get some external script that is needed for this script

    wp_register_style("Style", plugins_url("Style_css/Style.css", __FILE__));
    wp_register_script(
        "voice",
        plugins_url("Javascript/speak.js", __FILE__),
        ["jquery", "responsivevoice"],
        "1.0",
        false
    );
    wp_register_script(
        "responsivevoice",
        plugins_url("Javascript/responsivevoice.js", __FILE__),
        ["jquery"],
        "1.4.7",
        false
    );
}
add_action("wp_enqueue_scripts", "Blog_Audio_scripts");
