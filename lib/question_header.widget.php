<?php 
namespace Elementor;
class Question_header extends Widget_base{

    public function get_name() {
        return 'question-header';
    }

	public function get_title() {
        return 'Question Header';
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
				'label' => __( 'Exam Details', 'invitationcentre' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'institution',
			[
				'label' => __( 'Institution', 'invitationcentre' ),
                'type' => Controls_Manager::TEXT,
                'default' => __('INVITATION ENGLISH COACHING CENTRE', 'invitationcentre'),
				'placeholder' => __( 'Institution Name', 'invitationcentre' ),
			]
        );

        $this->add_control(
			'subject',
			[
				'label' => __( 'Subject', 'invitationcentre' ),
                'type' => Controls_Manager::TEXT,
                'default' => __('English 2nd Paper', 'invitationcentre'),
				'placeholder' => __( 'Subject Name', 'invitationcentre' ),
			]
        );

        $this->add_control(
			'class',
			[
				'label' => __( 'Class', 'invitationcentre' ),
                'type' => Controls_Manager::TEXT,
                'default' => __('Class XII', 'invitationcentre'),
				'placeholder' => __( 'Enter Class', 'invitationcentre' ),
			]
        );

        $this->add_control(
			'time',
			[
				'label' => __( 'Time', 'invitationcentre' ),
                'type' => Controls_Manager::TEXT,
                'default' => __('1 Hour', 'invitationcentre'),
				'placeholder' => __( 'Exam Duration', 'invitationcentre' ),
			]
        );

        $this->add_control(
			'date',
			[
				'label' => __( 'Exam Date', 'invitationcentre' ),
                'type' => Controls_Manager::TEXT,
                'default' => __('12.12.2020', 'invitationcentre'),
				'placeholder' => __( 'Exam Date', 'invitationcentre' ),
			]
        );

        $this->add_control(
			'marks',
			[
				'label' => __( 'Total Marks', 'invitationcentre' ),
                'type' => Controls_Manager::TEXT,
                'default' => __('100', 'invitationcentre'),
				'placeholder' => __( 'Total Marks', 'invitationcentre' ),
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
            <div class="invHeader">
                <h1 class="invHeader__institution"><?php echo $settings['institution'] ?></h1>
                <h4 class="invHeader__subject"><?php echo $settings['subject'] ?></h4>
                <h4 class="invHeader__class"><?php echo $settings['class'] ?></h4>
                <div class="invHeader__meta">
                    <span>Time : <?php echo $settings['time'] ?></span>
                    <span>Date : <?php echo $settings['date'] ?></span>
                    <span>Marks : <?php echo $settings['marks'] ?></span>
                </div>
            </div>
        <?php
    }

	protected function _content_template() {
        ?>

            <div class="invHeader">
                <h1 class="invHeader__institution">{{{settings.institution}}}</h1>
                <h4 class="invHeader__subject">{{{settings.subject}}}</h4>
                <h4 class="invHeader__class">{{{settings.date}}}</h4>
                <div class="invHeader__meta">
                    <span>Time : {{{settings.time}}}</span>
                    <span>Date : {{{settings.date}}}</span>
                    <span>Marks : {{{settings.marks}}}</span>
                </div>
            </div>
        
        <?php
    }


}

Plugin::instance()->widgets_manager->register_widget_type( new Question_header );

?>