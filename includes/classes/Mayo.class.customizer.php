<?php
if ( class_exists( 'WP_Customize_Control') ) :
class MAYO_Social_Media_Customize_Control extends WP_Customize_Control {

    public $type = 'url';

    public $fa_string = 'fa fa-users';

    //render the control's content
    public function render_content()
    { ?>
        <label>
            <?php if ( ! empty( $this->label ) ) : ?>
                <span class="customize-control-title"><?php if ( ! empty($this->fa_string)) : ?><i class="<?php echo esc_html($this->fa_string) ?>"></i> <?php endif; ?><?php echo esc_html( $this->label ); ?></span>
            <?php endif;
            if ( ! empty( $this->description ) ) : ?>
                <span class="description customize-control-description"><?php echo $this->description; ?></span>
            <?php endif; ?>
            <input type="<?php echo esc_attr( $this->type ); ?>" <?php $this->input_attrs(); ?> value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> />
        </label>
    <?php }
}
endif;

