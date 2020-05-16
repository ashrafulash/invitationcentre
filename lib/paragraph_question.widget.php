<?php 
namespace Elementor;
class Paragraph_question extends Widget_base{

    public function get_name() {
        return 'paragraph-question';
    }

	public function get_title() {
        return 'Paragraph Question';
    }

	public function get_icon() {
        return 'fas fa-parking';
    }

	public function get_categories() {
        return ['basic'];
    }

    

    protected function _register_controls() {
    /*----------------------------------------
        Register Controlls to Content Tab
    ------------------------------------------*/
        $this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'invitationcentre' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'question_no',
			[
				'label' => __( 'Question No', 'invitationcentre' ),
                'type' => Controls_Manager::TEXT,
                'default' => __('10', 'invitationcentre'),
				'placeholder' => __( '01', 'invitationcentre' ),
			]
        );

        $this->add_control(
			'title',
			[
				'label' => __( 'Title', 'invitationcentre' ),
                'type' => Controls_Manager::TEXT,
                'default' => __('Complete the passage with suitable connectors', 'invitationcentre'),
				'placeholder' => __( 'Complete the passage with suitable connectors', 'invitationcentre' ),
			]
        );

        $this->add_control(
			'mark',
			[
				'label' => __( 'Mark', 'invitationcentre' ),
                'type' => Controls_Manager::TEXT,
                'default' => __('1x5=5', 'invitationcentre'),
				'placeholder' => __( '1x5=5', 'invitationcentre' ),
			]
        );
        

        $this->add_control(
			'question',
			[
				'label' => __( 'Question', 'invitationcentre' ),
				'type' => Controls_Manager::TEXTAREA,
                'rows' => 15,
                'default' => __('Students have certain duties towards the country, (a)_____, they must', 'invitationcentre'),
				'placeholder' => __( 'Students have certain duties towards the country, (a)_____, they must', 'invitationcentre' ),
			]
		);

        $this->end_controls_section();
        
    /*----------------------------------------
        Register Controlls to Style Tab
    ------------------------------------------*/
    $this->start_controls_section(
        'style_section',
        [
            'label' => __( 'Content', 'invitationcentre' ),
            'tab' => Controls_Manager::TAB_STYLE,
        ]
    );

    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'title_typography',
            'label' => __( 'Title Typography', 'invitationcentre' ),
            'selector' => '{{WRAPPER}} .text',
        ]
    );

    $this->add_control(
        'title_color',
        [
            'label' => __( 'Title Color', 'invitationcentre' ),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Scheme_Color::get_type(),
                'value' => Scheme_Color::COLOR_1,
            ],
            'default' => '#101010',
            'selectors' => [
                '{{WRAPPER}} .title' => 'color: {{VALUE}}',
            ],
        ]
    );

    $this->add_control(
        'question_color',
        [
            'label' => __( 'Question Color', 'invitationcentre' ),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Scheme_Color::get_type(),
                'value' => Scheme_Color::COLOR_1,
            ],
            'default' => '#101010',
            'selectors' => [
                '{{WRAPPER}} .que' => 'color: {{VALUE}}',
            ],
        ]
    );


    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'content_typography',
            'label' => __( 'Question Typography', 'invitationcentre' ),
            'scheme' => Scheme_Typography::TYPOGRAPHY_2,
            'selector' => '{{WRAPPER}} .ques',
        ]
    );

    $this->end_controls_section();
    }
    
    /*----------------------------------------
        Show Controlls Output here
    ------------------------------------------*/ 
	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <table class="invQuestion">
                <tbody>
                    <tr>
                        <th class="invQuestion__no text title"><?php echo $settings['question_no'] ?></th>
                        <th class="invQuestion__title text title">
                            <span><?php echo $settings['title'] ?></span>
                            <span><?php echo $settings['mark'] ?></span>
                        </th>
                    </tr>
                    <tr>
                        <td class="invQuestion__no "></td>
                        <td class="invQuestion__question ques que"><?php echo $settings['question'] ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
    }

	protected function _content_template() {
        ?>
            <table class="invQuestion">
                <tbody>
                    <tr>
                        <th class="invQuestion__no text title">{{{settings.question_no}}}</th>
                        <th class="invQuestion__title text title ">
                            <span class="text text">{{{settings.title}}}</span>
                            <span>{{{settings.mark}}}</span>
                        </th>
                    </tr>
                    <tr>
                        <td class="invQuestion__no "></td>
                        <td class="invQuestion__question ques que">{{{settings.question}}}</td>
                    </tr>
                </tbody>
            </table>
        <?php
    }


}

Plugin::instance()->widgets_manager->register_widget_type( new Paragraph_question );

?>