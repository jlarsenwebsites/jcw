<?php
/*
 * This file basically contains function to handle ajax requests
 */
/*
 * List of glyphicons and fontawesome icons
 */
$glyphicons='
<li type="glyphicon" data-value="glyphicon-asterisk"  class="glyphicon glyphicon-asterisk"> </li>
<li type="glyphicon" data-value="glyphicon-plus"  class="glyphicon glyphicon-plus"> </li>
<li type="glyphicon" data-value="glyphicon-euro"  class="glyphicon glyphicon-euro"> </li>
<li type="glyphicon" data-value="glyphicon-minus"  class="glyphicon glyphicon-minus"> </li>
<li type="glyphicon" data-value="glyphicon-cloud"  class="glyphicon glyphicon-cloud"> </li>
<li type="glyphicon" data-value="glyphicon-envelope"  class="glyphicon glyphicon-envelope"> </li>
<li type="glyphicon" data-value="glyphicon-pencil"  class="glyphicon glyphicon-pencil"> </li>
<li type="glyphicon" data-value="glyphicon-glass"  class="glyphicon glyphicon-glass"> </li>
<li type="glyphicon" data-value="glyphicon-music"  class="glyphicon glyphicon-music"> </li>
<li type="glyphicon" data-value="glyphicon-search"  class="glyphicon glyphicon-search"> </li>
<li type="glyphicon" data-value="glyphicon-heart"  class="glyphicon glyphicon-heart"> </li>
<li type="glyphicon" data-value="glyphicon-star"  class="glyphicon glyphicon-star"> </li>
<li type="glyphicon" data-value="glyphicon-star-empty"  class="glyphicon glyphicon-star-empty"> </li>
<li type="glyphicon" data-value="glyphicon-user"  class="glyphicon glyphicon-user"> </li>
<li type="glyphicon" data-value="glyphicon-film"  class="glyphicon glyphicon-film"> </li>
<li type="glyphicon" data-value="glyphicon-th-large"  class="glyphicon glyphicon-th-large"> </li>
<li type="glyphicon" data-value="glyphicon-th"  class="glyphicon glyphicon-th"> </li>
<li type="glyphicon" data-value="glyphicon-th-list"  class="glyphicon glyphicon-th-list"> </li>
<li type="glyphicon" data-value="glyphicon-ok"  class="glyphicon glyphicon-ok"> </li>
<li type="glyphicon" data-value="glyphicon-remove"  class="glyphicon glyphicon-remove"> </li>
<li type="glyphicon" data-value="glyphicon-zoom-in"  class="glyphicon glyphicon-zoom-in"> </li>
<li type="glyphicon" data-value="glyphicon-zoom-out"  class="glyphicon glyphicon-zoom-out"> </li>
<li type="glyphicon" data-value="glyphicon-off"  class="glyphicon glyphicon-off"> </li>
<li type="glyphicon" data-value="glyphicon-signal"  class="glyphicon glyphicon-signal"> </li>
<li type="glyphicon" data-value="glyphicon-cog"  class="glyphicon glyphicon-cog"> </li>
<li type="glyphicon" data-value="glyphicon-trash"  class="glyphicon glyphicon-trash"> </li>
<li type="glyphicon" data-value="glyphicon-home"  class="glyphicon glyphicon-home"> </li>
<li type="glyphicon" data-value="glyphicon-file"  class="glyphicon glyphicon-file"> </li>
<li type="glyphicon" data-value="glyphicon-time"  class="glyphicon glyphicon-time"> </li>
<li type="glyphicon" data-value="glyphicon-road"  class="glyphicon glyphicon-road"> </li>
<li type="glyphicon" data-value="glyphicon-download-alt"  class="glyphicon glyphicon-download-alt"> </li>
<li type="glyphicon" data-value="glyphicon-download"  class="glyphicon glyphicon-download"> </li>
<li type="glyphicon" data-value="glyphicon-upload"  class="glyphicon glyphicon-upload"> </li>
<li type="glyphicon" data-value="glyphicon-inbox"  class="glyphicon glyphicon-inbox"> </li>
<li type="glyphicon" data-value="glyphicon-play-circle"  class="glyphicon glyphicon-play-circle"> </li>
<li type="glyphicon" data-value="glyphicon-repeat"  class="glyphicon glyphicon-repeat"> </li>
<li type="glyphicon" data-value="glyphicon-refresh"  class="glyphicon glyphicon-refresh"> </li>
<li type="glyphicon" data-value="glyphicon-list-alt"  class="glyphicon glyphicon-list-alt"> </li>
<li type="glyphicon" data-value="glyphicon-lock"  class="glyphicon glyphicon-lock"> </li>
<li type="glyphicon" data-value="glyphicon-flag"  class="glyphicon glyphicon-flag"> </li>
<li type="glyphicon" data-value="glyphicon-headphones"  class="glyphicon glyphicon-headphones"> </li>
<li type="glyphicon" data-value="glyphicon-volume-off"  class="glyphicon glyphicon-volume-off"> </li>
<li type="glyphicon" data-value="glyphicon-volume-down"  class="glyphicon glyphicon-volume-down"> </li>
<li type="glyphicon" data-value="glyphicon-volume-up"  class="glyphicon glyphicon-volume-up"> </li>
<li type="glyphicon" data-value="glyphicon-qrcode"  class="glyphicon glyphicon-qrcode"> </li>
<li type="glyphicon" data-value="glyphicon-barcode"  class="glyphicon glyphicon-barcode"> </li>
<li type="glyphicon" data-value="glyphicon-tag"  class="glyphicon glyphicon-tag"> </li>
<li type="glyphicon" data-value="glyphicon-tags"  class="glyphicon glyphicon-tags"> </li>
<li type="glyphicon" data-value="glyphicon-book"  class="glyphicon glyphicon-book"> </li>
<li type="glyphicon" data-value="glyphicon-bookmark"  class="glyphicon glyphicon-bookmark"> </li>
<li type="glyphicon" data-value="glyphicon-print"  class="glyphicon glyphicon-print"> </li>
<li type="glyphicon" data-value="glyphicon-camera"  class="glyphicon glyphicon-camera"> </li>
<li type="glyphicon" data-value="glyphicon-font"  class="glyphicon glyphicon-font"> </li>
<li type="glyphicon" data-value="glyphicon-bold"  class="glyphicon glyphicon-bold"> </li>
<li type="glyphicon" data-value="glyphicon-italic"  class="glyphicon glyphicon-italic"> </li>
<li type="glyphicon" data-value="glyphicon-text-height"  class="glyphicon glyphicon-text-height"> </li>
<li type="glyphicon" data-value="glyphicon-text-width"  class="glyphicon glyphicon-text-width"> </li>
<li type="glyphicon" data-value="glyphicon-align-left"  class="glyphicon glyphicon-align-left"> </li>
<li type="glyphicon" data-value="glyphicon-align-center"  class="glyphicon glyphicon-align-center"> </li>
<li type="glyphicon" data-value="glyphicon-align-right"  class="glyphicon glyphicon-align-right"> </li>
<li type="glyphicon" data-value="glyphicon-align-justify"  class="glyphicon glyphicon-align-justify"> </li>
<li type="glyphicon" data-value="glyphicon-list"  class="glyphicon glyphicon-list"> </li>
<li type="glyphicon" data-value="glyphicon-indent-left"  class="glyphicon glyphicon-indent-left"> </li>
<li type="glyphicon" data-value="glyphicon-indent-right"  class="glyphicon glyphicon-indent-right"> </li>
<li type="glyphicon" data-value="glyphicon-facetime-video"  class="glyphicon glyphicon-facetime-video"> </li>
<li type="glyphicon" data-value="glyphicon-picture"  class="glyphicon glyphicon-picture"> </li>
<li type="glyphicon" data-value="glyphicon-map-marker"  class="glyphicon glyphicon-map-marker"> </li>
<li type="glyphicon" data-value="glyphicon-adjust"  class="glyphicon glyphicon-adjust"> </li>
<li type="glyphicon" data-value="glyphicon-tint"  class="glyphicon glyphicon-tint"> </li>
<li type="glyphicon" data-value="glyphicon-edit"  class="glyphicon glyphicon-edit"> </li>
<li type="glyphicon" data-value="glyphicon-share"  class="glyphicon glyphicon-share"> </li>
<li type="glyphicon" data-value="glyphicon-check"  class="glyphicon glyphicon-check"> </li>
<li type="glyphicon" data-value="glyphicon-move"  class="glyphicon glyphicon-move"> </li>
<li type="glyphicon" data-value="glyphicon-step-backward"  class="glyphicon glyphicon-step-backward"> </li>
<li type="glyphicon" data-value="glyphicon-fast-backward"  class="glyphicon glyphicon-fast-backward"> </li>
<li type="glyphicon" data-value="glyphicon-backward"  class="glyphicon glyphicon-backward"> </li>
<li type="glyphicon" data-value="glyphicon-play"  class="glyphicon glyphicon-play"> </li>
<li type="glyphicon" data-value="glyphicon-pause"  class="glyphicon glyphicon-pause"> </li>
<li type="glyphicon" data-value="glyphicon-stop"  class="glyphicon glyphicon-stop"> </li>
<li type="glyphicon" data-value="glyphicon-forward"  class="glyphicon glyphicon-forward"> </li>
<li type="glyphicon" data-value="glyphicon-fast-forward"  class="glyphicon glyphicon-fast-forward"> </li>
<li type="glyphicon" data-value="glyphicon-step-forward"  class="glyphicon glyphicon-step-forward"> </li>
<li type="glyphicon" data-value="glyphicon-eject"  class="glyphicon glyphicon-eject"> </li>
<li type="glyphicon" data-value="glyphicon-chevron-left"  class="glyphicon glyphicon-chevron-left"> </li>
<li type="glyphicon" data-value="glyphicon-chevron-right"  class="glyphicon glyphicon-chevron-right"> </li>
<li type="glyphicon" data-value="glyphicon-plus-sign"  class="glyphicon glyphicon-plus-sign"> </li>
<li type="glyphicon" data-value="glyphicon-minus-sign"  class="glyphicon glyphicon-minus-sign"> </li>
<li type="glyphicon" data-value="glyphicon-remove-sign"  class="glyphicon glyphicon-remove-sign"> </li>
<li type="glyphicon" data-value="glyphicon-ok-sign"  class="glyphicon glyphicon-ok-sign"> </li>
<li type="glyphicon" data-value="glyphicon-question-sign"  class="glyphicon glyphicon-question-sign"> </li>
<li type="glyphicon" data-value="glyphicon-info-sign"  class="glyphicon glyphicon-info-sign"> </li>
<li type="glyphicon" data-value="glyphicon-screenshot"  class="glyphicon glyphicon-screenshot"> </li>
<li type="glyphicon" data-value="glyphicon-remove-circle"  class="glyphicon glyphicon-remove-circle"> </li>
<li type="glyphicon" data-value="glyphicon-ok-circle"  class="glyphicon glyphicon-ok-circle"> </li>
<li type="glyphicon" data-value="glyphicon-ban-circle"  class="glyphicon glyphicon-ban-circle"> </li>
<li type="glyphicon" data-value="glyphicon-arrow-left"  class="glyphicon glyphicon-arrow-left"> </li>
<li type="glyphicon" data-value="glyphicon-arrow-right"  class="glyphicon glyphicon-arrow-right"> </li>
<li type="glyphicon" data-value="glyphicon-arrow-up"  class="glyphicon glyphicon-arrow-up"> </li>
<li type="glyphicon" data-value="glyphicon-arrow-down"  class="glyphicon glyphicon-arrow-down"> </li>
<li type="glyphicon" data-value="glyphicon-share-alt"  class="glyphicon glyphicon-share-alt"> </li>
<li type="glyphicon" data-value="glyphicon-resize-full"  class="glyphicon glyphicon-resize-full"> </li>
<li type="glyphicon" data-value="glyphicon-resize-small"  class="glyphicon glyphicon-resize-small"> </li>
<li type="glyphicon" data-value="glyphicon-exclamation-sign"  class="glyphicon glyphicon-exclamation-sign"> </li>
<li type="glyphicon" data-value="glyphicon-gift"  class="glyphicon glyphicon-gift"> </li>
<li type="glyphicon" data-value="glyphicon-leaf"  class="glyphicon glyphicon-leaf"> </li>
<li type="glyphicon" data-value="glyphicon-fire"  class="glyphicon glyphicon-fire"> </li>
<li type="glyphicon" data-value="glyphicon-eye-open"  class="glyphicon glyphicon-eye-open"> </li>
<li type="glyphicon" data-value="glyphicon-eye-close"  class="glyphicon glyphicon-eye-close"> </li>
<li type="glyphicon" data-value="glyphicon-warning-sign"  class="glyphicon glyphicon-warning-sign"> </li>
<li type="glyphicon" data-value="glyphicon-plane"  class="glyphicon glyphicon-plane"> </li>
<li type="glyphicon" data-value="glyphicon-calendar"  class="glyphicon glyphicon-calendar"> </li>
<li type="glyphicon" data-value="glyphicon-random"  class="glyphicon glyphicon-random"> </li>
<li type="glyphicon" data-value="glyphicon-comment"  class="glyphicon glyphicon-comment"> </li>
<li type="glyphicon" data-value="glyphicon-magnet"  class="glyphicon glyphicon-magnet"> </li>
<li type="glyphicon" data-value="glyphicon-chevron-up"  class="glyphicon glyphicon-chevron-up"> </li>
<li type="glyphicon" data-value="glyphicon-chevron-down"  class="glyphicon glyphicon-chevron-down"> </li>
<li type="glyphicon" data-value="glyphicon-retweet"  class="glyphicon glyphicon-retweet"> </li>
<li type="glyphicon" data-value="glyphicon-shopping-cart"  class="glyphicon glyphicon-shopping-cart"> </li>
<li type="glyphicon" data-value="glyphicon-folder-close"  class="glyphicon glyphicon-folder-close"> </li>
<li type="glyphicon" data-value="glyphicon-folder-open"  class="glyphicon glyphicon-folder-open"> </li>
<li type="glyphicon" data-value="glyphicon-resize-vertical"  class="glyphicon glyphicon-resize-vertical"> </li>
<li type="glyphicon" data-value="glyphicon-resize-horizontal"  class="glyphicon glyphicon-resize-horizontal"> </li>
<li type="glyphicon" data-value="glyphicon-hdd"  class="glyphicon glyphicon-hdd"> </li>
<li type="glyphicon" data-value="glyphicon-bullhorn"  class="glyphicon glyphicon-bullhorn"> </li>
<li type="glyphicon" data-value="glyphicon-bell"  class="glyphicon glyphicon-bell"> </li>
<li type="glyphicon" data-value="glyphicon-certificate"  class="glyphicon glyphicon-certificate"> </li>
<li type="glyphicon" data-value="glyphicon-thumbs-up"  class="glyphicon glyphicon-thumbs-up"> </li>
<li type="glyphicon" data-value="glyphicon-thumbs-down"  class="glyphicon glyphicon-thumbs-down"> </li>
<li type="glyphicon" data-value="glyphicon-hand-right"  class="glyphicon glyphicon-hand-right"> </li>
<li type="glyphicon" data-value="glyphicon-hand-left"  class="glyphicon glyphicon-hand-left"> </li>
<li type="glyphicon" data-value="glyphicon-hand-up"  class="glyphicon glyphicon-hand-up"> </li>
<li type="glyphicon" data-value="glyphicon-hand-down"  class="glyphicon glyphicon-hand-down"> </li>
<li type="glyphicon" data-value="glyphicon-circle-arrow-right"  class="glyphicon glyphicon-circle-arrow-right"> </li>
<li type="glyphicon" data-value="glyphicon-circle-arrow-left"  class="glyphicon glyphicon-circle-arrow-left"> </li>
<li type="glyphicon" data-value="glyphicon-circle-arrow-up"  class="glyphicon glyphicon-circle-arrow-up"> </li>
<li type="glyphicon" data-value="glyphicon-circle-arrow-down"  class="glyphicon glyphicon-circle-arrow-down"> </li>
<li type="glyphicon" data-value="glyphicon-globe"  class="glyphicon glyphicon-globe"> </li>
<li type="glyphicon" data-value="glyphicon-wrench"  class="glyphicon glyphicon-wrench"> </li>
<li type="glyphicon" data-value="glyphicon-tasks"  class="glyphicon glyphicon-tasks"> </li>
<li type="glyphicon" data-value="glyphicon-filter"  class="glyphicon glyphicon-filter"> </li>
<li type="glyphicon" data-value="glyphicon-briefcase"  class="glyphicon glyphicon-briefcase"> </li>
<li type="glyphicon" data-value="glyphicon-fullscreen"  class="glyphicon glyphicon-fullscreen"> </li>
<li type="glyphicon" data-value="glyphicon-dashboard"  class="glyphicon glyphicon-dashboard"> </li>
<li type="glyphicon" data-value="glyphicon-paperclip"  class="glyphicon glyphicon-paperclip"> </li>
<li type="glyphicon" data-value="glyphicon-heart-empty"  class="glyphicon glyphicon-heart-empty"> </li>
<li type="glyphicon" data-value="glyphicon-link"  class="glyphicon glyphicon-link"> </li>
<li type="glyphicon" data-value="glyphicon-phone"  class="glyphicon glyphicon-phone"> </li>
<li type="glyphicon" data-value="glyphicon-pushpin"  class="glyphicon glyphicon-pushpin"> </li>
<li type="glyphicon" data-value="glyphicon-usd"  class="glyphicon glyphicon-usd"> </li>
<li type="glyphicon" data-value="glyphicon-gbp"  class="glyphicon glyphicon-gbp"> </li>
<li type="glyphicon" data-value="glyphicon-sort"  class="glyphicon glyphicon-sort"> </li>
<li type="glyphicon" data-value="glyphicon-sort-by-alphabet"  class="glyphicon glyphicon-sort-by-alphabet"> </li>
<li type="glyphicon" data-value="glyphicon-sort-by-alphabet-alt"  class="glyphicon glyphicon-sort-by-alphabet-alt"> </li>
<li type="glyphicon" data-value="glyphicon-sort-by-order"  class="glyphicon glyphicon-sort-by-order"> </li>
<li type="glyphicon" data-value="glyphicon-sort-by-order-alt"  class="glyphicon glyphicon-sort-by-order-alt"> </li>
<li type="glyphicon" data-value="glyphicon-sort-by-attributes"  class="glyphicon glyphicon-sort-by-attributes"> </li>
<li type="glyphicon" data-value="glyphicon-sort-by-attributes-alt"  class="glyphicon glyphicon-sort-by-attributes-alt"> </li>
<li type="glyphicon" data-value="glyphicon-unchecked"  class="glyphicon glyphicon-unchecked"> </li>
<li type="glyphicon" data-value="glyphicon-expand"  class="glyphicon glyphicon-expand"> </li>
<li type="glyphicon" data-value="glyphicon-collapse-down"  class="glyphicon glyphicon-collapse-down"> </li>
<li type="glyphicon" data-value="glyphicon-collapse-up"  class="glyphicon glyphicon-collapse-up"> </li>
<li type="glyphicon" data-value="glyphicon-log-in"  class="glyphicon glyphicon-log-in"> </li>
<li type="glyphicon" data-value="glyphicon-flash"  class="glyphicon glyphicon-flash"> </li>
<li type="glyphicon" data-value="glyphicon-log-out"  class="glyphicon glyphicon-log-out"> </li>
<li type="glyphicon" data-value="glyphicon-new-window"  class="glyphicon glyphicon-new-window"> </li>
<li type="glyphicon" data-value="glyphicon-record"  class="glyphicon glyphicon-record"> </li>
<li type="glyphicon" data-value="glyphicon-save"  class="glyphicon glyphicon-save"> </li>
<li type="glyphicon" data-value="glyphicon-open"  class="glyphicon glyphicon-open"> </li>
<li type="glyphicon" data-value="glyphicon-saved"  class="glyphicon glyphicon-saved"> </li>
<li type="glyphicon" data-value="glyphicon-import"  class="glyphicon glyphicon-import"> </li>
<li type="glyphicon" data-value="glyphicon-export"  class="glyphicon glyphicon-export"> </li>
<li type="glyphicon" data-value="glyphicon-send"  class="glyphicon glyphicon-send"> </li>
<li type="glyphicon" data-value="glyphicon-floppy-disk"  class="glyphicon glyphicon-floppy-disk"> </li>
<li type="glyphicon" data-value="glyphicon-floppy-saved"  class="glyphicon glyphicon-floppy-saved"> </li>
<li type="glyphicon" data-value="glyphicon-floppy-remove"  class="glyphicon glyphicon-floppy-remove"> </li>
<li type="glyphicon" data-value="glyphicon-floppy-save"  class="glyphicon glyphicon-floppy-save"> </li>
<li type="glyphicon" data-value="glyphicon-floppy-open"  class="glyphicon glyphicon-floppy-open"> </li>
<li type="glyphicon" data-value="glyphicon-credit-card"  class="glyphicon glyphicon-credit-card"> </li>
<li type="glyphicon" data-value="glyphicon-transfer"  class="glyphicon glyphicon-transfer"> </li>
<li type="glyphicon" data-value="glyphicon-cutlery"  class="glyphicon glyphicon-cutlery"> </li>
<li type="glyphicon" data-value="glyphicon-header"  class="glyphicon glyphicon-header"> </li>
<li type="glyphicon" data-value="glyphicon-compressed"  class="glyphicon glyphicon-compressed"> </li>
<li type="glyphicon" data-value="glyphicon-earphone"  class="glyphicon glyphicon-earphone"> </li>
<li type="glyphicon" data-value="glyphicon-phone-alt"  class="glyphicon glyphicon-phone-alt"> </li>
<li type="glyphicon" data-value="glyphicon-tower"  class="glyphicon glyphicon-tower"> </li>
<li type="glyphicon" data-value="glyphicon-stats"  class="glyphicon glyphicon-stats"> </li>
<li type="glyphicon" data-value="glyphicon-sd-video"  class="glyphicon glyphicon-sd-video"> </li>
<li type="glyphicon" data-value="glyphicon-hd-video"  class="glyphicon glyphicon-hd-video"> </li>
<li type="glyphicon" data-value="glyphicon-subtitles"  class="glyphicon glyphicon-subtitles"> </li>
<li type="glyphicon" data-value="glyphicon-sound-stereo"  class="glyphicon glyphicon-sound-stereo"> </li>
<li type="glyphicon" data-value="glyphicon-sound-dolby"  class="glyphicon glyphicon-sound-dolby"> </li>
<li type="glyphicon" data-value="glyphicon-copyright-mark"  class="glyphicon glyphicon-copyright-mark"> </li>
<li type="glyphicon" data-value="glyphicon-registration-mark"  class="glyphicon glyphicon-registration-mark"> </li>
<li type="glyphicon" data-value="glyphicon-cloud-download"  class="glyphicon glyphicon-cloud-download"> </li>
<li type="glyphicon" data-value="glyphicon-cloud-upload"  class="glyphicon glyphicon-cloud-upload"> </li>
<li type="glyphicon" data-value="glyphicon-tree-conifer"  class="glyphicon glyphicon-tree-conifer"> </li>
<li type="glyphicon" data-value="glyphicon-tree-deciduous"  class="glyphicon glyphicon-tree-deciduous"> </li>';
$faicons='<li type="fa" data-value="fa-glass"  class="fa fa-glass"> </li>
<li type="fa" data-value="fa-music"  class="fa fa-music"> </li>
<li type="fa" data-value="fa-search"  class="fa fa-search"> </li>
<li type="fa" data-value="fa-envelope-o"  class="fa fa-envelope-o"> </li>
<li type="fa" data-value="fa-heart"  class="fa fa-heart"> </li>
<li type="fa" data-value="fa-star"  class="fa fa-star"> </li>
<li type="fa" data-value="fa-star-o"  class="fa fa-star-o"> </li>
<li type="fa" data-value="fa-user"  class="fa fa-user"> </li>
<li type="fa" data-value="fa-film"  class="fa fa-film"> </li>
<li type="fa" data-value="fa-th-large"  class="fa fa-th-large"> </li>
<li type="fa" data-value="fa-th"  class="fa fa-th"> </li>
<li type="fa" data-value="fa-th-list"  class="fa fa-th-list"> </li>
<li type="fa" data-value="fa-check"  class="fa fa-check"> </li>
<li type="fa" data-value="fa-remove"  class="fa fa-remove"> </li>
<li type="fa" data-value="fa-close"  class="fa fa-close"> </li>
<li type="fa" data-value="fa-times"  class="fa fa-times"> </li>
<li type="fa" data-value="fa-search-plus"  class="fa fa-search-plus"> </li>
<li type="fa" data-value="fa-search-minus"  class="fa fa-search-minus"> </li>
<li type="fa" data-value="fa-power-off"  class="fa fa-power-off"> </li>
<li type="fa" data-value="fa-signal"  class="fa fa-signal"> </li>
<li type="fa" data-value="fa-gear"  class="fa fa-gear"> </li>
<li type="fa" data-value="fa-cog"  class="fa fa-cog"> </li>
<li type="fa" data-value="fa-trash-o"  class="fa fa-trash-o"> </li>
<li type="fa" data-value="fa-home"  class="fa fa-home"> </li>
<li type="fa" data-value="fa-file-o"  class="fa fa-file-o"> </li>
<li type="fa" data-value="fa-clock-o"  class="fa fa-clock-o"> </li>
<li type="fa" data-value="fa-road"  class="fa fa-road"> </li>
<li type="fa" data-value="fa-download"  class="fa fa-download"> </li>
<li type="fa" data-value="fa-arrow-circle-o-down"  class="fa fa-arrow-circle-o-down"> </li>
<li type="fa" data-value="fa-arrow-circle-o-up"  class="fa fa-arrow-circle-o-up"> </li>
<li type="fa" data-value="fa-inbox"  class="fa fa-inbox"> </li>
<li type="fa" data-value="fa-play-circle-o"  class="fa fa-play-circle-o"> </li>
<li type="fa" data-value="fa-rotate-right"  class="fa fa-rotate-right"> </li>
<li type="fa" data-value="fa-repeat"  class="fa fa-repeat"> </li>
<li type="fa" data-value="fa-refresh"  class="fa fa-refresh"> </li>
<li type="fa" data-value="fa-list-alt"  class="fa fa-list-alt"> </li>
<li type="fa" data-value="fa-lock"  class="fa fa-lock"> </li>
<li type="fa" data-value="fa-flag"  class="fa fa-flag"> </li>
<li type="fa" data-value="fa-headphones"  class="fa fa-headphones"> </li>
<li type="fa" data-value="fa-volume-off"  class="fa fa-volume-off"> </li>
<li type="fa" data-value="fa-volume-down"  class="fa fa-volume-down"> </li>
<li type="fa" data-value="fa-volume-up"  class="fa fa-volume-up"> </li>
<li type="fa" data-value="fa-qrcode"  class="fa fa-qrcode"> </li>
<li type="fa" data-value="fa-barcode"  class="fa fa-barcode"> </li>
<li type="fa" data-value="fa-tag"  class="fa fa-tag"> </li>
<li type="fa" data-value="fa-tags"  class="fa fa-tags"> </li>
<li type="fa" data-value="fa-book"  class="fa fa-book"> </li>
<li type="fa" data-value="fa-bookmark"  class="fa fa-bookmark"> </li>
<li type="fa" data-value="fa-print"  class="fa fa-print"> </li>
<li type="fa" data-value="fa-camera"  class="fa fa-camera"> </li>
<li type="fa" data-value="fa-font"  class="fa fa-font"> </li>
<li type="fa" data-value="fa-bold"  class="fa fa-bold"> </li>
<li type="fa" data-value="fa-italic"  class="fa fa-italic"> </li>
<li type="fa" data-value="fa-text-height"  class="fa fa-text-height"> </li>
<li type="fa" data-value="fa-text-width"  class="fa fa-text-width"> </li>
<li type="fa" data-value="fa-align-left"  class="fa fa-align-left"> </li>
<li type="fa" data-value="fa-align-center"  class="fa fa-align-center"> </li>
<li type="fa" data-value="fa-align-right"  class="fa fa-align-right"> </li>
<li type="fa" data-value="fa-align-justify"  class="fa fa-align-justify"> </li>
<li type="fa" data-value="fa-list"  class="fa fa-list"> </li>
<li type="fa" data-value="fa-dedent"  class="fa fa-dedent"> </li>
<li type="fa" data-value="fa-outdent"  class="fa fa-outdent"> </li>
<li type="fa" data-value="fa-indent"  class="fa fa-indent"> </li>
<li type="fa" data-value="fa-video-camera"  class="fa fa-video-camera"> </li>
<li type="fa" data-value="fa-photo"  class="fa fa-photo"> </li>
<li type="fa" data-value="fa-image"  class="fa fa-image"> </li>
<li type="fa" data-value="fa-picture-o"  class="fa fa-picture-o"> </li>
<li type="fa" data-value="fa-pencil"  class="fa fa-pencil"> </li>
<li type="fa" data-value="fa-map-marker"  class="fa fa-map-marker"> </li>
<li type="fa" data-value="fa-adjust"  class="fa fa-adjust"> </li>
<li type="fa" data-value="fa-tint"  class="fa fa-tint"> </li>
<li type="fa" data-value="fa-edit"  class="fa fa-edit"> </li>
<li type="fa" data-value="fa-pencil-square-o"  class="fa fa-pencil-square-o"> </li>
<li type="fa" data-value="fa-share-square-o"  class="fa fa-share-square-o"> </li>
<li type="fa" data-value="fa-check-square-o"  class="fa fa-check-square-o"> </li>
<li type="fa" data-value="fa-arrows"  class="fa fa-arrows"> </li>
<li type="fa" data-value="fa-step-backward"  class="fa fa-step-backward"> </li>
<li type="fa" data-value="fa-fast-backward"  class="fa fa-fast-backward"> </li>
<li type="fa" data-value="fa-backward"  class="fa fa-backward"> </li>
<li type="fa" data-value="fa-play"  class="fa fa-play"> </li>
<li type="fa" data-value="fa-pause"  class="fa fa-pause"> </li>
<li type="fa" data-value="fa-stop"  class="fa fa-stop"> </li>
<li type="fa" data-value="fa-forward"  class="fa fa-forward"> </li>
<li type="fa" data-value="fa-fast-forward"  class="fa fa-fast-forward"> </li>
<li type="fa" data-value="fa-step-forward"  class="fa fa-step-forward"> </li>
<li type="fa" data-value="fa-eject"  class="fa fa-eject"> </li>
<li type="fa" data-value="fa-chevron-left"  class="fa fa-chevron-left"> </li>
<li type="fa" data-value="fa-chevron-right"  class="fa fa-chevron-right"> </li>
<li type="fa" data-value="fa-plus-circle"  class="fa fa-plus-circle"> </li>
<li type="fa" data-value="fa-minus-circle"  class="fa fa-minus-circle"> </li>
<li type="fa" data-value="fa-times-circle"  class="fa fa-times-circle"> </li>
<li type="fa" data-value="fa-check-circle"  class="fa fa-check-circle"> </li>
<li type="fa" data-value="fa-question-circle"  class="fa fa-question-circle"> </li>
<li type="fa" data-value="fa-info-circle"  class="fa fa-info-circle"> </li>
<li type="fa" data-value="fa-crosshairs"  class="fa fa-crosshairs"> </li>
<li type="fa" data-value="fa-times-circle-o"  class="fa fa-times-circle-o"> </li>
<li type="fa" data-value="fa-check-circle-o"  class="fa fa-check-circle-o"> </li>
<li type="fa" data-value="fa-ban"  class="fa fa-ban"> </li>
<li type="fa" data-value="fa-arrow-left"  class="fa fa-arrow-left"> </li>
<li type="fa" data-value="fa-arrow-right"  class="fa fa-arrow-right"> </li>
<li type="fa" data-value="fa-arrow-up"  class="fa fa-arrow-up"> </li>
<li type="fa" data-value="fa-arrow-down"  class="fa fa-arrow-down"> </li>
<li type="fa" data-value="fa-mail-forward"  class="fa fa-mail-forward"> </li>
<li type="fa" data-value="fa-share"  class="fa fa-share"> </li>
<li type="fa" data-value="fa-expand"  class="fa fa-expand"> </li>
<li type="fa" data-value="fa-compress"  class="fa fa-compress"> </li>
<li type="fa" data-value="fa-plus"  class="fa fa-plus"> </li>
<li type="fa" data-value="fa-minus"  class="fa fa-minus"> </li>
<li type="fa" data-value="fa-asterisk"  class="fa fa-asterisk"> </li>
<li type="fa" data-value="fa-exclamation-circle"  class="fa fa-exclamation-circle"> </li>
<li type="fa" data-value="fa-gift"  class="fa fa-gift"> </li>
<li type="fa" data-value="fa-leaf"  class="fa fa-leaf"> </li>
<li type="fa" data-value="fa-fire"  class="fa fa-fire"> </li>
<li type="fa" data-value="fa-eye"  class="fa fa-eye"> </li>
<li type="fa" data-value="fa-eye-slash"  class="fa fa-eye-slash"> </li>
<li type="fa" data-value="fa-warning"  class="fa fa-warning"> </li>
<li type="fa" data-value="fa-exclamation-triangle"  class="fa fa-exclamation-triangle"> </li>
<li type="fa" data-value="fa-plane"  class="fa fa-plane"> </li>
<li type="fa" data-value="fa-calendar"  class="fa fa-calendar"> </li>
<li type="fa" data-value="fa-random"  class="fa fa-random"> </li>
<li type="fa" data-value="fa-comment"  class="fa fa-comment"> </li>
<li type="fa" data-value="fa-magnet"  class="fa fa-magnet"> </li>
<li type="fa" data-value="fa-chevron-up"  class="fa fa-chevron-up"> </li>
<li type="fa" data-value="fa-chevron-down"  class="fa fa-chevron-down"> </li>
<li type="fa" data-value="fa-retweet"  class="fa fa-retweet"> </li>
<li type="fa" data-value="fa-shopping-cart"  class="fa fa-shopping-cart"> </li>
<li type="fa" data-value="fa-folder"  class="fa fa-folder"> </li>
<li type="fa" data-value="fa-folder-open"  class="fa fa-folder-open"> </li>
<li type="fa" data-value="fa-arrows-v"  class="fa fa-arrows-v"> </li>
<li type="fa" data-value="fa-arrows-h"  class="fa fa-arrows-h"> </li>
<li type="fa" data-value="fa-bar-chart-o"  class="fa fa-bar-chart-o"> </li>
<li type="fa" data-value="fa-bar-chart"  class="fa fa-bar-chart"> </li>
<li type="fa" data-value="fa-twitter-square"  class="fa fa-twitter-square"> </li>
<li type="fa" data-value="fa-facebook-square"  class="fa fa-facebook-square"> </li>
<li type="fa" data-value="fa-camera-retro"  class="fa fa-camera-retro"> </li>
<li type="fa" data-value="fa-key"  class="fa fa-key"> </li>
<li type="fa" data-value="fa-gears"  class="fa fa-gears"> </li>
<li type="fa" data-value="fa-cogs"  class="fa fa-cogs"> </li>
<li type="fa" data-value="fa-comments"  class="fa fa-comments"> </li>
<li type="fa" data-value="fa-thumbs-o-up"  class="fa fa-thumbs-o-up"> </li>
<li type="fa" data-value="fa-thumbs-o-down"  class="fa fa-thumbs-o-down"> </li>
<li type="fa" data-value="fa-star-half"  class="fa fa-star-half"> </li>
<li type="fa" data-value="fa-heart-o"  class="fa fa-heart-o"> </li>
<li type="fa" data-value="fa-sign-out"  class="fa fa-sign-out"> </li>
<li type="fa" data-value="fa-linkedin-square"  class="fa fa-linkedin-square"> </li>
<li type="fa" data-value="fa-thumb-tack"  class="fa fa-thumb-tack"> </li>
<li type="fa" data-value="fa-external-link"  class="fa fa-external-link"> </li>
<li type="fa" data-value="fa-sign-in"  class="fa fa-sign-in"> </li>
<li type="fa" data-value="fa-trophy"  class="fa fa-trophy"> </li>
<li type="fa" data-value="fa-github-square"  class="fa fa-github-square"> </li>
<li type="fa" data-value="fa-upload"  class="fa fa-upload"> </li>
<li type="fa" data-value="fa-lemon-o"  class="fa fa-lemon-o"> </li>
<li type="fa" data-value="fa-phone"  class="fa fa-phone"> </li>
<li type="fa" data-value="fa-square-o"  class="fa fa-square-o"> </li>
<li type="fa" data-value="fa-bookmark-o"  class="fa fa-bookmark-o"> </li>
<li type="fa" data-value="fa-phone-square"  class="fa fa-phone-square"> </li>
<li type="fa" data-value="fa-twitter"  class="fa fa-twitter"> </li>
<li type="fa" data-value="fa-facebook"  class="fa fa-facebook"> </li>
<li type="fa" data-value="fa-github"  class="fa fa-github"> </li>
<li type="fa" data-value="fa-unlock"  class="fa fa-unlock"> </li>
<li type="fa" data-value="fa-credit-card"  class="fa fa-credit-card"> </li>
<li type="fa" data-value="fa-rss"  class="fa fa-rss"> </li>
<li type="fa" data-value="fa-hdd-o"  class="fa fa-hdd-o"> </li>
<li type="fa" data-value="fa-bullhorn"  class="fa fa-bullhorn"> </li>
<li type="fa" data-value="fa-bell"  class="fa fa-bell"> </li>
<li type="fa" data-value="fa-certificate"  class="fa fa-certificate"> </li>
<li type="fa" data-value="fa-hand-o-right"  class="fa fa-hand-o-right"> </li>
<li type="fa" data-value="fa-hand-o-left"  class="fa fa-hand-o-left"> </li>
<li type="fa" data-value="fa-hand-o-up"  class="fa fa-hand-o-up"> </li>
<li type="fa" data-value="fa-hand-o-down"  class="fa fa-hand-o-down"> </li>
<li type="fa" data-value="fa-arrow-circle-left"  class="fa fa-arrow-circle-left"> </li>
<li type="fa" data-value="fa-arrow-circle-right"  class="fa fa-arrow-circle-right"> </li>
<li type="fa" data-value="fa-arrow-circle-up"  class="fa fa-arrow-circle-up"> </li>
<li type="fa" data-value="fa-arrow-circle-down"  class="fa fa-arrow-circle-down"> </li>
<li type="fa" data-value="fa-globe"  class="fa fa-globe"> </li>
<li type="fa" data-value="fa-wrench"  class="fa fa-wrench"> </li>
<li type="fa" data-value="fa-tasks"  class="fa fa-tasks"> </li>
<li type="fa" data-value="fa-filter"  class="fa fa-filter"> </li>
<li type="fa" data-value="fa-briefcase"  class="fa fa-briefcase"> </li>
<li type="fa" data-value="fa-arrows-alt"  class="fa fa-arrows-alt"> </li>
<li type="fa" data-value="fa-group"  class="fa fa-group"> </li>
<li type="fa" data-value="fa-users"  class="fa fa-users"> </li>
<li type="fa" data-value="fa-chain"  class="fa fa-chain"> </li>
<li type="fa" data-value="fa-link"  class="fa fa-link"> </li>
<li type="fa" data-value="fa-cloud"  class="fa fa-cloud"> </li>
<li type="fa" data-value="fa-flask"  class="fa fa-flask"> </li>
<li type="fa" data-value="fa-cut"  class="fa fa-cut"> </li>
<li type="fa" data-value="fa-scissors"  class="fa fa-scissors"> </li>
<li type="fa" data-value="fa-copy"  class="fa fa-copy"> </li>
<li type="fa" data-value="fa-files-o"  class="fa fa-files-o"> </li>
<li type="fa" data-value="fa-paperclip"  class="fa fa-paperclip"> </li>
<li type="fa" data-value="fa-save"  class="fa fa-save"> </li>
<li type="fa" data-value="fa-floppy-o"  class="fa fa-floppy-o"> </li>
<li type="fa" data-value="fa-square"  class="fa fa-square"> </li>
<li type="fa" data-value="fa-navicon"  class="fa fa-navicon"> </li>
<li type="fa" data-value="fa-reorder"  class="fa fa-reorder"> </li>
<li type="fa" data-value="fa-bars"  class="fa fa-bars"> </li>
<li type="fa" data-value="fa-list-ul"  class="fa fa-list-ul"> </li>
<li type="fa" data-value="fa-list-ol"  class="fa fa-list-ol"> </li>
<li type="fa" data-value="fa-strikethrough"  class="fa fa-strikethrough"> </li>
<li type="fa" data-value="fa-underline"  class="fa fa-underline"> </li>
<li type="fa" data-value="fa-table"  class="fa fa-table"> </li>
<li type="fa" data-value="fa-magic"  class="fa fa-magic"> </li>
<li type="fa" data-value="fa-truck"  class="fa fa-truck"> </li>
<li type="fa" data-value="fa-pinterest"  class="fa fa-pinterest"> </li>
<li type="fa" data-value="fa-pinterest-square"  class="fa fa-pinterest-square"> </li>
<li type="fa" data-value="fa-google-plus-square"  class="fa fa-google-plus-square"> </li>
<li type="fa" data-value="fa-google-plus"  class="fa fa-google-plus"> </li>
<li type="fa" data-value="fa-money"  class="fa fa-money"> </li>
<li type="fa" data-value="fa-caret-down"  class="fa fa-caret-down"> </li>
<li type="fa" data-value="fa-caret-up"  class="fa fa-caret-up"> </li>
<li type="fa" data-value="fa-caret-left"  class="fa fa-caret-left"> </li>
<li type="fa" data-value="fa-caret-right"  class="fa fa-caret-right"> </li>
<li type="fa" data-value="fa-columns"  class="fa fa-columns"> </li>
<li type="fa" data-value="fa-unsorted"  class="fa fa-unsorted"> </li>
<li type="fa" data-value="fa-sort"  class="fa fa-sort"> </li>
<li type="fa" data-value="fa-sort-down"  class="fa fa-sort-down"> </li>
<li type="fa" data-value="fa-sort-desc"  class="fa fa-sort-desc"> </li>
<li type="fa" data-value="fa-sort-up"  class="fa fa-sort-up"> </li>
<li type="fa" data-value="fa-sort-asc"  class="fa fa-sort-asc"> </li>
<li type="fa" data-value="fa-envelope"  class="fa fa-envelope"> </li>
<li type="fa" data-value="fa-linkedin"  class="fa fa-linkedin"> </li>
<li type="fa" data-value="fa-rotate-left"  class="fa fa-rotate-left"> </li>
<li type="fa" data-value="fa-undo"  class="fa fa-undo"> </li>
<li type="fa" data-value="fa-legal"  class="fa fa-legal"> </li>
<li type="fa" data-value="fa-gavel"  class="fa fa-gavel"> </li>
<li type="fa" data-value="fa-dashboard"  class="fa fa-dashboard"> </li>
<li type="fa" data-value="fa-tachometer"  class="fa fa-tachometer"> </li>
<li type="fa" data-value="fa-comment-o"  class="fa fa-comment-o"> </li>
<li type="fa" data-value="fa-comments-o"  class="fa fa-comments-o"> </li>
<li type="fa" data-value="fa-flash"  class="fa fa-flash"> </li>
<li type="fa" data-value="fa-bolt"  class="fa fa-bolt"> </li>
<li type="fa" data-value="fa-sitemap"  class="fa fa-sitemap"> </li>
<li type="fa" data-value="fa-umbrella"  class="fa fa-umbrella"> </li>
<li type="fa" data-value="fa-paste"  class="fa fa-paste"> </li>
<li type="fa" data-value="fa-clipboard"  class="fa fa-clipboard"> </li>
<li type="fa" data-value="fa-lightbulb-o"  class="fa fa-lightbulb-o"> </li>
<li type="fa" data-value="fa-exchange"  class="fa fa-exchange"> </li>
<li type="fa" data-value="fa-cloud-download"  class="fa fa-cloud-download"> </li>
<li type="fa" data-value="fa-cloud-upload"  class="fa fa-cloud-upload"> </li>
<li type="fa" data-value="fa-user-md"  class="fa fa-user-md"> </li>
<li type="fa" data-value="fa-stethoscope"  class="fa fa-stethoscope"> </li>
<li type="fa" data-value="fa-suitcase"  class="fa fa-suitcase"> </li>
<li type="fa" data-value="fa-bell-o"  class="fa fa-bell-o"> </li>
<li type="fa" data-value="fa-coffee"  class="fa fa-coffee"> </li>
<li type="fa" data-value="fa-cutlery"  class="fa fa-cutlery"> </li>
<li type="fa" data-value="fa-file-text-o"  class="fa fa-file-text-o"> </li>
<li type="fa" data-value="fa-building-o"  class="fa fa-building-o"> </li>
<li type="fa" data-value="fa-hospital-o"  class="fa fa-hospital-o"> </li>
<li type="fa" data-value="fa-ambulance"  class="fa fa-ambulance"> </li>
<li type="fa" data-value="fa-medkit"  class="fa fa-medkit"> </li>
<li type="fa" data-value="fa-fighter-jet"  class="fa fa-fighter-jet"> </li>
<li type="fa" data-value="fa-beer"  class="fa fa-beer"> </li>
<li type="fa" data-value="fa-h-square"  class="fa fa-h-square"> </li>
<li type="fa" data-value="fa-plus-square"  class="fa fa-plus-square"> </li>
<li type="fa" data-value="fa-angle-double-left"  class="fa fa-angle-double-left"> </li>
<li type="fa" data-value="fa-angle-double-right"  class="fa fa-angle-double-right"> </li>
<li type="fa" data-value="fa-angle-double-up"  class="fa fa-angle-double-up"> </li>
<li type="fa" data-value="fa-angle-double-down"  class="fa fa-angle-double-down"> </li>
<li type="fa" data-value="fa-angle-left"  class="fa fa-angle-left"> </li>
<li type="fa" data-value="fa-angle-right"  class="fa fa-angle-right"> </li>
<li type="fa" data-value="fa-angle-up"  class="fa fa-angle-up"> </li>
<li type="fa" data-value="fa-angle-down"  class="fa fa-angle-down"> </li>
<li type="fa" data-value="fa-desktop"  class="fa fa-desktop"> </li>
<li type="fa" data-value="fa-laptop"  class="fa fa-laptop"> </li>
<li type="fa" data-value="fa-tablet"  class="fa fa-tablet"> </li>
<li type="fa" data-value="fa-mobile-phone"  class="fa fa-mobile-phone"> </li>
<li type="fa" data-value="fa-mobile"  class="fa fa-mobile"> </li>
<li type="fa" data-value="fa-circle-o"  class="fa fa-circle-o"> </li>
<li type="fa" data-value="fa-quote-left"  class="fa fa-quote-left"> </li>
<li type="fa" data-value="fa-quote-right"  class="fa fa-quote-right"> </li>
<li type="fa" data-value="fa-spinner"  class="fa fa-spinner"> </li>
<li type="fa" data-value="fa-circle"  class="fa fa-circle"> </li>
<li type="fa" data-value="fa-mail-reply"  class="fa fa-mail-reply"> </li>
<li type="fa" data-value="fa-reply"  class="fa fa-reply"> </li>
<li type="fa" data-value="fa-github-alt"  class="fa fa-github-alt"> </li>
<li type="fa" data-value="fa-folder-o"  class="fa fa-folder-o"> </li>
<li type="fa" data-value="fa-folder-open-o"  class="fa fa-folder-open-o"> </li>
<li type="fa" data-value="fa-smile-o"  class="fa fa-smile-o"> </li>
<li type="fa" data-value="fa-frown-o"  class="fa fa-frown-o"> </li>
<li type="fa" data-value="fa-meh-o"  class="fa fa-meh-o"> </li>
<li type="fa" data-value="fa-gamepad"  class="fa fa-gamepad"> </li>
<li type="fa" data-value="fa-keyboard-o"  class="fa fa-keyboard-o"> </li>
<li type="fa" data-value="fa-flag-o"  class="fa fa-flag-o"> </li>
<li type="fa" data-value="fa-flag-checkered"  class="fa fa-flag-checkered"> </li>
<li type="fa" data-value="fa-terminal"  class="fa fa-terminal"> </li>
<li type="fa" data-value="fa-code"  class="fa fa-code"> </li>
<li type="fa" data-value="fa-mail-reply-all"  class="fa fa-mail-reply-all"> </li>
<li type="fa" data-value="fa-reply-all"  class="fa fa-reply-all"> </li>
<li type="fa" data-value="fa-star-half-empty"  class="fa fa-star-half-empty"> </li>
<li type="fa" data-value="fa-star-half-full"  class="fa fa-star-half-full"> </li>
<li type="fa" data-value="fa-star-half-o"  class="fa fa-star-half-o"> </li>
<li type="fa" data-value="fa-location-arrow"  class="fa fa-location-arrow"> </li>
<li type="fa" data-value="fa-crop"  class="fa fa-crop"> </li>
<li type="fa" data-value="fa-code-fork"  class="fa fa-code-fork"> </li>
<li type="fa" data-value="fa-unlink"  class="fa fa-unlink"> </li>
<li type="fa" data-value="fa-chain-broken"  class="fa fa-chain-broken"> </li>
<li type="fa" data-value="fa-question"  class="fa fa-question"> </li>
<li type="fa" data-value="fa-info"  class="fa fa-info"> </li>
<li type="fa" data-value="fa-exclamation"  class="fa fa-exclamation"> </li>
<li type="fa" data-value="fa-superscript"  class="fa fa-superscript"> </li>
<li type="fa" data-value="fa-subscript"  class="fa fa-subscript"> </li>
<li type="fa" data-value="fa-eraser"  class="fa fa-eraser"> </li>
<li type="fa" data-value="fa-puzzle-piece"  class="fa fa-puzzle-piece"> </li>
<li type="fa" data-value="fa-microphone"  class="fa fa-microphone"> </li>
<li type="fa" data-value="fa-microphone-slash"  class="fa fa-microphone-slash"> </li>
<li type="fa" data-value="fa-shield"  class="fa fa-shield"> </li>
<li type="fa" data-value="fa-calendar-o"  class="fa fa-calendar-o"> </li>
<li type="fa" data-value="fa-fire-extinguisher"  class="fa fa-fire-extinguisher"> </li>
<li type="fa" data-value="fa-rocket"  class="fa fa-rocket"> </li>
<li type="fa" data-value="fa-maxcdn"  class="fa fa-maxcdn"> </li>
<li type="fa" data-value="fa-chevron-circle-left"  class="fa fa-chevron-circle-left"> </li>
<li type="fa" data-value="fa-chevron-circle-right"  class="fa fa-chevron-circle-right"> </li>
<li type="fa" data-value="fa-chevron-circle-up"  class="fa fa-chevron-circle-up"> </li>
<li type="fa" data-value="fa-chevron-circle-down"  class="fa fa-chevron-circle-down"> </li>
<li type="fa" data-value="fa-anchor"  class="fa fa-anchor"> </li>
<li type="fa" data-value="fa-unlock-alt"  class="fa fa-unlock-alt"> </li>
<li type="fa" data-value="fa-bullseye"  class="fa fa-bullseye"> </li>
<li type="fa" data-value="fa-ellipsis-h"  class="fa fa-ellipsis-h"> </li>
<li type="fa" data-value="fa-ellipsis-v"  class="fa fa-ellipsis-v"> </li>
<li type="fa" data-value="fa-rss-square"  class="fa fa-rss-square"> </li>
<li type="fa" data-value="fa-play-circle"  class="fa fa-play-circle"> </li>
<li type="fa" data-value="fa-ticket"  class="fa fa-ticket"> </li>
<li type="fa" data-value="fa-minus-square"  class="fa fa-minus-square"> </li>
<li type="fa" data-value="fa-minus-square-o"  class="fa fa-minus-square-o"> </li>
<li type="fa" data-value="fa-level-up"  class="fa fa-level-up"> </li>
<li type="fa" data-value="fa-level-down"  class="fa fa-level-down"> </li>
<li type="fa" data-value="fa-check-square"  class="fa fa-check-square"> </li>
<li type="fa" data-value="fa-pencil-square"  class="fa fa-pencil-square"> </li>
<li type="fa" data-value="fa-external-link-square"  class="fa fa-external-link-square"> </li>
<li type="fa" data-value="fa-share-square"  class="fa fa-share-square"> </li>
<li type="fa" data-value="fa-compass"  class="fa fa-compass"> </li>
<li type="fa" data-value="fa-toggle-down"  class="fa fa-toggle-down"> </li>
<li type="fa" data-value="fa-caret-square-o-down"  class="fa fa-caret-square-o-down"> </li>
<li type="fa" data-value="fa-toggle-up"  class="fa fa-toggle-up"> </li>
<li type="fa" data-value="fa-caret-square-o-up"  class="fa fa-caret-square-o-up"> </li>
<li type="fa" data-value="fa-toggle-right"  class="fa fa-toggle-right"> </li>
<li type="fa" data-value="fa-caret-square-o-right"  class="fa fa-caret-square-o-right"> </li>
<li type="fa" data-value="fa-euro"  class="fa fa-euro"> </li>
<li type="fa" data-value="fa-eur"  class="fa fa-eur"> </li>
<li type="fa" data-value="fa-gbp"  class="fa fa-gbp"> </li>
<li type="fa" data-value="fa-dollar"  class="fa fa-dollar"> </li>
<li type="fa" data-value="fa-usd"  class="fa fa-usd"> </li>
<li type="fa" data-value="fa-rupee"  class="fa fa-rupee"> </li>
<li type="fa" data-value="fa-inr"  class="fa fa-inr"> </li>
<li type="fa" data-value="fa-cny"  class="fa fa-cny"> </li>
<li type="fa" data-value="fa-rmb"  class="fa fa-rmb"> </li>
<li type="fa" data-value="fa-yen"  class="fa fa-yen"> </li>
<li type="fa" data-value="fa-jpy"  class="fa fa-jpy"> </li>
<li type="fa" data-value="fa-ruble"  class="fa fa-ruble"> </li>
<li type="fa" data-value="fa-rouble"  class="fa fa-rouble"> </li>
<li type="fa" data-value="fa-rub"  class="fa fa-rub"> </li>
<li type="fa" data-value="fa-won"  class="fa fa-won"> </li>
<li type="fa" data-value="fa-krw"  class="fa fa-krw"> </li>
<li type="fa" data-value="fa-bitcoin"  class="fa fa-bitcoin"> </li>
<li type="fa" data-value="fa-btc"  class="fa fa-btc"> </li>
<li type="fa" data-value="fa-file"  class="fa fa-file"> </li>
<li type="fa" data-value="fa-file-text"  class="fa fa-file-text"> </li>
<li type="fa" data-value="fa-sort-alpha-asc"  class="fa fa-sort-alpha-asc"> </li>
<li type="fa" data-value="fa-sort-alpha-desc"  class="fa fa-sort-alpha-desc"> </li>
<li type="fa" data-value="fa-sort-amount-asc"  class="fa fa-sort-amount-asc"> </li>
<li type="fa" data-value="fa-sort-amount-desc"  class="fa fa-sort-amount-desc"> </li>
<li type="fa" data-value="fa-sort-numeric-asc"  class="fa fa-sort-numeric-asc"> </li>
<li type="fa" data-value="fa-sort-numeric-desc"  class="fa fa-sort-numeric-desc"> </li>
<li type="fa" data-value="fa-thumbs-up"  class="fa fa-thumbs-up"> </li>
<li type="fa" data-value="fa-thumbs-down"  class="fa fa-thumbs-down"> </li>
<li type="fa" data-value="fa-youtube-square"  class="fa fa-youtube-square"> </li>
<li type="fa" data-value="fa-youtube"  class="fa fa-youtube"> </li>
<li type="fa" data-value="fa-xing"  class="fa fa-xing"> </li>
<li type="fa" data-value="fa-xing-square"  class="fa fa-xing-square"> </li>
<li type="fa" data-value="fa-youtube-play"  class="fa fa-youtube-play"> </li>
<li type="fa" data-value="fa-dropbox"  class="fa fa-dropbox"> </li>
<li type="fa" data-value="fa-stack-overflow"  class="fa fa-stack-overflow"> </li>
<li type="fa" data-value="fa-instagram"  class="fa fa-instagram"> </li>
<li type="fa" data-value="fa-flickr"  class="fa fa-flickr"> </li>
<li type="fa" data-value="fa-adn"  class="fa fa-adn"> </li>
<li type="fa" data-value="fa-bitbucket"  class="fa fa-bitbucket"> </li>
<li type="fa" data-value="fa-bitbucket-square"  class="fa fa-bitbucket-square"> </li>
<li type="fa" data-value="fa-tumblr"  class="fa fa-tumblr"> </li>
<li type="fa" data-value="fa-tumblr-square"  class="fa fa-tumblr-square"> </li>
<li type="fa" data-value="fa-long-arrow-down"  class="fa fa-long-arrow-down"> </li>
<li type="fa" data-value="fa-long-arrow-up"  class="fa fa-long-arrow-up"> </li>
<li type="fa" data-value="fa-long-arrow-left"  class="fa fa-long-arrow-left"> </li>
<li type="fa" data-value="fa-long-arrow-right"  class="fa fa-long-arrow-right"> </li>
<li type="fa" data-value="fa-apple"  class="fa fa-apple"> </li>
<li type="fa" data-value="fa-windows"  class="fa fa-windows"> </li>
<li type="fa" data-value="fa-android"  class="fa fa-android"> </li>
<li type="fa" data-value="fa-linux"  class="fa fa-linux"> </li>
<li type="fa" data-value="fa-dribbble"  class="fa fa-dribbble"> </li>
<li type="fa" data-value="fa-skype"  class="fa fa-skype"> </li>
<li type="fa" data-value="fa-foursquare"  class="fa fa-foursquare"> </li>
<li type="fa" data-value="fa-trello"  class="fa fa-trello"> </li>
<li type="fa" data-value="fa-female"  class="fa fa-female"> </li>
<li type="fa" data-value="fa-male"  class="fa fa-male"> </li>
<li type="fa" data-value="fa-gittip"  class="fa fa-gittip"> </li>
<li type="fa" data-value="fa-sun-o"  class="fa fa-sun-o"> </li>
<li type="fa" data-value="fa-moon-o"  class="fa fa-moon-o"> </li>
<li type="fa" data-value="fa-archive"  class="fa fa-archive"> </li>
<li type="fa" data-value="fa-bug"  class="fa fa-bug"> </li>
<li type="fa" data-value="fa-vk"  class="fa fa-vk"> </li>
<li type="fa" data-value="fa-weibo"  class="fa fa-weibo"> </li>
<li type="fa" data-value="fa-renren"  class="fa fa-renren"> </li>
<li type="fa" data-value="fa-pagelines"  class="fa fa-pagelines"> </li>
<li type="fa" data-value="fa-stack-exchange"  class="fa fa-stack-exchange"> </li>
<li type="fa" data-value="fa-arrow-circle-o-right"  class="fa fa-arrow-circle-o-right"> </li>
<li type="fa" data-value="fa-arrow-circle-o-left"  class="fa fa-arrow-circle-o-left"> </li>
<li type="fa" data-value="fa-toggle-left"  class="fa fa-toggle-left"> </li>
<li type="fa" data-value="fa-caret-square-o-left"  class="fa fa-caret-square-o-left"> </li>
<li type="fa" data-value="fa-dot-circle-o"  class="fa fa-dot-circle-o"> </li>
<li type="fa" data-value="fa-wheelchair"  class="fa fa-wheelchair"> </li>
<li type="fa" data-value="fa-vimeo-square"  class="fa fa-vimeo-square"> </li>
<li type="fa" data-value="fa-turkish-lira"  class="fa fa-turkish-lira"> </li>
<li type="fa" data-value="fa-try"  class="fa fa-try"> </li>
<li type="fa" data-value="fa-plus-square-o"  class="fa fa-plus-square-o"> </li>
<li type="fa" data-value="fa-space-shuttle"  class="fa fa-space-shuttle"> </li>
<li type="fa" data-value="fa-slack"  class="fa fa-slack"> </li>
<li type="fa" data-value="fa-envelope-square"  class="fa fa-envelope-square"> </li>
<li type="fa" data-value="fa-wordpress"  class="fa fa-wordpress"> </li>
<li type="fa" data-value="fa-openid"  class="fa fa-openid"> </li>
<li type="fa" data-value="fa-institution"  class="fa fa-institution"> </li>
<li type="fa" data-value="fa-bank"  class="fa fa-bank"> </li>
<li type="fa" data-value="fa-university"  class="fa fa-university"> </li>
<li type="fa" data-value="fa-mortar-board"  class="fa fa-mortar-board"> </li>
<li type="fa" data-value="fa-graduation-cap"  class="fa fa-graduation-cap"> </li>
<li type="fa" data-value="fa-yahoo"  class="fa fa-yahoo"> </li>
<li type="fa" data-value="fa-google"  class="fa fa-google"> </li>
<li type="fa" data-value="fa-reddit"  class="fa fa-reddit"> </li>
<li type="fa" data-value="fa-reddit-square"  class="fa fa-reddit-square"> </li>
<li type="fa" data-value="fa-stumbleupon-circle"  class="fa fa-stumbleupon-circle"> </li>
<li type="fa" data-value="fa-stumbleupon"  class="fa fa-stumbleupon"> </li>
<li type="fa" data-value="fa-delicious"  class="fa fa-delicious"> </li>
<li type="fa" data-value="fa-digg"  class="fa fa-digg"> </li>
<li type="fa" data-value="fa-pied-piper"  class="fa fa-pied-piper"> </li>
<li type="fa" data-value="fa-pied-piper-alt"  class="fa fa-pied-piper-alt"> </li>
<li type="fa" data-value="fa-drupal"  class="fa fa-drupal"> </li>
<li type="fa" data-value="fa-joomla"  class="fa fa-joomla"> </li>
<li type="fa" data-value="fa-language"  class="fa fa-language"> </li>
<li type="fa" data-value="fa-fax"  class="fa fa-fax"> </li>
<li type="fa" data-value="fa-building"  class="fa fa-building"> </li>
<li type="fa" data-value="fa-child"  class="fa fa-child"> </li>
<li type="fa" data-value="fa-paw"  class="fa fa-paw"> </li>
<li type="fa" data-value="fa-spoon"  class="fa fa-spoon"> </li>
<li type="fa" data-value="fa-cube"  class="fa fa-cube"> </li>
<li type="fa" data-value="fa-cubes"  class="fa fa-cubes"> </li>
<li type="fa" data-value="fa-behance"  class="fa fa-behance"> </li>
<li type="fa" data-value="fa-behance-square"  class="fa fa-behance-square"> </li>
<li type="fa" data-value="fa-steam"  class="fa fa-steam"> </li>
<li type="fa" data-value="fa-steam-square"  class="fa fa-steam-square"> </li>
<li type="fa" data-value="fa-recycle"  class="fa fa-recycle"> </li>
<li type="fa" data-value="fa-automobile"  class="fa fa-automobile"> </li>
<li type="fa" data-value="fa-car"  class="fa fa-car"> </li>
<li type="fa" data-value="fa-cab"  class="fa fa-cab"> </li>
<li type="fa" data-value="fa-taxi"  class="fa fa-taxi"> </li>
<li type="fa" data-value="fa-tree"  class="fa fa-tree"> </li>
<li type="fa" data-value="fa-spotify"  class="fa fa-spotify"> </li>
<li type="fa" data-value="fa-deviantart"  class="fa fa-deviantart"> </li>
<li type="fa" data-value="fa-soundcloud"  class="fa fa-soundcloud"> </li>
<li type="fa" data-value="fa-database"  class="fa fa-database"> </li>
<li type="fa" data-value="fa-file-pdf-o"  class="fa fa-file-pdf-o"> </li>
<li type="fa" data-value="fa-file-word-o"  class="fa fa-file-word-o"> </li>
<li type="fa" data-value="fa-file-excel-o"  class="fa fa-file-excel-o"> </li>
<li type="fa" data-value="fa-file-powerpoint-o"  class="fa fa-file-powerpoint-o"> </li>
<li type="fa" data-value="fa-file-photo-o"  class="fa fa-file-photo-o"> </li>
<li type="fa" data-value="fa-file-picture-o"  class="fa fa-file-picture-o"> </li>
<li type="fa" data-value="fa-file-image-o"  class="fa fa-file-image-o"> </li>
<li type="fa" data-value="fa-file-zip-o"  class="fa fa-file-zip-o"> </li>
<li type="fa" data-value="fa-file-archive-o"  class="fa fa-file-archive-o"> </li>
<li type="fa" data-value="fa-file-sound-o"  class="fa fa-file-sound-o"> </li>
<li type="fa" data-value="fa-file-audio-o"  class="fa fa-file-audio-o"> </li>
<li type="fa" data-value="fa-file-movie-o"  class="fa fa-file-movie-o"> </li>
<li type="fa" data-value="fa-file-video-o"  class="fa fa-file-video-o"> </li>
<li type="fa" data-value="fa-file-code-o"  class="fa fa-file-code-o"> </li>
<li type="fa" data-value="fa-vine"  class="fa fa-vine"> </li>
<li type="fa" data-value="fa-codepen"  class="fa fa-codepen"> </li>
<li type="fa" data-value="fa-jsfiddle"  class="fa fa-jsfiddle"> </li>
<li type="fa" data-value="fa-life-bouy"  class="fa fa-life-bouy"> </li>
<li type="fa" data-value="fa-life-buoy"  class="fa fa-life-buoy"> </li>
<li type="fa" data-value="fa-life-saver"  class="fa fa-life-saver"> </li>
<li type="fa" data-value="fa-support"  class="fa fa-support"> </li>
<li type="fa" data-value="fa-life-ring"  class="fa fa-life-ring"> </li>
<li type="fa" data-value="fa-circle-o-notch"  class="fa fa-circle-o-notch"> </li>
<li type="fa" data-value="fa-ra"  class="fa fa-ra"> </li>
<li type="fa" data-value="fa-rebel"  class="fa fa-rebel"> </li>
<li type="fa" data-value="fa-ge"  class="fa fa-ge"> </li>
<li type="fa" data-value="fa-empire"  class="fa fa-empire"> </li>
<li type="fa" data-value="fa-git-square"  class="fa fa-git-square"> </li>
<li type="fa" data-value="fa-git"  class="fa fa-git"> </li>
<li type="fa" data-value="fa-hacker-news"  class="fa fa-hacker-news"> </li>
<li type="fa" data-value="fa-tencent-weibo"  class="fa fa-tencent-weibo"> </li>
<li type="fa" data-value="fa-qq"  class="fa fa-qq"> </li>
<li type="fa" data-value="fa-wechat"  class="fa fa-wechat"> </li>
<li type="fa" data-value="fa-weixin"  class="fa fa-weixin"> </li>
<li type="fa" data-value="fa-send"  class="fa fa-send"> </li>
<li type="fa" data-value="fa-paper-plane"  class="fa fa-paper-plane"> </li>
<li type="fa" data-value="fa-send-o"  class="fa fa-send-o"> </li>
<li type="fa" data-value="fa-paper-plane-o"  class="fa fa-paper-plane-o"> </li>
<li type="fa" data-value="fa-history"  class="fa fa-history"> </li>
<li type="fa" data-value="fa-circle-thin"  class="fa fa-circle-thin"> </li>
<li type="fa" data-value="fa-header"  class="fa fa-header"> </li>
<li type="fa" data-value="fa-paragraph"  class="fa fa-paragraph"> </li>
<li type="fa" data-value="fa-sliders"  class="fa fa-sliders"> </li>
<li type="fa" data-value="fa-share-alt"  class="fa fa-share-alt"> </li>
<li type="fa" data-value="fa-share-alt-square"  class="fa fa-share-alt-square"> </li>
<li type="fa" data-value="fa-bomb"  class="fa fa-bomb"> </li>
<li type="fa" data-value="fa-soccer-ball-o"  class="fa fa-soccer-ball-o"> </li>
<li type="fa" data-value="fa-futbol-o"  class="fa fa-futbol-o"> </li>
<li type="fa" data-value="fa-tty"  class="fa fa-tty"> </li>
<li type="fa" data-value="fa-binoculars"  class="fa fa-binoculars"> </li>
<li type="fa" data-value="fa-plug"  class="fa fa-plug"> </li>
<li type="fa" data-value="fa-slideshare"  class="fa fa-slideshare"> </li>
<li type="fa" data-value="fa-twitch"  class="fa fa-twitch"> </li>
<li type="fa" data-value="fa-yelp"  class="fa fa-yelp"> </li>
<li type="fa" data-value="fa-newspaper-o"  class="fa fa-newspaper-o"> </li>
<li type="fa" data-value="fa-wifi"  class="fa fa-wifi"> </li>
<li type="fa" data-value="fa-calculator"  class="fa fa-calculator"> </li>
<li type="fa" data-value="fa-paypal"  class="fa fa-paypal"> </li>
<li type="fa" data-value="fa-google-wallet"  class="fa fa-google-wallet"> </li>
<li type="fa" data-value="fa-cc-visa"  class="fa fa-cc-visa"> </li>
<li type="fa" data-value="fa-cc-mastercard"  class="fa fa-cc-mastercard"> </li>
<li type="fa" data-value="fa-cc-discover"  class="fa fa-cc-discover"> </li>
<li type="fa" data-value="fa-cc-amex"  class="fa fa-cc-amex"> </li>
<li type="fa" data-value="fa-cc-paypal"  class="fa fa-cc-paypal"> </li>
<li type="fa" data-value="fa-cc-stripe"  class="fa fa-cc-stripe"> </li>
<li type="fa" data-value="fa-bell-slash"  class="fa fa-bell-slash"> </li>
<li type="fa" data-value="fa-bell-slash-o"  class="fa fa-bell-slash-o"> </li>
<li type="fa" data-value="fa-trash"  class="fa fa-trash"> </li>
<li type="fa" data-value="fa-copyright"  class="fa fa-copyright"> </li>
<li type="fa" data-value="fa-at"  class="fa fa-at"> </li>
<li type="fa" data-value="fa-eyedropper"  class="fa fa-eyedropper"> </li>
<li type="fa" data-value="fa-paint-brush"  class="fa fa-paint-brush"> </li>
<li type="fa" data-value="fa-birthday-cake"  class="fa fa-birthday-cake"> </li>
<li type="fa" data-value="fa-area-chart"  class="fa fa-area-chart"> </li>
<li type="fa" data-value="fa-pie-chart"  class="fa fa-pie-chart"> </li>
<li type="fa" data-value="fa-line-chart"  class="fa fa-line-chart"> </li>
<li type="fa" data-value="fa-lastfm"  class="fa fa-lastfm"> </li>
<li type="fa" data-value="fa-lastfm-square"  class="fa fa-lastfm-square"> </li>
<li type="fa" data-value="fa-toggle-off"  class="fa fa-toggle-off"> </li>
<li type="fa" data-value="fa-toggle-on"  class="fa fa-toggle-on"> </li>
<li type="fa" data-value="fa-bicycle"  class="fa fa-bicycle"> </li>
<li type="fa" data-value="fa-bus"  class="fa fa-bus"> </li>
<li type="fa" data-value="fa-ioxhost"  class="fa fa-ioxhost"> </li>
<li type="fa" data-value="fa-angellist"  class="fa fa-angellist"> </li>
<li type="fa" data-value="fa-cc"  class="fa fa-cc"> </li>
<li type="fa" data-value="fa-shekel"  class="fa fa-shekel"> </li>
<li type="fa" data-value="fa-sheqel"  class="fa fa-sheqel"> </li>
<li type="fa" data-value="fa-ils"  class="fa fa-ils"> </li>
<li type="fa" data-value="fa-meanpath"  class="fa fa-meanpath"> </li>';
$ebs_effectlist=array('none' => 'None', 'pulse' => 'Pulse', 'flipInX' => 'flipInX', 'fadeIn' => 'fadeIn', 'fadeInUp' => 'fadeInUp', 'fadeInDown' => 'fadeInDown', 'fadeInLeft' => 'fadeInLeft', 'fadeInRight' => 'fadeInRight', 'fadeInUpBig' => 'fadeInUpBig', 'fadeInDownBig' => 'fadeInDownBig', 'fadeInRightBig' => 'fadeInRightBig', 'bounceIn' => 'bounceIn', 'bounceInDown' => 'bounceInDown', 'bounceInLeft' => 'bounceInLeft', 'bounceInRight' => 'bounceInRight', 'rotateInUpLeft' => 'rotateInUpLeft', 'rotateInDownLeft' => 'rotateInDownLeft', 'rotateInUpRight' => 'rotateInUpRight', 'rotateInDownRight' => 'rotateInDownRight', 'lightSpeedRight' => 'lightSpeedRight', 'lightSpeedLeft' => 'lightSpeedLeft', 'rollin' => 'rollin');

/*
 * this is makup to add insert, preview and cancel button under every shortcode popup
 */
ob_start();
?>

<p class="submit ebsp_button_section">
        <button class="ebs-insert-shortcode button"><i class="glyphicon glyphicon-ok"></i> <?php  _e('Insert',$ebsp_domain_name);?></button><button class="ebsp-cancel-button button "><i class="glyphicon glyphicon-remove"></i> <?php _e('Cancel',$ebsp_domain_name); ?></button><button class="ebsp-preview-button button "><i class="glyphicon glyphicon-eye-open"></i> <?php _e('Preview',$ebsp_domain_name); ?></button><span class="spinner" style="display: none"></span>
    </p>
<?php
$ebs_button_section_markup=ob_get_clean();
/*
 * Button markup ends
 */
$ajaxwidget_array=array();

add_action('wp_ajax_fetch_help_content','callback_fetch_help_content');
add_action('wp_ajax_save_ebs_preset','callback_save_ebs_preset');
add_action('wp_ajax_ebs_get_preset_data','get_ebs_shortcode_markup');
add_action('wp_ajax_remove_existing_preset','callback_remove_existing_preset');
/*
 * function to get templates of shortcode, default on load and return with saved values if loading any previously saved
 */
add_action('wp_ajax_fecth_template_content','callback_fecth_template_content');
function callback_fecth_template_content(){
    if(!session_id()){
        session_start();
    }

    $ebsdata=$_POST['data'];
    $return_ebs=get_ebs_shortcode_markup($ebsdata);

    $return_array=array('markup'=>$return_ebs['markup'],'ebsData'=>$return_ebs['ebsData']);
    echo json_encode($return_array);
    die();
}


function check_ebs_selected($name,$val){
    echo isset($name) && $name==$val?'selected="selected"':'';
}
function check_ebs_checked($name,$attr,$val){
    echo isset($name[$attr]) && $name[$attr]==$val?'checked="checked"':'';
}
/*
 * Function to return help content (example and description) of shortcode
 */
add_action('wp_ajax_fecth_template_help_data','callback_fecth_template_help_data');
function callback_fecth_template_help_data(){
    $ebsdata=$_POST['data'];
    $page_url=get_the_permalink(get_page_by_path(EBS_HELP_PAGE, OBJECT, 'osc_ebsp'));
    $page_url=add_query_arg('element',$ebsdata['name'],$page_url);
   echo $help_content='<iframe id="frame_'.$ebsdata['name'].'" src="'.$page_url.'" width="100%" ><div class="loading-img-outer"><img class="loading-img" src="'.EBS_ASSET_URL.'images/ebs-loading.png"></div></iframe>';
    die();
}
/*
 * get shortcode markup based on ajax post data
 */
function get_ebs_shortcode_markup($ebsdata){
    global $glyphicons,$faicons,$ebs_button_section_markup,$ebsp_domain_name,$ebs_effectlist,$wpdb;
    if(isset($_POST['action']) && $_POST['action']=='ebs_get_preset_data'){
        $presets = "Select preset from " . $wpdb->prefix . "ebs_shortcode_preset where id={$_POST['id']}";
        // Presets has been found
        $output='';
//        $presetArray=array();
        $presets=$wpdb->get_var($presets);
        $presetArray=unserialize($presets);
//        print_r($presetArray);
        $sData=$presetArray;
        $ebsdata=$_POST['data'];
        global ${$ebsdata['name'].'_data'};

    } else{
       global ${$ebsdata['name'].'_data'};
        $sData=${$ebsdata['name'].'_data'};
    }

    $faincude='';
    $fa_icon=get_option('EBS_INCLUDE_FA',1);
    if($fa_icon==1){
        $faincude=  '<h4>Font Awesome</h4><ul name="oscitas-heading-icon_data" class="oscitas-heading-icon_data">'.$faicons.'</ul>';
        $faincudetitle=  '<h4>Font Awesome</h4><ul name="oscitas-heading-icon_datatitle" class="oscitas-heading-icon_data">'.$faicons.'</ul>';
    }
    $icon_content=' <h4>Glyphicons</h4><ul name="oscitas-heading-icon_data" class="oscitas-heading-icon_data">'.$glyphicons.'</ul>'.$faincude;
    $icon_content_title=' <h4>Glyphicons</h4><ul name="oscitas-heading-icon_datatitle" class="oscitas-heading-icon_data">'.$glyphicons.'</ul>'.$faincudetitle;
    $column_number=get_option('EBS_COLUMN_NUM',12);
    $column_number=intval($column_number)>0?$column_number:12;
    $twocoloutput='';$threecoloutput='';
    $twocol=checkpossible_two_column_division($column_number,isset($sData['twocolopt'])?$sData['twocolopt']:'');
    $threecol=checkpossible_three_column_division($column_number,isset($sData['threecolopt'])?$sData['threecolopt']:'');
    if($twocol){
        $twocoloutput='<tr id="wptwo" style="display:none;">
				<th><label for="oscitas-two-columns">'. __('2 column division',$ebsp_domain_name).'</label></th>
				<td><select name="twocolopt" id="oscitas-two-columns" class="osc-change-col">'.$twocol.'
				</select>
				 <span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="'. __('Choose a column division structure, it will be applicable on large screen only, you can customize column structure for every screen type manually',$ebsp_domain_name).'"></td>
			</tr>';
    }
    if($threecol){
        $threecoloutput='<tr id="wpthree" style="display:none;">
				<th><label for="oscitas-three-columns">'. __('3 column division',$ebsp_domain_name).'</label></th>
				<td><select name="threecolopt" id="oscitas-three-columns" class="osc-change-col">'.$threecol.'
				</select>
				<span class="osc_tootltip help_tooltip" data-toggle="tooltip" title="'. __('Choose a column division structure, it will be applicable on large screen only, you can customize column structure for every screen type manually',$ebsp_domain_name).'"></td>
			</tr>';
    }

    $preset_markup='
    <div class="ebsp-generator-presets alignright">
    <input type="hidden" value="" name="current_preset" id="ebs_current_preset">
        <a href="javascript:void(0);" class="button button-large ebs-gp-button"><i class="fa fa-bars"></i>'. __( 'Templates', $ebsp_domain_name ).'</a>
        <div class="ebsp-gp-popup">
            <div class="ebsp-gp-head">
                <a href="javascript:void(0);" class="button button-small button-primary ebs-gp-new">'. __( 'Save', $ebsp_domain_name ).'</a>
                <a href="javascript:void(0);" class="button button-small button-primary ebs-gp-new_as ebs-gp-new">'. __( 'Save As', $ebsp_domain_name ).'</a>
            </div>
            <div class="ebsp-gp-list">
               '. ebs_get_presets_list($ebsdata['name']).'
            </div>
        </div>
    </div>';



    $ebs_prefix=get_option('EBS_SHORTCODE_PREFIX','ebs_');

    $bs_sorted_shortcode_array=ebs_shortcodes();
    $element=isset($bs_sorted_shortcode_array['primary'][$ebsdata['name']])?$bs_sorted_shortcode_array['primary'][$ebsdata['name']]:$bs_sorted_shortcode_array['secondary'][$ebsdata['name']];

    $path=ebs_get_shortcode_path($element);


    include $path.'/template/'.$ebsdata['name'].'/html.php';
//    $page_url=get_permalink(get_page_by_path(EBS_HELP_PAGE, OBJECT, 'osc_ebsp'));
//    $page_url=add_query_arg('element',$ebsdata['name'],$page_url);
//    $help_content='<iframe id="frame_'.$ebsdata['name'].'" src="'.$page_url.'" width="100%" ><div class="loading-img-outer"><img class="loading-img" src="'.EBS_ASSET_URL.'images/ebs-loading.png"></div></iframe>';
//    $return_array=array('markup'=>$return_ebs,'help'=>$help_content);

    $retrunArray=array('markup'=>$return_ebs,'ebsData'=>$sData);
    if(isset($_POST['action']) && $_POST['action']=='ebs_get_preset_data'){
        echo json_encode($retrunArray);
        die();

    } else{
        return $retrunArray;

    }
}

/*
 * delete an saved template
 */
function callback_remove_existing_preset(){
    global $wpdb,$ebsp_domain_name;

    $presets = "DELETE from " . $wpdb->prefix . "ebs_shortcode_preset where id={$_POST['id']}";
    $presets=$wpdb->query($presets);


    die();
}
/*
 * get list of pre saved templates/presets
 */
function ebs_get_presets_list($element=''){
    global $wpdb,$ebsp_domain_name;
    $postfix=$element!=''?" where shortcode='{$element}'":'';
    $presets = "Select * from " . $wpdb->prefix . "ebs_shortcode_preset".$postfix;
    // Presets has been found
    $output='';
    $presets=$wpdb->get_results($presets);
    if ( count( $presets ) ) {
        // Print the presets
        foreach( $presets as $preset ) {
            $output.= '<span id="ebs_preset_val_' . $preset->id. '" class="get_preset_data" data-id="' . $preset->id . '"><em>' . stripslashes( $preset->name ) . '</em> <i class="fa fa-times"></i></span>';
        }
        // Hide default text

    }
    // Presets doesn't found
    else {
        $output.='<b class="not_found">'.__( 'Templates not found', $ebsp_domain_name ).'</b>';
    }
    return $output;
}
/*
 * function to fetch help content of requested shortcode
 */
function callback_fetch_help_content(){
    $page_url=get_permalink(get_page_by_path(EBS_HELP_PAGE, OBJECT, 'osc_ebsp'));
    $page_url=add_query_arg('element',$_POST['element'],$page_url);
   echo $help_content='<iframe id="frame_'.$_POST['element'].'" src="'.$page_url.'" width="100%"></iframe>';
    die();
}
/*
 *function to save ebs shortcode template/preset
 */
function callback_save_ebs_preset(){

global $wpdb;
    parse_str($_POST['preset'],$preset_array);
    $preset_array=serialize($preset_array);
    if(isset($_POST['id'])){
        $ebsquery="UPDATE " . $wpdb->prefix . "ebs_shortcode_preset set preset='{$preset_array}' where id={$_POST['id']}";
        $queryres=$wpdb->query($ebsquery);
    } else{
        $ebsquery="INSERT INTO " . $wpdb->prefix . "ebs_shortcode_preset (shortcode,name,preset) values('{$_POST['shortcode']}','{$_POST['name']}','{$preset_array}')";
        $queryres=$wpdb->query($ebsquery);
        if(isset($queryres) && $queryres==true) {
            $id= $wpdb->insert_id;
            echo '<span id="ebs_preset_val_' . $id. '" class="get_preset_data preset_selected" data-id="' . $id. '"><em>' . stripslashes( $_POST['name'] ) . '</em> <i class="fa fa-times"></i></span>';
        }
    }
    die();
}

/*
 * Set preview content in session when user demand for preview
 */
add_action('wp_ajax_ebs_set_preview_content','callback_ebs_set_preview_content');
function callback_ebs_set_preview_content(){
    $shortcode=$_POST['shortcode'];
    if(!session_id()){
        session_start();
    }
    $_SESSION['ebs_shortcode_preview']=$shortcode;
    echo $_SESSION['ebs_shortcode_preview'];
    die();
}
add_action('wp_ajax_get_widgets','callback_get_widgets');

function callback_get_widgets(){

die();}

