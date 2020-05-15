<?php 
namespace Elementor;
class FirstWid extends Widget_base{

	public function get_name() {
        return 'first-widget';
    }

	public function get_title() {
        return 'First Widget';
    }

	public function get_icon() {
        return 'fab fa-foursquare';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function _register_controls() {

        // section one
		$this->start_controls_section(
			'widget_Id_1',
			[
				'label' => __( 'Student List', 'invitationcentre' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'url',
			[
				'label' => __( 'Add Profile URL', 'invitationcentre' ),
				'type' => Controls_Manager::TEXT,
				'input_type' => 'url',
				'placeholder' => __( 'https://your-link.com', 'plugin-name' ),
			]
        );
        $this->end_controls_section();
        
        // section two
		$this->start_controls_section(
			'widget_Id_2',
			[
				'label' => __( 'Student GPA', 'invitationcentre' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'url2',
			[
				'label' => __( 'GPA ADD', 'invitationcentre' ),
				'type' => Controls_Manager::TEXT,
				'input_type' => 'url',
				'placeholder' => __( 'https://your-link.com', 'plugin-name' ),
			]
        );

        $this->add_control(
			'open_lightbox',
			[
				'label' => __( 'Lightbox', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'default' => __( 'Default', 'plugin-name' ),
					'yes' => __( 'Yes', 'plugin-name' ),
					'no' => __( 'No', 'plugin-name' ),
				],
				'default' => 'default',
			]
		);






        $this->end_controls_section();
        
        // section three
		$this->start_controls_section(
			'widget_Id_3',
			[
				'label' => __( 'Style List', 'invitationcentre' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->end_controls_section();

    }
    

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <h3><?php echo $settings['url'] ?></h3>
            <p><?php  echo $settings['open_lightbox'] ?></p>

        <?php
    }

    protected function _content_template() {
        ?>
        <h3 class="{{{ settings.url }}}">{{{ settings.url }}}</h3>
        <h3 class="{{{ settings.open_lightbox }}}">{{{ settings.open_lightbox }}}</h3>
        <?php
    }



}

Plugin::instance()->widgets_manager->register_widget_type( new FirstWid );

?>