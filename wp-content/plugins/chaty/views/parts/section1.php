<div class="preview">
    <h2><?php _e('Preview', CHT_OPT); ?>:</h2>

    <div class="page">
        <div class="page-header">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <svg width="33" height="38" viewBox="0 0 33 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                    <ellipse cx="0.855225" cy="0.745508" rx="0.855225" ry="0.745508"
                             transform="translate(15.6492 13.0053) scale(1 -1)" fill="#828282"/>
                </g>
                <g filter="url(#filter1_d)">
                    <ellipse cx="0.855225" cy="0.745508" rx="0.855225" ry="0.745508"
                             transform="translate(15.6492 15.6891) scale(1 -1)" fill="#828282"/>
                </g>
                <g filter="url(#filter2_d)">
                    <ellipse cx="0.855225" cy="0.745508" rx="0.855225" ry="0.745508"
                             transform="translate(15.6492 18.373) scale(1 -1)" fill="#828282"/>
                </g>
                <defs>
                    <filter id="filter0_d" x="0.64917" y="0.514328" width="31.7105" height="31.491"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix"
                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 255 0"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="7.5"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                    <filter id="filter1_d" x="0.64917" y="3.1981" width="31.7105" height="31.491"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix"
                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 255 0"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="7.5"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                    <filter id="filter2_d" x="0.64917" y="5.88202" width="31.7105" height="31.491"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix"
                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 255 0"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="7.5"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                    </filter>
                </defs>
            </svg>
        </div>


        <?php $position = $this->get_position_style(); ?>
        <div class="page-body">
            <div class="chaty-widget chaty-widget-icons-<?php if (get_option('cht_position') == "custom") {
                echo get_option('positionSide');
            } else {
                echo get_option('cht_position');
            } ?>  " style="<?php echo $position; ?>">
                <div class="icon icon-xs active tooltip-show tooltip"
                     data-title="<?php echo(get_option('cht_cta') ? get_option('cht_cta') : __('Contact Us')) ?>">
                    <i id="iconWidget">
                        <?php $bg_color = $this->get_current_color(); ?>
                        <?php $widgetIcon = esc_attr(get_option('widget_icon')); ?>
                        <?php if (esc_attr(get_option('widget_icon')) == 'chat-base'): ?>
                            <svg version="1.1" id="ch" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-496 507.7 54 54"
                                 style="enable-background:new -496 507.7 54 54;" xml:space="preserve">
                            <style type="text/css">.st1 {
                                    fill: #FFFFFF;
                                }

                                .st0 {
                                    fill: #808080;
                                }</style>
                                <g>
                                    <circle cx="-469" cy="534.7" r="27"
                                            fill="<?php echo ($bg_color) ? $bg_color : '#A886CD'; ?>"/>
                                </g>
                                <path class="st1"
                                      d="M-459.9,523.7h-20.3c-1.9,0-3.4,1.5-3.4,3.4v15.3c0,1.9,1.5,3.4,3.4,3.4h11.4l5.9,4.9c0.2,0.2,0.3,0.2,0.5,0.2 h0.3c0.3-0.2,0.5-0.5,0.5-0.8v-4.2h1.7c1.9,0,3.4-1.5,3.4-3.4v-15.3C-456.5,525.2-458,523.7-459.9,523.7z"/>
                                <path class="st0"
                                      d="M-477.7,530.5h11.9c0.5,0,0.8,0.4,0.8,0.8l0,0c0,0.5-0.4,0.8-0.8,0.8h-11.9c-0.5,0-0.8-0.4-0.8-0.8l0,0C-478.6,530.8-478.2,530.5-477.7,530.5z"/>
                                <path class="st0"
                                      d="M-477.7,533.5h7.9c0.5,0,0.8,0.4,0.8,0.8l0,0c0,0.5-0.4,0.8-0.8,0.8h-7.9c-0.5,0-0.8-0.4-0.8-0.8l0,0C-478.6,533.9-478.2,533.5-477.7,533.5z"/>
                            </svg>
                        <?php endif; ?>
                        <?php if (esc_attr(get_option('widget_icon')) == 'chat-smile'): ?>
                            <svg version="1.1" id="smile" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-496.8 507.1 54 54"
                                 style="enable-background:new -496.8 507.1 54 54;" xml:space="preserve">
                                        <style type="text/css">.st1 {
                                                fill: #FFFFFF;
                                            }

                                            .st2 {
                                                fill: none;
                                                stroke: #808080;
                                                stroke-width: 1.5;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                            }</style>
                                <g>
                                    <circle cx="-469.8" cy="534.1" r="27"
                                            fill="<?php echo ($bg_color) ? $bg_color : '#A886CD'; ?>"/>
                                </g>
                                <path class="st1"
                                      d="M-459.5,523.5H-482c-2.1,0-3.7,1.7-3.7,3.7v13.1c0,2.1,1.7,3.7,3.7,3.7h19.3l5.4,5.4c0.2,0.2,0.4,0.2,0.7,0.2 c0.2,0,0.2,0,0.4,0c0.4-0.2,0.6-0.6,0.6-0.9v-21.5C-455.8,525.2-457.5,523.5-459.5,523.5z"/>
                                <path class="st2" d="M-476.5,537.3c2.5,1.1,8.5,2.1,13-2.7"/>
                                <path class="st2" d="M-460.8,534.5c-0.1-1.2-0.8-3.4-3.3-2.8"/>
                                    </svg>
                        <?php endif; ?>
                        <?php if (esc_attr(get_option('widget_icon')) == 'chat-bubble'): ?>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-496.9 507.1 54 54"
                                 style="enable-background:new -496.9 507.1 54 54;" xml:space="preserve">
<style type="text/css">.st1 {
        fill: #FFFFFF;
    }</style>
                                <g>
                                    <circle cx="-469.9" cy="534.1" r="27"
                                            fill="<?php echo ($bg_color) ? $bg_color : '#A886CD'; ?>"/>
                                </g>
                                <path class="st1" d="M-472.6,522.1h5.3c3,0,6,1.2,8.1,3.4c2.1,2.1,3.4,5.1,3.4,8.1c0,6-4.6,11-10.6,11.5v4.4c0,0.4-0.2,0.7-0.5,0.9
    c-0.2,0-0.2,0-0.4,0c-0.2,0-0.5-0.2-0.7-0.4l-4.6-5c-3,0-6-1.2-8.1-3.4s-3.4-5.1-3.4-8.1C-484.1,527.2-478.9,522.1-472.6,522.1z
	 M-462.9,535.3c1.1,0,1.8-0.7,1.8-1.8c0-1.1-0.7-1.8-1.8-1.8c-1.1,0-1.8,0.7-1.8,1.8C-464.6,534.6-463.9,535.3-462.9,535.3z
	 M-469.9,535.3c1.1,0,1.8-0.7,1.8-1.8c0-1.1-0.7-1.8-1.8-1.8c-1.1,0-1.8,0.7-1.8,1.8C-471.7,534.6-471,535.3-469.9,535.3z
	 M-477,535.3c1.1,0,1.8-0.7,1.8-1.8c0-1.1-0.7-1.8-1.8-1.8c-1.1,0-1.8,0.7-1.8,1.8C-478.8,534.6-478.1,535.3-477,535.3z"/>
</svg>

                        <?php endif; ?>

                        <?php if (esc_attr(get_option('widget_icon')) == 'chat-db'): ?>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-496 507.1 54 54"
                                 style="enable-background:new -496 507.1 54 54;" xml:space="preserve">
<style type="text/css">.st1 {
        fill: #FFFFFF;
    }</style>
                                <g>
                                    <circle cx="-469" cy="534.1" r="27"
                                            fill="<?php echo ($bg_color) ? $bg_color : '#A886CD'; ?>"/>
                                </g>
                                <path class="st1" d="M-464.6,527.7h-15.6c-1.9,0-3.5,1.6-3.5,3.5v10.4c0,1.9,1.6,3.5,3.5,3.5h12.6l5,5c0.2,0.2,0.3,0.2,0.7,0.2
	c0.2,0,0.2,0,0.3,0c0.3-0.2,0.5-0.5,0.5-0.9v-18.2C-461.1,529.3-462.7,527.7-464.6,527.7z"/>
                                <path class="st1" d="M-459.4,522.5H-475c-1.9,0-3.5,1.6-3.5,3.5h13.9c2.9,0,5.2,2.3,5.2,5.2v11.6l1.9,1.9c0.2,0.2,0.3,0.2,0.7,0.2
	c0.2,0,0.2,0,0.3,0c0.3-0.2,0.5-0.5,0.5-0.9v-18C-455.9,524.1-457.5,522.5-459.4,522.5z"/>
</svg>
                        <?php endif; ?>

                        <?php if (esc_attr(get_option('widget_icon')) == 'chat-image'): ?>
                            <img src="<?php echo $this->getCustomWidgetImg(); ?>"/>
                        <?php else: ?>
                            <style type="text/css">.st1 {fill: #FFFFFF;}.st0{fill: #a886cd;}</style>
                            <g><circle cx="-469" cy="534.7" r="27" fill="<?php echo ($bg_color) ? $bg_color : '#A886CD'; ?>"/></g>
                            <path class="st1" d="M-459.9,523.7h-20.3c-1.9,0-3.4,1.5-3.4,3.4v15.3c0,1.9,1.5,3.4,3.4,3.4h11.4l5.9,4.9c0.2,0.2,0.3,0.2,0.5,0.2 h0.3c0.3-0.2,0.5-0.5,0.5-0.8v-4.2h1.7c1.9,0,3.4-1.5,3.4-3.4v-15.3C-456.5,525.2-458,523.7-459.9,523.7z"/>
                            <path class="st0" d="M-477.7,530.5h11.9c0.5,0,0.8,0.4,0.8,0.8l0,0c0,0.5-0.4,0.8-0.8,0.8h-11.9c-0.5,0-0.8-0.4-0.8-0.8l0,0C-478.6,530.8-478.2,530.5-477.7,530.5z"/>
                            <path class="st0" d="M-477.7,533.5h7.9c0.5,0,0.8,0.4,0.8,0.8l0,0c0,0.5-0.4,0.8-0.8,0.8h-7.9c-0.5,0-0.8-0.4-0.8-0.8l0,0C-478.6,533.9-478.2,533.5-477.7,533.5z"/>
                            </svg>
                        <?php endif; ?>

                    </i>
                    <span class="tooltiptext" style='<?php if (get_option('cht_cta') == "") {
                        echo 'display:none';
                    } ?>'><?php $cta = nl2br(get_option('cht_cta'));
                        echo str_replace(array("\r", "\n"), "", $cta); ?></span>
                </div>

            </div>
        </div>
    </div>
    <div class="switch-preview">
        <input data-gramm_editor="false" type="radio" id="previewDesktop" name="switchPreview"
               class="js-switch-preview switch-preview__input" checked="checked">
        <label for="previewDesktop" class="switch-preview__label switch-preview__desktop">
            <?php _e('Desktop', CHT_OPT); ?>
        </label>
        <input data-gramm_editor="false" type="radio" id="previewMobile" name="switchPreview"
               class="js-switch-preview switch-preview__input">
        <label for="previewMobile" class="switch-preview__label switch-preview__mobile">
            <?php _e('Mobile', CHT_OPT); ?>
        </label>
    </div>
</div>
<section class="section one" <?php echo ($this->is_pro()) ? 'id="pro"' : ''; ?> style="padding-bottom: 0; margin-bottom: -94px;
" xmlns="http://www.w3.org/1999/html">

    <h1 class="section-title">
        <strong><?php _e('Step', CHT_OPT); ?> 1:</strong> <?php _e('Choose your channels', CHT_OPT); ?>
    </h1>
    <?php $social_app = get_option('cht_numb_slug'); ?>
    <?php $social_app = explode(",", $social_app); ?>
    <?php $social_app = array_unique($social_app); ?>

    <div class="channels-icons">
        <?php if ($this->socials) : ?>
            <?php foreach ($this->socials as $key => $social) : ?>
                <?php $value = get_option('cht_social_' . $social['slug']); ?>
                <div class="icon icon-sm
                       <?php foreach ($social_app as $key_soc): ?>
                           <?php if ($key_soc == $social['slug']) { ?>
                                active
                        <?php } ?>
                        <?php endforeach; ?>"
                     data-social="<?php echo esc_attr($social['slug']); ?>"
                     data-title="<?php echo strtolower(esc_attr($this->del_space($social['slug']))); ?>">
                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <?php echo $social['svg']; ?>
                    </svg>
                </div>
                <?php echo ($key === 7) ? '<div class="col-12"></div>' : ''; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <input data-gramm_editor="false" type="text" class="add_slug"
           name="cht_numb_slug"
           placeholder="test"
           value="<?php echo esc_attr(get_option('cht_numb_slug')); ?>"
           hidden>

    <div class="channels-selected">
        <?php if ($this->socials) :
            $social = get_option('cht_numb_slug'); ?>
            <?php $social = explode(",", $social); ?>
            <?php $social = array_unique($social); ?>
            <?php foreach ($social as $key_soc): ?>
            <?php foreach ($this->socials as $key => $social) : ?>
                <?php if ($social['slug'] != $key_soc) {
                    continue;
                } ?>
                <?php $value = get_option('cht_social_' . $social['slug']) ?>
                <?php
                if (empty($value)) {
                    $value = [
                        'value' => '',
                        'is_mobile' => 'checked',
                        'is_desktop' => 'checked'
                    ];
                }
                ?>
                <div class="channels-selected__item <?php echo ($this->is_pro()) ? 'pro' : 'free'; ?> 1 available">
                    <div class="icon icon-md active"
                         data-title="<?php echo str_replace(' ', '_', strtolower(esc_attr($this->del_space($social['slug'])))); ?>">
                        <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <?php echo $social['svg']; ?>
                        </svg>
                    </div>
                    <div class="channels__input-box">
                        <input type="text"
                               class="channels__input"
                               name="cht_social_<?php echo esc_attr($social['slug']); ?>[value]"
                               value="<?php echo esc_attr($value['value']); ?>"
                               data-gramm_editor="false"
                               placeholder="<?php echo isset($social['input_placeholder'])?$social['input_placeholder']:"" ?>"
                               id="<?php echo esc_attr($social['slug']); ?>"
                            >
                        <button class="btn-cancel" data-social="<?php echo esc_attr($social['slug']); ?>">
                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect width="15.6301" height="2.24494" rx="1.12247"
                                      transform="translate(2.26764 0.0615997) rotate(45)" fill="white"/>
                                <rect width="15.6301" height="2.24494" rx="1.12247"
                                      transform="translate(13.3198 1.649) rotate(135)" fill="white"/>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <label class="channels__view"
                               for="<?php echo str_replace(' ', '_', esc_attr($this->del_space($social['slug']))); ?>Desktop">
                            <input type="checkbox"
                                   id="<?php echo str_replace(' ', '_', esc_attr($this->del_space($social['slug']))); ?>Desktop"
                                   class="channels__view-check js-chanel-icon js-chanel-desktop"
                                   data-type="<?php echo str_replace(' ', '_', strtolower(esc_attr($this->del_space($social['slug'])))); ?>"
                                   name="cht_social_<?php echo esc_attr($social['slug']); ?>[is_desktop]"
                                   value="checked"
                                   data-gramm_editor="false"
                                <?php echo isset($value['is_desktop']) ? $value['is_desktop'] : ''; ?>
                                >
                            <span class="channels__view-txt">Desktop</label>
                        </label>
                        <label class="channels__view"
                               for="<?php echo str_replace(' ', '_', esc_attr($this->del_space($social['slug']))); ?>Mobile">
                            <input type="checkbox"
                                   id="<?php echo str_replace(' ', '_', esc_attr($this->del_space($social['slug']))); ?>Mobile"
                                   class="channels__view-check js-chanel-icon js-chanel-mobile"
                                   data-type="<?php echo str_replace(' ', '_', strtolower(esc_attr($this->del_space($social['slug'])))); ?>"
                                   name="cht_social_<?php echo esc_attr($social['slug']); ?>[is_mobile]"
                                   value="checked"
                                   data-gramm_editor="false"
                                <?php echo isset($value['is_mobile']) ? $value['is_mobile'] : ''; ?>
                                >
                            <span class="channels__view-txt">Mobile</span>
                        </label>
                    </div>
                    <div class="input-example">
                        <?php _e('For example', CHT_OPT); ?>: <?php echo $social['example']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach?>
        <?php endif; ?>

        <div class="channels-selected__item disabled" style="opacity: 0;">
            <div class="icon icon-md active" style="opacity: 0;"
                 data-toggle="tooltip"
                 data-placement="top"
                 data-title="vk">
                <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="color-element" cx="19.4395" cy="19.4395" r="19.4395" fill="#5076AA"/>
                    <path
                        d="M11.0953 12.4775H12.5097C12.5097 12.4775 12.934 12.4774 13.0755 12.1971C13.2169 12.0569 13.2169 11.6363 13.2169 11.6363C13.2169 11.6363 13.2169 9.81373 14.0656 9.53334C14.9142 9.25294 15.9043 11.2157 17.0359 12.0569C17.8845 12.6176 18.5917 12.4775 18.5917 12.4775H21.562C21.562 12.4775 23.1178 12.3373 22.4106 11.2157C22.4106 11.0755 21.9863 10.2343 20.1476 8.69216C18.3088 7.0098 18.4503 7.29019 20.8548 4.20588C22.2692 2.38333 22.835 1.26176 22.6935 0.700978C22.5521 0.28039 21.562 0.42059 21.562 0.42059H18.1674C18.1674 0.42059 17.8845 0.420588 17.7431 0.560784C17.6016 0.70098 17.4602 0.981371 17.4602 0.981371C17.4602 0.981371 16.8944 2.38333 16.1872 3.6451C14.6313 6.16863 14.0656 6.30882 13.7827 6.16863C13.2169 5.74804 13.3584 4.62647 13.3584 3.92549C13.3584 1.40196 13.7827 0.420589 12.6512 0.140197C12.2268 1.06543e-06 11.944 -2.13922e-06 11.0953 -2.13922e-06C9.82233 -2.13922e-06 8.83224 -1.06543e-06 8.26647 0.280391C7.84215 0.420587 7.55927 0.841177 7.70071 0.841177C7.9836 0.841177 8.40792 0.98137 8.6908 1.40196C8.97368 1.82255 8.97368 2.94412 8.97368 2.94412C8.97368 2.94412 9.11513 5.88824 8.54936 6.16863C8.12503 6.44902 7.41783 5.88824 6.14485 3.6451C5.43764 2.52353 4.87188 1.12157 4.87188 1.12157C4.87188 1.12157 4.73044 0.841174 4.589 0.700978C4.30611 0.560782 4.02323 0.560784 4.02323 0.560784H0.770071C0.770071 0.560784 0.345746 0.560785 0.0628629 0.841177C-0.0785787 0.981374 0.0628629 1.40196 0.0628629 1.40196C0.0628629 1.40196 2.60881 7.2902 5.43764 10.2343C8.12503 12.7578 11.0953 12.4775 11.0953 12.4775Z"
                        transform="translate(6.78613 14.4898)" fill="white"/>
                </svg>
            </div>

            <input data-gramm_editor="false" type="text" placeholder="<?php _e('Phone number', CHT_OPT); ?>">

            <div class="input-example">
                <?php _e('For example', CHT_OPT); ?>: +1507854875
            </div>

            <button class="btn-cancel">
                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="15.6301" height="2.24494" rx="1.12247"
                          transform="translate(2.26764 0.0615997) rotate(45)" fill="white"/>
                    <rect width="15.6301" height="2.24494" rx="1.12247" transform="translate(13.3198 1.649) rotate(135)"
                          fill="white"/>
                </svg>
            </button>

        </div>
        <?php if (!$this->is_pro()) : ?>
            <div class="popover" style="position: relative;top: -100px;display: block;max-width: 448px;left: -12px;">
                <a  href="<?php echo $this->getUpgradeMenuItemUrl(); ?>">
                    <?php _e('Get unlimited channels in the Pro plan', CHT_OPT); ?>
                    <strong><?php _e('Upgrade Now', CHT_OPT); ?></strong>
                </a>
            </div>
        <?php endif; ?>


    </div>


    <button class="btn-save-sticky">
        <span><?php _e('Save', CHT_OPT); ?></span>
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M21.5 0.5H0.5V27.5H27.5V6.5L21.5 0.5ZM14 24.5C11.51 24.5 9.5 22.49 9.5 20C9.5 17.51 11.51 15.5 14 15.5C16.49 15.5 18.5 17.51 18.5 20C18.5 22.49 16.49 24.5 14 24.5ZM18.5 9.5H3.5V3.5H18.5V9.5Z"
                fill="white"/>
        </svg>
    </button>


    <a class="btn-help"><?php _e('help', CHT_OPT); ?><span>?</span></a>


    <div class="easy-modal" id="modal1">
        <div class="easy-modal-inner">
            <button class="easy-modal-close" title="Close">
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="15.6301" height="2.24494" rx="1.12247" transform="translate(1.5874) rotate(45)"
                          fill="#4F4F4F"/>
                    <rect width="15.6301" height="2.24494" rx="1.12247"
                          transform="translate(12.6396 1.58742) rotate(135)" fill="#4F4F4F"/>
                </svg>
            </button>

            <h2><?php _e('Upgrade', CHT_OPT); ?></h2>

            <p class="text-center">
                <?php _e('Unlock all Pro features for just', CHT_OPT); ?>
                <strong class="text-primary">$2.39/<?php _e('month', CHT_OPT); ?></strong>
                (<?php _e('paid annually', CHT_OPT); ?>)
            </p>

            <ul>
                <li><?php _e('One website', CHT_OPT); ?></li>
                <li><?php _e('Unlimited channels', CHT_OPT); ?></li>
                <li><?php _e('Custom color (HEX code)', CHT_OPT); ?></li>
                <li><?php _e('Custom location (X,Y)', CHT_OPT); ?></li>
                <li><?php _e('Remove “Get widget” link', CHT_OPT); ?></li>
            </ul>

            <div class="form-horizontal__item">
                <label><?php _e('Token number', CHT_OPT); ?>:</label>

                <div>
                    <input data-gramm_editor="false" type="text" placeholder="XXXX-XXXX-XXXX">
                </div>
            </div>

            <div class="text-center">
                <button class="btn-red">
                    <?php _e('Upgrade Now', CHT_OPT); ?>
                    <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.4674 7.42523L11.8646 0.128021C11.7548 0.128021 11.6449 0 11.4252 0C11.3154 0 11.0956 0 10.9858 0.128021L9.44777 1.92032C9.22806 2.17636 9.22806 2.56042 9.33791 2.81647L11.7548 6.017H0.549289C0.219716 6.017 0 6.27304 0 6.6571V9.21753C0 9.60159 0.219716 9.85763 0.549289 9.85763H11.8646L9.44777 13.0582C9.22806 13.3142 9.22806 13.6983 9.44777 13.9543L11.0956 15.6186C11.2055 15.7466 11.3154 15.7466 11.4252 15.7466C11.5351 15.7466 11.7548 15.6186 11.8646 15.4906L17.4674 8.19336C17.5772 8.06534 17.5772 7.68127 17.4674 7.42523Z"
                            transform="translate(0.701416 18.3653) rotate(-90)" fill="white"/>
                    </svg>
                </button>
            </div>

            <div class="text-center">
                <a href="#upgrade-modal" class="easy-modal-link"><?php _e('Change to free version', CHT_OPT); ?></a>
            </div>

        </div>
    </div>
</section>
<script>
    var PRO_PLUGIN_URL = "<?php echo CHT_PRO_URL ?>";
</script>

