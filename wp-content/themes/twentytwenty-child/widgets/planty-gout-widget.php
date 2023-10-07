<?php

/**
 * Widget displaying the name of a flavour
 * on a background image of assorted fruit
 */
class Planty_Gout_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'planty_gout_widget',
            'Widget Gout Fruit',
            array('description' => __('Widget décrivant un parfum fruité', 'text_domain'))
       );
    }

    /**
     * Front-end display of widget.
     */
    public function widget($args, $instance) {
        extract($args);
        $title = $instance['title'];
        // Size of text in em unit
        $textSize = $instance['text_size'];
        $urlImage = $instance['url_image'];

        echo $before_widget;

        // All the widget parameters are mandatory
        if (!empty($title) && !empty($textSize) && !empty($urlImage)) {
            ?>
            <div class="planty-gout-widget">
                <img 
                    src="<?= $urlImage ?>" 
                    alt="<?= $title ?>"
                >
                <div class="title"
                    style="font-size: <?= $textSize ?>em;"
                >
                    <?= $title ?>
                </div>
            </div>
            <?php
        }

        echo $after_widget;
    }

    /**
     * Back-end widget form.
     */
    public function form($instance) {
        if (isset($instance[ 'title' ])) {
            $title = $instance[ 'title' ];
        } else { $title = ""; }
        if (isset($instance[ 'text_size' ])) {
            $textSize = $instance[ 'text_size' ];
        } else { $textSize = "1"; }
        if (isset($instance[ 'url_image' ])) {
            $urlImage = $instance[ 'url_image' ];
        } else { $urlImage = ""; }
        ?>
        <p>
            <label 
                for="<?= $this->get_field_name('title'); ?>">
                Nom du goût
            </label>
            <input class="widefat" 
                id="<?= $this->get_field_id('title'); ?>" 
                name="<?= $this->get_field_name('title'); ?>" 
                type="text" 
                value="<?= esc_attr($title); ?>"
            >
        </p>
        <p>
            <label 
                for="<?= $this->get_field_name('text_size'); ?>">
                Taille du texte (en em)
            </label>
            <input class="widefat" 
                id="<?= $this->get_field_id('text_size'); ?>" 
                name="<?= $this->get_field_name('text_size'); ?>" 
                type="text"
                value="<?= esc_attr($textSize); ?>"
            >
        </p>
        <p>
            <label 
                for="<?= $this->get_field_name('url_image'); ?>">
                Url de l'image
            </label>
            <input class="widefat" 
                id="<?= $this->get_field_id('url_image'); ?>" 
                name="<?= $this->get_field_name('url_image'); ?>"
                type="text"
                value="<?= esc_attr($urlImage); ?>"
            >
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();

        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['text_size'] = (!empty($new_instance['text_size'])) ? strip_tags($new_instance['text_size']) : '1';
        $instance['url_image'] = (!empty($new_instance['url_image'])) ? strip_tags($new_instance['url_image']) : '';

        return $instance;
    }
}

?>