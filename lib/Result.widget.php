<?php 
namespace Elementor;
class Result extends Widget_base{

	public function get_name() { return 'result'; }

	public function get_title() { return 'Result Table'; }

	public function get_icon() { return 'fas fa-list-ol'; }

	public function get_categories() { return ['basic']; }
    /*----------------------------------
        Register Controll into Widget
	------------------------------------*/ 
	
	protected function _register_controls() {

    /*----------------------------------
        Result List Section
    ------------------------------------*/ 
        $this->start_controls_section(
			'result_table',
			[
				'label' => __( 'Result List', 'invitationcentre' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
        );
        


		$repeater = new Repeater();

		$repeater->add_control(
			'result_ranking', [
				'label' => __( 'Position', 'invitationcentre' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( '01' , 'invitationcentre' ),
				'label_block' => true,
			]
		);


		$repeater->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'invitationcentre' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				]
			]
		);


		$repeater->add_control(
			'student_name', [
				'label' => __( 'Name', 'invitationcentre' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( '01' , 'invitationcentre' ),
				'label_block' => true,
			]
		);


		$repeater->add_control(
			'class', [
				'label' => __( 'Class', 'invitationcentre' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'XI' , 'invitationcentre' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'result', [
				'label' => __( 'Result', 'invitationcentre' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( '100%' , 'invitationcentre' ),
				'label_block' => true,
			]
		);


		$this->add_control(
			'list',
			[
				'label' => __( 'Student Result List', 'invitationcentre' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'result_ranking' => __( '01', 'invitationcentre' ),
						'student_name' => __('Ashraful Islam', 'invitationcentre'),
						'class' => __('XI', 'invitationcentre'),
						'result' => __('100%', 'invitationcentre'),
					],
				],
				'title_field' => '{{{ result_ranking }}}',
			]
		);


        $this->end_controls_section();
        
    
    }



    /*----------------------------------
        Display Controll Inputs
    ------------------------------------*/ 
	protected function render() {
		$settings = $this->get_settings_for_display();

		if ( $settings['list'] ) {
			?>
			<div class="invResult">
			<ul class="invResult__item invResult__header">
					<li class="invResult__item__rank">No.</li>
					<li class="invResult__item__name">
						<img src="" alt="">
						<span>Student Name</span>
					</li>
					<li class="invResult__item__class">Class</li>
					<li class="invResult__item__result">Result</li>
			</ul>
			
			<?php
			foreach (  $settings['list'] as $item ) {
				?>
				<ul class="invResult__item" <?php echo 'id="result_id_' . $item['_id'] . '"'; ?>>
					<li class="invResult__item__rank"><?php echo $item['result_ranking'] ?></li>
					<li class="invResult__item__name">
						<?php
							if($item['image']['url']){
								?>
									<img src="<?php echo $item['image']['url'] ?>" alt="result Image">
								<?php
							}
						?>
						
						<span><?php echo $item['student_name'] ?></span>
					</li>
					<li class="invResult__item__class"><?php echo $item['class'] ?></li>
					<li class="invResult__item__result"><?php echo $item['result'] ?></li>
				</ul>
					
				<?php
			}
			?>
			</div> <!-- end of invResult div -->
			<?php
		}
	}

	protected function _content_template() {
		?>
		<# if ( settings.list.length ) { #>
			<div class="invResult">
			<ul class="invResult__item invResult__header">
					<li class="invResult__item__rank">No.</li>
					<li class="invResult__item__name">
						<img src="" alt="">
						<span>Student Name</span>
					</li>
					<li class="invResult__item__class">Class</li>
					<li class="invResult__item__result">Result</li>
			</ul>
			<# _.each( settings.list, function( item ) { #>
			
				<ul class="invResult__item" id="result_id_{{ item._id }}">
					<li class="invResult__item__rank">{{{ item.result_ranking }}}</li>
					<li class="invResult__item__name">
						<img src="{{ item.image.url }}" alt="result Image">
						<span>{{{ item.student_name }}}</span>
					</li>
					<li class="invResult__item__class">{{{ item.class }}}</li>
					<li class="invResult__item__result">{{{ item.result }}}</li>
				</ul>

			<# }); #>
			</div>
		<# } #>
		<?php
	}


}

Plugin::instance()->widgets_manager->register_widget_type( new Result );

?>