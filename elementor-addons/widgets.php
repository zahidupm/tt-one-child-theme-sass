<?php

// query child theme css
function zahid_child_theme_styles() {
    wp_enqueue_style( 'child-style', get_template_directory_uri() . '/style.css',  array());
}
add_action( 'wp_enqueue_scripts', 'zahid_child_theme_styles');

//child stylesheet enqueue
//function zahid_child_theme_styles() {
//wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0');
//}
//add_action( 'wp_enqueue_scripts', 'zahid_child_theme_styles' );
class ZAHID_Team_Members extends \Elementor\Widget_Base

{

    public function get_name()
    {
        return 'zahid_hello_world';
    }

    public function get_title()
    {
        return esc_html__('Hello World', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['hello', 'world'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'Content',
            [
                'label' => esc_html__('Content', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Zahid Hasan', 'elementor-addon'),
            ]
        );
        $this->add_control(
            'designation',
            [
                'label' => esc_html__('Designation', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Web Developer', 'elementor-addon'),
            ]
        );
        $this->add_control(
            'photo',
            [
                'label' => esc_html__('Photo', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        // Add the Repeater field
        $this->add_control(
            'social_links',
            [
                'label' => esc_html__('Social Links', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'icon', // Name of the sub-control
                        'label' => esc_html__('Icon', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => '',
                    ],
                    [
                        'name' => 'link', // Name of the sub-control
                        'label' => esc_html__('Link', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::URL,
                    ],
                    // Add more sub-controls as needed
                ],
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => esc_html__('Style', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'style1',
                'options' => [
                    'style1' => esc_html__('Style 1', 'elementor-addon'),
                    'style2' => esc_html__('Style 2', 'elementor-addon'),
                ]
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
<!--            --><?php //echo var_dump($settings); ?>

        <div class="zahid-team-member">
            <div class="zahid-team-member-photo">
                <?php if(array_key_exists('photo', $settings) && !empty($settings['photo'])) : ?>
                    <?php echo wp_get_attachment_image($settings['photo']['id'], 'large'); ?>
                <?php endif; ?>
            </div>

<!--            <div class="zahid-team-member-content">-->
<!--                <h3>--><?php //echo $settings['title']; ?><!--</h3>-->
<!--                --><?php //if (array_key_exists('designation', $settings) && !empty($settings['designation'])) : ?>
<!--                    <p>--><?php //echo $settings['designation']; ?><!--</p>-->
<!--                --><?php //endif; ?>
<!---->
<!--                <div class="social-links">-->
<!--                    --><?php //if (array_key_exists('social_links', $settings) && is_array($settings['social_links'])) : ?>
<!--                        --><?php //foreach ($settings['social_links'] as $link): ?>
<!--                            --><?php //if (array_key_exists('icon', $link) && !empty($link['icon']['value'])): ?>
<!--                                <a href="--><?php //echo $link['url']['url']; ?><!--"><i class="--><?php //echo $link['icon']['value']; ?><!--"></i></a>-->
<!--                            --><?php //endif; ?>
<!--                        --><?php //endforeach; ?>
<!--                    --><?php //endif; ?>
<!--                </div>-->
<!--            </div>-->

            <div class="zahid-team-member-content">
                <h3><?php echo $settings['title']; ?></h3>
                <?php if (array_key_exists('designation', $settings) && !empty($settings['designation'])) : ?>
                    <p><?php echo $settings['designation']; ?></p>
                <?php endif; ?>

                <div class="social-links">
                    <?php if (array_key_exists('social_links', $settings) && is_array($settings['social_links'])) : ?>
                        <?php foreach ($settings['social_links'] as $link): ?>
                            <?php if (isset($link['icon']) && !empty($link['icon']['value'])): ?>
                                <a href="<?php echo isset($link['url']) ? $link['url'] : '#'; ?>" target="_blank">
                                    <i class="<?php echo $link['icon']['value']; ?>"></i>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>


        <?php
    }
}


class Hover_Team_Members extends \Elementor\Widget_Base

{

    public function get_name()
    {
        return 'zahid_hello_world';
    }

    public function get_title()
    {
        return esc_html__('Hover Team Members', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['hello', 'world'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'Content',
            [
                'label' => esc_html__('Content', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Zahid Hasan', 'elementor-addon'),
            ]
        );
        $this->add_control(
            'designation',
            [
                'label' => esc_html__('Designation', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Web Developer', 'elementor-addon'),
            ]
        );
        $this->add_control(
            'photo',
            [
                'label' => esc_html__('Photo', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        // Add the Repeater field
        $this->add_control(
            'icon_list',
            [
                'label' => esc_html__('Icon List', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'icon', // Name of the sub-control
                        'label' => esc_html__('Icon', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => '',
                    ],
                    [
                        'name' => 'text', // Name of the sub-control
                        'label' => esc_html__('Text', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'link', // Name of the sub-control
                        'label' => esc_html__('Link', 'elementor-addon'),
                        'type' => \Elementor\Controls_Manager::URL,
                    ],
                    // Add more sub-controls as needed
                ],
            ]
        );


        $this->add_control(
            'desc',
            [
                'label' => esc_html__('Desc', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>

        <div class="single-team-member">
            <div class="single-team-member-inner">
                <div class="team-member-front">
                    <div class="team-member-image">
                        <img src="<?php echo wp_get_attachment_image_url($settings['photo']['id'])?>" alt="">
                    </div>

                    <div class="team-member-info">
                        <h3><?php echo $settings['title']?></h3>
                        <p><?php echo $settings['designation']?></p>
                    </div>
                </div>

                <div class="team-member-hover">
                    <div class="team-member-info">
                        <h3><?php echo $settings['title']?></h3>
                        <p><?php echo $settings['designation']?></p>
                    </div>

                    <div class="team-member-meta">
                        <?php foreach ($settings['icon_list'] as $item) : ?>
                        <p>
                            <span>
                                <?php \Elementor\Icons_Manager::render_icon($item['icon'],['aria-hidden' => 'true']); ?>
                            </span>
                            <?php echo $item['text']; ?>
                        </p>
                        <?php endforeach; ?>
                    </div>
                    <div class="team-member-datails">
                        <?php echo wpautop($settings['desc']); ?>
                    </div>
                </div>
            </div>
        </div>


        <?php
    }
}
