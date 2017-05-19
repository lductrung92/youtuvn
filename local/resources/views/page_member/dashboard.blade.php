<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ asset('/') }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="lib_admin/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="lib_admin/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="lib_admin/assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="lib_admin/assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="lib_admin/assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="lib_admin/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/loaders/blockui.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/ui/nicescroll.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/ui/drilldown.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="lib_admin/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="lib_admin/assets/js/core/app.js"></script>
    <script type="text/javascript" src="lib_admin/assets/js/pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="lib_admin/assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-git-compare"></i>
                    <span class="visible-xs-inline-block position-right">Git updates</span>
                    <span class="badge bg-warning-400">9</span>
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-heading">
                        Git updates
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-sync"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body width-350">
                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                <div class="media-annotation">4 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                            </div>

                            <div class="media-body">
                                Add full font overrides for popovers and tooltips
                                <div class="media-annotation">36 minutes ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
                            </div>

                            <div class="media-body">
                                <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
                                <div class="media-annotation">2 hours ago</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
                            </div>

                            <div class="media-body">
                                <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
                                <div class="media-annotation">Dec 18, 18:36</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                Have Carousel ignore keyboard events
                                <div class="media-annotation">Dec 12, 05:46</div>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-people"></i>
                    <span class="visible-xs-inline-block position-right">Users</span>
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-heading">
                        Users online
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-gear"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body width-300">
                        <li class="media">
                            <div class="media-left"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">Jordana Ansley</a>
                                <span class="display-block text-muted text-size-small">Lead web developer</span>
                            </div>
                            <div class="media-right media-middle"><span class="status-mark border-success"></span></div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">Will Brason</a>
                                <span class="display-block text-muted text-size-small">Marketing manager</span>
                            </div>
                            <div class="media-right media-middle"><span class="status-mark border-danger"></span></div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">Hanna Walden</a>
                                <span class="display-block text-muted text-size-small">Project manager</span>
                            </div>
                            <div class="media-right media-middle"><span class="status-mark border-success"></span></div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">Dori Laperriere</a>
                                <span class="display-block text-muted text-size-small">Business developer</span>
                            </div>
                            <div class="media-right media-middle"><span class="status-mark border-warning-300"></span></div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">Vanessa Aurelius</a>
                                <span class="display-block text-muted text-size-small">UX expert</span>
                            </div>
                            <div class="media-right media-middle"><span class="status-mark border-grey-400"></span></div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All users"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
        </ul>

        <p class="navbar-text"><span class="label bg-success-400">Online</span></p>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown language-switch">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="lib_admin/assets/images/flags/gb.png" class="position-left" alt="">
                    English
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li><a class="deutsch"><img src="lib_admin/assets/images/flags/de.png" alt=""> Deutsch</a></li>
                    <li><a class="ukrainian"><img src="lib_admin/assets/images/flags/ua.png" alt=""> Українська</a></li>
                    <li><a class="english"><img src="lib_admin/assets/images/flags/gb.png" alt=""> English</a></li>
                    <li><a class="espana"><img src="lib_admin/assets/images/flags/es.png" alt=""> España</a></li>
                    <li><a class="russian"><img src="lib_admin/assets/images/flags/ru.png" alt=""> Русский</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="visible-xs-inline-block position-right">Messages</span>
                    <span class="badge bg-warning-400">2</span>
                </a>

                <div class="dropdown-menu dropdown-content width-350">
                    <div class="dropdown-content-heading">
                        Messages
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-compose"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body">
                        <li class="media">
                            <div class="media-left">
                                <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">5</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">James Alexander</span>
                                    <span class="media-annotation pull-right">04:58</span>
                                </a>

                                <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">4</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Margo Baker</span>
                                    <span class="media-annotation pull-right">12:16</span>
                                </a>

                                <span class="text-muted">That was something he was unable to do because...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Jeremy Victorino</span>
                                    <span class="media-annotation pull-right">22:48</span>
                                </a>

                                <span class="text-muted">But that would be extremely strained and suspicious...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Beatrix Diaz</span>
                                    <span class="media-annotation pull-right">Tue</span>
                                </a>

                                <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Richard Vango</span>
                                    <span class="media-annotation pull-right">Mon</span>
                                </a>

                                <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="lib_admin/assets/images/placeholder.jpg" alt="">
                    <span>Victoria</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                    <li><a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Second navbar -->
<div class="navbar navbar-default" id="navbar-second">
    <ul class="nav navbar-nav no-border visible-xs-block">
        <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
    </ul>

    <div class="navbar-collapse collapse" id="navbar-second-toggle">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.html"><i class="icon-display4 position-left"></i> Dashboard</a></li>

            <li class="dropdown mega-menu mega-menu-wide">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-puzzle4 position-left"></i> Components <span class="caret"></span></a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-body">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Forms</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-pencil3"></i> Form components</a>
                                        <ul>
                                            <li><a href="form_inputs_basic.html">Basic inputs</a></li>
                                            <li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
                                            <li><a href="form_input_groups.html">Input groups</a></li>
                                            <li><a href="form_controls_extended.html">Extended controls</a></li>
                                            <li><a href="form_floating_labels.html">Floating labels</a></li>
                                            <li>
                                                <a href="#">Selects</a>
                                                <ul>
                                                    <li><a href="form_select2.html">Select2 selects</a></li>
                                                    <li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
                                                    <li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
                                                    <li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="form_tag_inputs.html">Tag inputs</a></li>
                                            <li><a href="form_dual_listboxes.html">Dual Listboxes</a></li>
                                            <li><a href="form_editable.html">Editable forms</a></li>
                                            <li><a href="form_validation.html">Validation</a></li>
                                            <li><a href="form_inputs_grid.html">Inputs grid</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-file-css"></i> JSON forms</a>
                                        <ul>
                                            <li><a href="alpaca_basic.html">Basic inputs</a></li>
                                            <li><a href="alpaca_advanced.html">Advanced inputs</a></li>
                                            <li><a href="alpaca_controls.html">Controls</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-footprint"></i> Wizards</a>
                                        <ul>
                                            <li><a href="wizard_steps.html">Steps wizard</a></li>
                                            <li><a href="wizard_form.html">Form wizard</a></li>
                                            <li><a href="wizard_stepy.html">Stepy wizard</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-spell-check"></i> Editors</a>
                                        <ul>
                                            <li><a href="editor_summernote.html">Summernote editor</a></li>
                                            <li><a href="editor_ckeditor.html">CKEditor</a></li>
                                            <li><a href="editor_wysihtml5.html">WYSIHTML5 editor</a></li>
                                            <li><a href="editor_code.html">Code editor</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-select2"></i> Pickers</a>
                                        <ul>
                                            <li><a href="picker_date.html">Date &amp; time pickers</a></li>
                                            <li><a href="picker_color.html">Color pickers</a></li>
                                            <li><a href="picker_location.html">Location pickers</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-insert-template"></i> Form layouts</a>
                                        <ul>
                                            <li><a href="form_layout_vertical.html">Vertical form</a></li>
                                            <li><a href="form_layout_horizontal.html">Horizontal form</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Appearance</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-grid"></i> Components</a>
                                        <ul>
                                            <li><a href="components_modals.html">Modals</a></li>
                                            <li><a href="components_dropdowns.html">Dropdown menus</a></li>
                                            <li><a href="components_tabs.html">Tabs component</a></li>
                                            <li><a href="components_pills.html">Pills component</a></li>
                                            <li><a href="components_navs.html">Accordion and navs</a></li>
                                            <li><a href="components_buttons.html">Buttons</a></li>
                                            <li><a href="components_notifications_pnotify.html">PNotify notifications</a></li>
                                            <li><a href="components_notifications_others.html">Other notifications</a></li>
                                            <li><a href="components_popups.html">Tooltips and popovers</a></li>
                                            <li><a href="components_alerts.html">Alerts</a></li>
                                            <li><a href="components_pagination.html">Pagination</a></li>
                                            <li><a href="components_labels.html">Labels and badges</a></li>
                                            <li><a href="components_loaders.html">Loaders and bars</a></li>
                                            <li><a href="components_thumbnails.html">Thumbnails</a></li>
                                            <li><a href="components_page_header.html">Page header</a></li>
                                            <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                                            <li><a href="components_media.html">Media objects</a></li>
                                            <li><a href="components_affix.html">Affix and Scrollspy</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-browser"></i> Content panels</a>
                                        <ul>
                                            <li><a href="panels.html">Panels</a></li>
                                            <li><a href="panels_heading.html">Heading elements</a></li>
                                            <li><a href="panels_footer.html">Footer elements</a></li>
                                            <li><a href="panels_draggable.html">Draggable panels</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-droplets"></i> Content styling</a>
                                        <ul>
                                            <li><a href="appearance_text_styling.html">Text styling</a></li>
                                            <li><a href="appearance_typography.html">Typography</a></li>
                                            <li><a href="appearance_helpers.html">Helper classes</a></li>
                                            <li><a href="appearance_syntax_highlighter.html">Syntax highlighter</a></li>
                                            <li><a href="appearance_content_grid.html">Grid system</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-gift"></i> Extra components</a>
                                        <ul>
                                            <li><a href="extra_sliders_noui.html">NoUI sliders</a></li>
                                            <li><a href="extra_sliders_ion.html">Ion range sliders</a></li>
                                            <li><a href="extra_trees.html">Dynamic tree views</a></li>
                                            <li><a href="extra_context_menu.html">Context menu</a></li>
                                            <li><a href="extra_fab.html">Floating action buttons</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-wrench3"></i> Tools</a>
                                        <ul>
                                            <li><a href="tools_session_timeout.html">Session timeout</a></li>
                                            <li><a href="tools_idle_timeout.html">Idle timeout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Extensions</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-puzzle4"></i> Extensions</a>
                                        <ul>
                                            <li><a href="extension_image_cropper.html">Image cropper</a></li>
                                            <li><a href="extension_blockui.html">Block UI</a></li>
                                            <li><a href="extension_dnd.html">Drag and drop</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-popout"></i> JQuery UI</a>
                                        <ul>
                                            <li><a href="jqueryui_interactions.html">Interactions</a></li>
                                            <li><a href="jqueryui_forms.html">Forms</a></li>
                                            <li><a href="jqueryui_components.html">Components</a></li>
                                            <li><a href="jqueryui_sliders.html">Sliders</a></li>
                                            <li><a href="jqueryui_navigation.html">Navigation</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-upload"></i> File uploaders</a>
                                        <ul>
                                            <li><a href="uploader_plupload.html">Plupload</a></li>
                                            <li><a href="uploader_bootstrap.html">Bootstrap file uploader</a></li>
                                            <li><a href="uploader_dropzone.html">Dropzone</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-calendar3"></i> Event calendars</a>
                                        <ul>
                                            <li><a href="fullcalendar_views.html">Basic views</a></li>
                                            <li><a href="fullcalendar_styling.html">Event styling</a></li>
                                            <li><a href="fullcalendar_formats.html">Language and time</a></li>
                                            <li><a href="fullcalendar_advanced.html">Advanced usage</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-sphere"></i> Internationalization</a>
                                        <ul>
                                            <li><a href="internationalization_switch_direct.html">Direct translation</a></li>
                                            <li><a href="internationalization_switch_query.html">Querystring parameter</a></li>
                                            <li><a href="internationalization_on_init.html">Set language on init</a></li>
                                            <li><a href="internationalization_after_init.html">Set language after init</a></li>
                                            <li><a href="internationalization_fallback.html">Language fallback</a></li>
                                            <li><a href="internationalization_callbacks.html">Callbacks</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Tables</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-table2"></i> Basic tables</a>
                                        <ul>
                                            <li><a href="table_basic.html">Basic examples</a></li>
                                            <li><a href="table_sizing.html">Table sizing</a></li>
                                            <li><a href="table_borders.html">Table borders</a></li>
                                            <li><a href="table_styling.html">Table styling</a></li>
                                            <li><a href="table_elements.html">Table elements</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-grid7"></i> Data tables</a>
                                        <ul>
                                            <li><a href="datatable_basic.html">Basic initialization</a></li>
                                            <li><a href="datatable_styling.html">Basic styling</a></li>
                                            <li><a href="datatable_advanced.html">Advanced examples</a></li>
                                            <li><a href="datatable_sorting.html">Sorting options</a></li>
                                            <li><a href="datatable_api.html">Using API</a></li>
                                            <li><a href="datatable_data_sources.html">Data sources</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-alignment-unalign"></i> Data tables extensions</a>
                                        <ul>
                                            <li><a href="datatable_extension_reorder.html">Columns reorder</a></li>
                                            <li><a href="datatable_extension_row_reorder.html">Row reorder</a></li>
                                            <li><a href="datatable_extension_fixed_columns.html">Fixed columns</a></li>
                                            <li><a href="datatable_extension_fixed_header.html">Fixed header</a></li>
                                            <li><a href="datatable_extension_autofill.html">Auto fill</a></li>
                                            <li><a href="datatable_extension_key_table.html">Key table</a></li>
                                            <li><a href="datatable_extension_scroller.html">Scroller</a></li>
                                            <li><a href="datatable_extension_select.html">Select</a></li>
                                            <li>
                                                <a href="#">Buttons</a>
                                                <ul>
                                                    <li><a href="datatable_extension_buttons_init.html">Initialization</a></li>
                                                    <li><a href="datatable_extension_buttons_flash.html">Flash buttons</a></li>
                                                    <li><a href="datatable_extension_buttons_print.html">Print buttons</a></li>
                                                    <li><a href="datatable_extension_buttons_html5.html">HTML5 buttons</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="datatable_extension_colvis.html">Columns visibility</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-file-spreadsheet"></i> Handsontable</a>
                                        <ul>
                                            <li><a href="handsontable_basic.html">Basic configuration</a></li>
                                            <li><a href="handsontable_advanced.html">Advanced setup</a></li>
                                            <li><a href="handsontable_cols.html">Column features</a></li>
                                            <li><a href="handsontable_cells.html">Cell features</a></li>
                                            <li><a href="handsontable_types.html">Basic cell types</a></li>
                                            <li><a href="handsontable_custom_checks.html">Custom &amp; checkboxes</a></li>
                                            <li><a href="handsontable_ac_password.html">Autocomplete &amp; password</a></li>
                                            <li><a href="handsontable_search.html">Search</a></li>
                                            <li><a href="handsontable_context.html">Context menu</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-versions"></i> Responsive options</a>
                                        <ul>
                                            <li><a href="table_responsive.html">Responsive basic tables</a></li>
                                            <li><a href="datatable_responsive.html">Responsive data tables</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="dropdown mega-menu mega-menu-wide">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-stars position-left"></i> Features <span class="caret"></span></a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-body">
                        <div class="row">
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Main content</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-stack2"></i> Page layouts</a>
                                        <ul>
                                            <li><a href="layout_navbar_main_fixed.html">Fixed main navbar</a></li>
                                            <li><a href="layout_navbar_secondary_fixed.html">Fixed secondary navbar</a></li>
                                            <li><a href="layout_navbar_main_hideable.html">Hideable main navbar</a></li>
                                            <li><a href="layout_navbar_secondary_hideable.html">Hideable secondary navbar</a></li>
                                            <li><a href="layout_footer_fixed.html">Fixed footer</a></li>
                                            <li><a href="layout_sidebar_sticky_custom.html">Sticky sidebar (custom scroll)</a></li>
                                            <li><a href="layout_sidebar_sticky_native.html">Sticky sidebar (native scroll)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-align-center-horizontal"></i> Fixed width</a>
                                        <ul>
                                            <li><a href="boxed_full.html">Boxed full width</a></li>
                                            <li><a href="boxed_default.html">Boxed with default sidebar</a></li>
                                            <li><a href="boxed_mini.html">Boxed with mini sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-copy"></i> Layouts</a>
                                        <ul>
                                            <li><a href="../../layout_1/LTR/index.html" id="layout1">Layout 1</a></li>
                                            <li><a href="../../layout_2/LTR/index.html" id="layout2">Layout 2</a></li>
                                            <li><a href="../../layout_3/LTR/index.html" id="layout3">Layout 3</a></li>
                                            <li><a href="index.html" id="layout4">Layout 4 <span class="label bg-warning-400">Current</span></a></li>
                                            <li><a href="../../layout_5/LTR/index.html" id="layout5">Layout 5</a></li>
                                            <li class="disabled"><a href="../../layout_6/LTR/index.html" id="layout6">Layout 6 <span class="label bg-slate-300">Coming soon</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-droplet2"></i> Color system</a>
                                        <ul>
                                            <li><a href="colors_primary.html">Primary palette</a></li>
                                            <li><a href="colors_danger.html">Danger palette</a></li>
                                            <li><a href="colors_success.html">Success palette</a></li>
                                            <li><a href="colors_warning.html">Warning palette</a></li>
                                            <li><a href="colors_info.html">Info palette</a></li>
                                            <li class="divider"></li>
                                            <li><a href="colors_pink.html">Pink palette</a></li>
                                            <li><a href="colors_violet.html">Violet palette</a></li>
                                            <li><a href="colors_purple.html">Purple palette</a></li>
                                            <li><a href="colors_indigo.html">Indigo palette</a></li>
                                            <li><a href="colors_blue.html">Blue palette</a></li>
                                            <li><a href="colors_teal.html">Teal palette</a></li>
                                            <li><a href="colors_green.html">Green palette</a></li>
                                            <li><a href="colors_orange.html">Orange palette</a></li>
                                            <li><a href="colors_brown.html">Brown palette</a></li>
                                            <li><a href="colors_grey.html">Grey palette</a></li>
                                            <li><a href="colors_slate.html">Slate palette</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../RTL/index.html"><i class="icon-width"></i> RTL version</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Layout</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-indent-decrease2"></i> Sidebars</a>
                                        <ul>
                                            <li><a href="sidebar_default_collapse.html">Default collapsible</a></li>
                                            <li><a href="sidebar_default_hide.html">Default hideable</a></li>
                                            <li><a href="sidebar_mini_collapse.html">Mini collapsible</a></li>
                                            <li><a href="sidebar_mini_hide.html">Mini hideable</a></li>
                                            <li>
                                                <a href="#">Dual sidebar</a>
                                                <ul>
                                                    <li><a href="sidebar_dual.html">Dual sidebar</a></li>
                                                    <li><a href="sidebar_dual_double_collapse.html">Dual double collapse</a></li>
                                                    <li><a href="sidebar_dual_double_hide.html">Dual double hide</a></li>
                                                    <li><a href="sidebar_dual_swap.html">Swap sidebars</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Double sidebar</a>
                                                <ul>
                                                    <li><a href="sidebar_double_collapse.html">Collapse main sidebar</a></li>
                                                    <li><a href="sidebar_double_hide.html">Hide main sidebar</a></li>
                                                    <li><a href="sidebar_double_fix_default.html">Fix default width</a></li>
                                                    <li><a href="sidebar_double_fix_mini.html">Fix mini width</a></li>
                                                    <li><a href="sidebar_double_visible.html">Opposite sidebar visible</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="sidebar_categories.html">Separate categories</a></li>
                                            <li><a href="sidebar_hidden.html">Hidden sidebar</a></li>
                                            <li><a href="sidebar_dark.html">Dark sidebar</a></li>
                                            <li><a href="sidebar_components.html">Sidebar components</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-sort"></i> Vertical navigation</a>
                                        <ul>
                                            <li><a href="navigation_vertical_collapsible.html">Collapsible menu</a></li>
                                            <li><a href="navigation_vertical_accordion.html">Accordion menu</a></li>
                                            <li><a href="navigation_vertical_sizing.html">Navigation sizing</a></li>
                                            <li><a href="navigation_vertical_bordered.html">Bordered navigation</a></li>
                                            <li><a href="navigation_vertical_right_icons.html">Right icons</a></li>
                                            <li><a href="navigation_vertical_labels_badges.html">Labels and badges</a></li>
                                            <li><a href="navigation_vertical_disabled.html">Disabled navigation links</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-transmission"></i> Horizontal navigation</a>
                                        <ul>
                                            <li><a href="navigation_horizontal_click.html">Submenu on click</a></li>
                                            <li><a href="navigation_horizontal_hover.html">Submenu on hover</a></li>
                                            <li><a href="navigation_horizontal_elements.html">With custom elements</a></li>
                                            <li><a href="navigation_horizontal_tabs.html">Tabbed navigation</a></li>
                                            <li><a href="navigation_horizontal_disabled.html">Disabled navigation links</a></li>
                                            <li><a href="navigation_horizontal_mega.html">Horizontal mega menu</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-paragraph-justify3"></i> Navbars</a>
                                        <ul>
                                            <li><a href="navbar_single.html">Single navbar</a></li>
                                            <li>
                                                <a href="#">Multiple navbars</a>
                                                <ul>
                                                    <li><a href="navbar_multiple_navbar_navbar.html">Navbar + navbar</a></li>
                                                    <li><a href="navbar_multiple_header_navbar.html">Header + navbar</a></li>
                                                    <li><a href="navbar_multiple_navbar_content.html">Navbar + content</a></li>
                                                    <li><a href="navbar_multiple_top_bottom.html">Top + bottom</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="navbar_colors.html">Color options</a></li>
                                            <li><a href="navbar_sizes.html">Sizing options</a></li>
                                            <li><a href="navbar_hideable.html">Hide on scroll</a></li>
                                            <li><a href="navbar_components.html">Navbar components</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-tree5"></i> Menu levels</a>
                                        <ul>
                                            <li><a href="#"><i class="icon-IE"></i> Second level</a></li>
                                            <li>
                                                <a href="#"><i class="icon-firefox"></i> Second level with child</a>
                                                <ul>
                                                    <li><a href="#"><i class="icon-android"></i> Third level</a></li>
                                                    <li>
                                                        <a href="#"><i class="icon-apple2"></i> Third level with child</a>
                                                        <ul>
                                                            <li><a href="#"><i class="icon-html5"></i> Fourth level</a></li>
                                                            <li><a href="#"><i class="icon-css3"></i> Fourth level</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#"><i class="icon-windows"></i> Third level</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="icon-chrome"></i> Second level</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Data visualization</span>
                                <ul class="menu-list">
                                    <li>
                                        <a href="#"><i class="icon-graph"></i> Echarts library</a>
                                        <ul>
                                            <li><a href="echarts_lines_areas.html">Lines and areas</a></li>
                                            <li><a href="echarts_columns_waterfalls.html">Columns and waterfalls</a></li>
                                            <li><a href="echarts_bars_tornados.html">Bars and tornados</a></li>
                                            <li><a href="echarts_scatter.html">Scatter charts</a></li>
                                            <li><a href="echarts_pies_donuts.html">Pies and donuts</a></li>
                                            <li><a href="echarts_funnels_chords.html">Funnels and chords</a></li>
                                            <li><a href="echarts_candlesticks_others.html">Candlesticks and others</a></li>
                                            <li><a href="echarts_combinations.html">Chart combinations</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-statistics"></i> D3 library</a>
                                        <ul>
                                            <li><a href="d3_lines_basic.html">Simple lines</a></li>
                                            <li><a href="d3_lines_advanced.html">Advanced lines</a></li>
                                            <li><a href="d3_bars_basic.html">Simple bars</a></li>
                                            <li><a href="d3_bars_advanced.html">Advanced bars</a></li>
                                            <li><a href="d3_pies.html">Pie charts</a></li>
                                            <li><a href="d3_circle_diagrams.html">Circle diagrams</a></li>
                                            <li><a href="d3_tree.html">Tree layout</a></li>
                                            <li><a href="d3_other.html">Other charts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-stats-dots"></i> Dimple library</a>
                                        <ul>
                                            <li>
                                                <a href="#">Line charts</a>
                                                <ul>
                                                    <li><a href="dimple_lines_horizontal.html">Horizontal orientation</a></li>
                                                    <li><a href="dimple_lines_vertical.html">Vertical orientation</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Bar charts</a>
                                                <ul>
                                                    <li><a href="dimple_bars_horizontal.html">Horizontal orientation</a></li>
                                                    <li><a href="dimple_bars_vertical.html">Vertical orientation</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Area charts</a>
                                                <ul>
                                                    <li><a href="dimple_area_horizontal.html">Horizontal orientation</a></li>
                                                    <li><a href="dimple_area_vertical.html">Vertical orientation</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Step charts</a>
                                                <ul>
                                                    <li><a href="dimple_step_horizontal.html">Horizontal orientation</a></li>
                                                    <li><a href="dimple_step_vertical.html">Vertical orientation</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="dimple_pies.html">Pie charts</a></li>
                                            <li><a href="dimple_rings.html">Ring charts</a></li>
                                            <li><a href="dimple_scatter.html">Scatter charts</a></li>
                                            <li><a href="dimple_bubble.html">Bubble charts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-stats-bars"></i> C3 library</a>
                                        <ul>
                                            <li><a href="c3_lines_areas.html">Lines and areas</a></li>
                                            <li><a href="c3_bars_pies.html">Bars and pies</a></li>
                                            <li><a href="c3_advanced.html">Advanced examples</a></li>
                                            <li><a href="c3_axis.html">Chart axis</a></li>
                                            <li><a href="c3_grid.html">Grid options</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-google"></i> Google visualization</a>
                                        <ul>
                                            <li><a href="google_lines.html">Line charts</a></li>
                                            <li><a href="google_bars.html">Bar charts</a></li>
                                            <li><a href="google_pies.html">Pie charts</a></li>
                                            <li><a href="google_scatter_bubble.html">Bubble &amp; scatter charts</a></li>
                                            <li><a href="google_other.html">Other charts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <span class="menu-heading underlined">Extras</span>
                                <ul class="menu-list">
                                    <li><a href="animations_css3.html"><i class="icon-spinner3 spinner position-left"></i> CSS3 animations</a></li>
                                    <li>
                                        <a href="#"><i class="icon-spinner10 spinner position-left"></i> Velocity animations</a>
                                        <ul>
                                            <li><a href="animations_velocity_basic.html">Basic usage</a></li>
                                            <li><a href="animations_velocity_ui.html">UI pack effects</a></li>
                                            <li><a href="animations_velocity_examples.html">Advanced examples</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-map5"></i> Maps integration</a>
                                        <ul>
                                            <li>
                                                <a href="#">Google maps</a>
                                                <ul>
                                                    <li><a href="maps_google_basic.html">Basics</a></li>
                                                    <li><a href="maps_google_controls.html">Controls</a></li>
                                                    <li><a href="maps_google_markers.html">Markers</a></li>
                                                    <li><a href="maps_google_drawings.html">Map drawings</a></li>
                                                    <li><a href="maps_google_layers.html">Layers</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="maps_vector.html">Vector maps</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-magazine"></i> Timelines</a>
                                        <ul>
                                            <li><a href="timelines_left.html">Left timeline</a></li>
                                            <li><a href="timelines_right.html">Right timeline</a></li>
                                            <li><a href="timelines_center.html">Centered timeline</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-thumbs-up2 position-left"></i> Icons</a>
                                        <ul>
                                            <li><a href="icons_glyphicons.html">Glyphicons</a></li>
                                            <li><a href="icons_icomoon.html">Icomoon</a></li>
                                            <li><a href="icons_fontawesome.html">Font awesome</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-make-group position-left"></i> Page kits <span class="caret"></span>
                </a>

                <ul class="dropdown-menu width-250">
                    <li class="dropdown-header">Apps</li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-task"></i> Task manager</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="task_manager_grid.html">Task grid</a></li>
                            <li><a href="task_manager_list.html">Task list</a></li>
                            <li><a href="task_manager_detailed.html">Task detailed</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-cash3"></i> Invoicing</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="invoice_template.html">Invoice template</a></li>
                            <li><a href="invoice_grid.html">Invoice grid</a></li>
                            <li><a href="invoice_archive.html">Invoice archive</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-header">User</li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-people"></i> User pages</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Basic</li>
                            <li><a href="user_pages_cards.html">User cards</a></li>
                            <li><a href="user_pages_list.html">User list</a></li>
                            <li class="dropdown-header highlight">Profiles</li>
                            <li><a href="user_pages_profile.html">Simple profile</a></li>
                            <li><a href="user_pages_profile_cover.html">Profile with cover</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-user-plus"></i> Login &amp; registration</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Basic</li>
                            <li><a href="login_simple.html">Simple login</a></li>
                            <li><a href="login_advanced.html">More login info</a></li>
                            <li><a href="login_registration.html">Simple registration</a></li>
                            <li><a href="login_registration_advanced.html">More registration info</a></li>
                            <li><a href="login_validation.html">With validation</a></li>
                            <li><a href="login_tabbed.html">Tabbed form</a></li>
                            <li><a href="login_modals.html">Inside modals</a></li>
                            <li class="dropdown-header highlight">Service</li>
                            <li><a href="login_unlock.html">Unlock user</a></li>
                            <li><a href="login_password_recover.html">Reset password</a></li>
                            <li class="dropdown-header highlight">Other</li>
                            <li><a href="login_hide_navbar.html">Hide navbar</a></li>
                            <li><a href="login_transparent.html">Transparent box</a></li>
                            <li><a href="login_background.html">Background option</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-header">Kits</li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-search4"></i> Search</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Basic</li>
                            <li><a href="search_basic.html">Basic search results</a></li>
                            <li><a href="search_users.html">User search results</a></li>
                            <li class="dropdown-header highlight">Media</li>
                            <li><a href="search_images.html">Image search results</a></li>
                            <li><a href="search_videos.html">Video search results</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-images2"></i> Gallery</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="gallery_grid.html">Media grid</a></li>
                            <li><a href="gallery_titles.html">Media with titles</a></li>
                            <li><a href="gallery_description.html">Media with description</a></li>
                            <li><a href="gallery_library.html">Media library</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-header">Tools</li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-lifebuoy"></i> Support</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Chats</li>
                            <li><a href="support_conversation_layouts.html">Conversation layouts</a></li>
                            <li><a href="support_conversation_options.html">Conversation options</a></li>
                            <li class="dropdown-header highlight">Knowledgebase</li>
                            <li><a href="support_knowledgebase.html">Knowledgebase</a></li>
                            <li><a href="support_faq.html">FAQ page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#"><i class="icon-warning"></i> Error pages</a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="error_403.html">Error 403</a></li>
                            <li><a href="error_404.html">Error 404</a></li>
                            <li><a href="error_405.html">Error 405</a></li>
                            <li><a href="error_500.html">Error 500</a></li>
                            <li><a href="error_503.html">Error 503</a></li>
                            <li><a href="error_offline.html">Offline page</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-strategy position-left"></i> Starter kit <span class="caret"></span>
                </a>

                <ul class="dropdown-menu width-200">
                    <li class="dropdown-header">Basic layouts</li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-grid2"></i> Columns</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header highlight">Options</li>
                            <li><a href="starters/1_col.html">One column</a></li>
                            <li><a href="starters/2_col.html">Two columns</a></li>
                            <li class="dropdown-submenu">
                                <a href="#">Three columns</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header highlight">Sidebar position</li>
                                    <li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
                                    <li><a href="starters/3_col_double.html">Double sidebars</a></li>
                                </ul>
                            </li>
                            <li><a href="starters/4_col.html">Four columns</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-paragraph-justify3"></i> Navbars</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header highlight">Fixed navbars</li>
                            <li><a href="starters/layout_navbar_fixed_main.html">Fixed main navbar</a></li>
                            <li><a href="starters/layout_navbar_fixed_secondary.html">Fixed secondary navbar</a></li>
                            <li><a href="starters/layout_navbar_fixed_both.html">Both navbars fixed</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-header">Optional layouts</li>
                    <li><a href="starters/layout_boxed.html"><i class="icon-align-center-horizontal"></i> Fixed width</a></li>
                    <li><a href="starters/layout_sidebar_sticky.html"><i class="icon-flip-vertical3"></i> Sticky sidebar</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="changelog.html">
                    <i class="icon-history position-left"></i>
                    Changelog
                    <span class="label label-inline position-right bg-success-400">1.4</span>
                </a>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cog3"></i>
                    <span class="visible-xs-inline-block position-right">Share</span>
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /second navbar -->


<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <i class="icon-arrow-left52 position-left"></i>
                <span class="text-semibold">Home</span> - Dashboard
                <small class="display-block">Good morning, Victoria Baker!</small>
            </h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Main charts -->
            <div class="row">
                <div class="col-lg-6">

                    <!-- Traffic sources -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Traffic sources</h6>
                            <div class="heading-elements">
                                <form class="heading-form" action="#">
                                    <div class="form-group">
                                        <label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                            <input type="checkbox" class="switch" checked="checked">
                                            Live update:
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="list-inline text-center">
                                        <li>
                                            <a href="#" class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-plus3"></i></a>
                                        </li>
                                        <li class="text-left">
                                            <div class="text-semibold">New visitors</div>
                                            <div class="text-muted">2,349 avg</div>
                                        </li>
                                    </ul>

                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="content-group" id="new-visitors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <ul class="list-inline text-center">
                                        <li>
                                            <a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-watch2"></i></a>
                                        </li>
                                        <li class="text-left">
                                            <div class="text-semibold">New sessions</div>
                                            <div class="text-muted">08:20 avg</div>
                                        </li>
                                    </ul>

                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="content-group" id="new-sessions"></div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <ul class="list-inline text-center">
                                        <li>
                                            <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-people"></i></a>
                                        </li>
                                        <li class="text-left">
                                            <div class="text-semibold">Total online</div>
                                            <div class="text-muted"><span class="status-mark border-success position-left"></span> 5,378 avg</div>
                                        </li>
                                    </ul>

                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="content-group" id="total-online"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="position-relative" id="traffic-sources"></div>
                    </div>
                    <!-- /traffic sources -->

                </div>

                <div class="col-lg-6">

                    <!-- Sales stats -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Sales statistics</h6>
                            <div class="heading-elements">
                                <form class="heading-form" action="#">
                                    <div class="form-group">
                                        <select class="change-date select-sm" id="select_date">
                                            <optgroup label="<i class='icon-watch pull-right'></i> Time period">
                                                <option value="val1">June, 29 - July, 5</option>
                                                <option value="val2">June, 22 - June 28</option>
                                                <option value="val3" selected="selected">June, 15 - June, 21</option>
                                                <option value="val4">June, 8 - June, 14</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h5 class="text-semibold no-margin"><i class="icon-calendar5 position-left text-slate"></i> 5,689</h5>
                                        <span class="text-muted text-size-small">orders weekly</span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h5 class="text-semibold no-margin"><i class="icon-calendar52 position-left text-slate"></i> 32,568</h5>
                                        <span class="text-muted text-size-small">orders monthly</span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h5 class="text-semibold no-margin"><i class="icon-cash3 position-left text-slate"></i> $23,464</h5>
                                        <span class="text-muted text-size-small">average revenue</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-group-sm" id="app_sales"></div>
                        <div id="monthly-sales-stats"></div>
                    </div>
                    <!-- /sales stats -->

                </div>
            </div>
            <!-- /main charts -->


            <!-- Dashboard content -->
            <div class="row">
                <div class="col-lg-8">

                    <!-- Marketing campaigns -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Marketing campaigns</h6>
                            <div class="heading-elements">
                                <span class="label bg-success heading-text">28 active</span>
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                            <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                            <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-lg text-nowrap">
                                <tbody>
                                <tr>
                                    <td class="col-md-5">
                                        <div class="media-left">
                                            <div id="campaigns-donut"></div>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">38,289 <small class="text-success text-size-base"><i class="icon-arrow-up12"></i> (+16.2%)</small></h5>
                                            <ul class="list-inline list-inline-condensed no-margin">
                                                <li>
                                                    <span class="status-mark border-success"></span>
                                                </li>
                                                <li>
                                                    <span class="text-muted">May 12, 12:30 am</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                    <td class="col-md-5">
                                        <div class="media-left">
                                            <div id="campaign-status-pie"></div>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">2,458 <small class="text-danger text-size-base"><i class="icon-arrow-down12"></i> (- 4.9%)</small></h5>
                                            <ul class="list-inline list-inline-condensed no-margin">
                                                <li>
                                                    <span class="status-mark border-danger"></span>
                                                </li>
                                                <li>
                                                    <span class="text-muted">Jun 4, 4:00 am</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                    <td class="text-right col-md-2">
                                        <a href="#" class="btn bg-indigo-300"><i class="icon-statistics position-left"></i> View report</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th>Campaign</th>
                                    <th class="col-md-2">Client</th>
                                    <th class="col-md-2">Changes</th>
                                    <th class="col-md-2">Budget</th>
                                    <th class="col-md-2">Status</th>
                                    <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="active border-double">
                                    <td colspan="5">Today</td>
                                    <td class="text-right">
                                        <span class="progress-meter" id="today-progress" data-progress="30"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="lib_admin/assets/images/brands/facebook.png" class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">Facebook</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-blue position-left"></span>
                                                02:00 - 03:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Mintlime</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span></td>
                                    <td><h6 class="text-semibold">$5,489</h6></td>
                                    <td><span class="label bg-blue">Active</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="lib_admin/assets/images/brands/youtube.png" class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">Youtube videos</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-danger position-left"></span>
                                                13:00 - 14:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">CDsoft</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 3.12%</span></td>
                                    <td><h6 class="text-semibold">$2,592</h6></td>
                                    <td><span class="label bg-danger">Closed</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="lib_admin/assets/images/brands/spotify.png" class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">Spotify ads</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-grey-400 position-left"></span>
                                                10:00 - 11:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Diligence</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 8.02%</span></td>
                                    <td><h6 class="text-semibold">$1,268</h6></td>
                                    <td><span class="label bg-grey-400">Hold</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="lib_admin/assets/images/brands/twitter.png" class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">Twitter ads</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-grey-400 position-left"></span>
                                                04:00 - 05:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Deluxe</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.78%</span></td>
                                    <td><h6 class="text-semibold">$7,467</h6></td>
                                    <td><span class="label bg-grey-400">Hold</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr class="active border-double">
                                    <td colspan="5">Yesterday</td>
                                    <td class="text-right">
                                        <span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="lib_admin/assets/images/brands/bing.png" class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">Bing campaign</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-success position-left"></span>
                                                15:00 - 16:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Metrics</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 5.78%</span></td>
                                    <td><h6 class="text-semibold">$970</h6></td>
                                    <td><span class="label bg-success-400">Pending</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="lib_admin/assets/images/brands/amazon.png" class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">Amazon ads</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-danger position-left"></span>
                                                18:00 - 19:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Blueish</span></td>
                                    <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 6.79%</span></td>
                                    <td><h6 class="text-semibold">$1,540</h6></td>
                                    <td><span class="label bg-blue">Active</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="lib_admin/assets/images/brands/dribbble.png" class="img-circle img-xs" alt=""></a>
                                        </div>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">Dribbble ads</a></div>
                                            <div class="text-muted text-size-small">
                                                <span class="status-mark border-blue position-left"></span>
                                                20:00 - 21:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="text-muted">Teamable</span></td>
                                    <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> 9.83%</span></td>
                                    <td><h6 class="text-semibold">$8,350</h6></td>
                                    <td><span class="label bg-danger">Closed</span></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                                    <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                                    <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /marketing campaigns -->


                    <!-- Quick stats boxes -->
                    <div class="row">
                        <div class="col-lg-4">

                            <!-- Members online -->
                            <div class="panel bg-teal-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <span class="heading-text badge bg-teal-800">+53,6%</span>
                                    </div>

                                    <h3 class="no-margin">3,450</h3>
                                    Members online
                                    <div class="text-muted text-size-small">489 avg</div>
                                </div>

                                <div class="container-fluid">
                                    <div id="members-online"></div>
                                </div>
                            </div>
                            <!-- /members online -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Current server load -->
                            <div class="panel bg-pink-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                                    <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                                    <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3 class="no-margin">49.4%</h3>
                                    Current server load
                                    <div class="text-muted text-size-small">34.6% avg</div>
                                </div>

                                <div id="server-load"></div>
                            </div>
                            <!-- /current server load -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Today's revenue -->
                            <div class="panel bg-blue-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>

                                    <h3 class="no-margin">$18,390</h3>
                                    Today's revenue
                                    <div class="text-muted text-size-small">$37,578 avg</div>
                                </div>

                                <div id="today-revenue"></div>
                            </div>
                            <!-- /today's revenue -->

                        </div>
                    </div>
                    <!-- /quick stats boxes -->


                    <!-- Support tickets -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Support tickets</h6>
                            <div class="heading-elements">
                                <button type="button" class="btn btn-link daterange-ranges heading-btn text-semibold">
                                    <i class="icon-calendar3 position-left"></i> <span></span> <b class="caret"></b>
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-xlg text-nowrap">
                                <tbody>
                                <tr>
                                    <td class="col-md-4">
                                        <div class="media-left media-middle">
                                            <div id="tickets-status"></div>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">14,327 <small class="text-success text-size-base"><i class="icon-arrow-up12"></i> (+2.9%)</small></h5>
                                            <span class="text-muted"><span class="status-mark border-success position-left"></span> Jun 16, 10:00 am</span>
                                        </div>
                                    </td>

                                    <td class="col-md-3">
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i class="icon-alarm-add"></i></a>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">
                                                1,132 <small class="display-block no-margin">total tickets</small>
                                            </h5>
                                        </div>
                                    </td>

                                    <td class="col-md-3">
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i class="icon-spinner11"></i></a>
                                        </div>

                                        <div class="media-left">
                                            <h5 class="text-semibold no-margin">
                                                06:25:00 <small class="display-block no-margin">response time</small>
                                            </h5>
                                        </div>
                                    </td>

                                    <td class="text-right col-md-2">
                                        <a href="#" class="btn bg-teal-400"><i class="icon-statistics position-left"></i> Report</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th style="width: 50px">Due</th>
                                    <th style="width: 300px;">User</th>
                                    <th>Description</th>
                                    <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="active border-double">
                                    <td colspan="3">Active tickets</td>
                                    <td class="text-right">
                                        <span class="badge bg-blue">24</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="no-margin">12 <small class="display-block text-size-small no-margin">hours</small></h6>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Annabelle Doney</a>
                                            <div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            <span class="text-semibold">[#1183] Workaround for OS X selects printing bug</span>
                                            <span class="display-block text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="no-margin">16 <small class="display-block text-size-small no-margin">hours</small></h6>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Chris Macintyre</a>
                                            <div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            <span class="text-semibold">[#1249] Vertically center carousel controls</span>
                                            <span class="display-block text-muted">Try any carousel control and reduce the screen width below...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="no-margin">20 <small class="display-block text-size-small no-margin">hours</small></h6>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Robert Hauber</a>
                                            <div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            <span class="text-semibold">[#1254] Inaccurate small pagination height</span>
                                            <span class="display-block text-muted">The height of pagination elements is not consistent with...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <h6 class="no-margin">40 <small class="display-block text-size-small no-margin">hours</small></h6>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default text-semibold letter-icon-title">Dex Sponheim</a>
                                            <div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> Active</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            <span class="text-semibold">[#1184] Round grid column gutter operations</span>
                                            <span class="display-block text-muted">Left rounds up, right rounds down. should keep everything...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-checkmark3 text-success"></i> Resolve issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr class="active border-double">
                                    <td colspan="3">Resolved tickets</td>
                                    <td class="text-right">
                                        <span class="badge bg-success">42</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-checkmark3 text-success"></i>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default letter-icon-title">Alan Macedo</a>
                                            <div class="text-muted text-size-small"><span class="status-mark border-success position-left"></span> Resolved</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            [#1046] Avoid some unnecessary HTML string
                                            <span class="display-block text-muted">Rather than building a string of HTML and then parsing it...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-checkmark3 text-success"></i>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default letter-icon-title">Brett Castellano</a>
                                            <div class="text-muted text-size-small"><span class="status-mark border-success position-left"></span> Resolved</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            [#1038] Update json configuration
                                            <span class="display-block text-muted">The <code>files</code> property is necessary to override the files property...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-checkmark3 text-success"></i>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default">Roxanne Forbes</a>
                                            <div class="text-muted text-size-small"><span class="status-mark border-success position-left"></span> Resolved</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            [#1034] Tooltip multiple event
                                            <span class="display-block text-muted">Fix behavior when using tooltips and popovers that are...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr class="active border-double">
                                    <td colspan="3">Closed tickets</td>
                                    <td class="text-right">
                                        <span class="badge bg-danger">37</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-cross2 text-danger-400"></i>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default">Mitchell Sitkin</a>
                                            <div class="text-muted text-size-small"><span class="status-mark border-danger position-left"></span> Closed</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            [#1040] Account for static form controls in form group
                                            <span class="display-block text-muted">Resizes control label's font-size and account for the standard...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-reload-alt text-blue"></i> Reopen issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <i class="icon-cross2 text-danger"></i>
                                    </td>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-brown-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <a href="#" class="display-inline-block text-default letter-icon-title">Katleen Jensen</a>
                                            <div class="text-muted text-size-small"><span class="status-mark border-danger position-left"></span> Closed</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-default display-inline-block">
                                            [#1038] Proper sizing of form control feedback
                                            <span class="display-block text-muted">Feedback icon sizing inside a larger/smaller form-group...</span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropup">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-undo"></i> Quick reply</a></li>
                                                    <li><a href="#"><i class="icon-history"></i> Full history</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><i class="icon-plus3 text-blue"></i> Unresolve issue</a></li>
                                                    <li><a href="#"><i class="icon-cross2 text-danger"></i> Close issue</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /support tickets -->


                    <!-- Latest posts -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Latest posts</h6>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="media-list content-group">
                                        <li class="media stack-media-on-mobile">
                                            <div class="media-left">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="lib_admin/assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
                                                        <span class="zoom-image"><i class="icon-play3"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-heading"><a href="#">Up unpacked friendly</a></h6>
                                                <ul class="list-inline list-inline-separate text-muted mb-5">
                                                    <li><i class="icon-book-play position-left"></i> Video tutorials</li>
                                                    <li>14 minutes ago</li>
                                                </ul>
                                                The him father parish looked has sooner. Attachment frequently gay terminated son...
                                            </div>
                                        </li>

                                        <li class="media stack-media-on-mobile">
                                            <div class="media-left">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="lib_admin/assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
                                                        <span class="zoom-image"><i class="icon-play3"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-heading"><a href="#">It allowance prevailed</a></h6>
                                                <ul class="list-inline list-inline-separate text-muted mb-5">
                                                    <li><i class="icon-book-play position-left"></i> Video tutorials</li>
                                                    <li>12 days ago</li>
                                                </ul>
                                                Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed...
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-6">
                                    <ul class="media-list content-group">
                                        <li class="media stack-media-on-mobile">
                                            <div class="media-left">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="lib_admin/assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
                                                        <span class="zoom-image"><i class="icon-play3"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-heading"><a href="#">Case read they must</a></h6>
                                                <ul class="list-inline list-inline-separate text-muted mb-5">
                                                    <li><i class="icon-book-play position-left"></i> Video tutorials</li>
                                                    <li>20 hours ago</li>
                                                </ul>
                                                On it differed repeated wandered required in. Then girl neat why yet knew rose spot...
                                            </div>
                                        </li>

                                        <li class="media stack-media-on-mobile">
                                            <div class="media-left">
                                                <div class="thumb">
                                                    <a href="#">
                                                        <img src="lib_admin/assets/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
                                                        <span class="zoom-image"><i class="icon-play3"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-heading"><a href="#">Too carriage attended</a></h6>
                                                <ul class="list-inline list-inline-separate text-muted mb-5">
                                                    <li><i class="icon-book-play position-left"></i> FAQ section</li>
                                                    <li>2 days ago</li>
                                                </ul>
                                                Marianne or husbands if at stronger ye. Considered is as middletons uncommonly...
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /latest posts -->

                </div>

                <div class="col-lg-4">

                    <!-- Progress counters -->
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Available hours -->
                            <div class="panel text-center">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li class="dropdown text-muted">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                                    <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                                    <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Progress counter -->
                                    <div class="content-group-sm svg-center position-relative" id="hours-available-progress"></div>
                                    <!-- /progress counter -->


                                    <!-- Bars -->
                                    <div id="hours-available-bars"></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /available hours -->

                        </div>

                        <div class="col-md-6">

                            <!-- Productivity goal -->
                            <div class="panel text-center">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li class="dropdown text-muted">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                                    <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                                    <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Progress counter -->
                                    <div class="content-group-sm svg-center position-relative" id="goal-progress"></div>
                                    <!-- /progress counter -->

                                    <!-- Bars -->
                                    <div id="goal-bars"></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /productivity goal -->

                        </div>
                    </div>
                    <!-- /progress counters -->


                    <!-- Daily sales -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Daily sales stats</h6>
                            <div class="heading-elements">
                                <span class="heading-text">Balance: <span class="text-bold text-danger-600 position-right">$4,378</span></span>
                                <ul class="icons-list">
                                    <li class="dropdown text-muted">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                            <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                            <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div id="sales-heatmap"></div>
                        </div>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th>Application</th>
                                    <th>Time</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#" class="letter-icon-title">Sigma application</a>
                                            </div>

                                            <div class="text-muted text-size-small"><i class="icon-checkmark3 text-size-mini position-left"></i> New order</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted text-size-small">06:28 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="text-semibold no-margin">$49.90</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-danger-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#" class="letter-icon-title">Alpha application</a>
                                            </div>

                                            <div class="text-muted text-size-small"><i class="icon-spinner11 text-size-mini position-left"></i> Renewal</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted text-size-small">04:52 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="text-semibold no-margin">$90.50</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-indigo-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#" class="letter-icon-title">Delta application</a>
                                            </div>

                                            <div class="text-muted text-size-small"><i class="icon-lifebuoy text-size-mini position-left"></i> Support</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted text-size-small">01:26 pm</span>
                                    </td>
                                    <td>
                                        <h6 class="text-semibold no-margin">$60.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#" class="letter-icon-title">Omega application</a>
                                            </div>

                                            <div class="text-muted text-size-small"><i class="icon-lifebuoy text-size-mini position-left"></i> Support</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted text-size-small">11:46 am</span>
                                    </td>
                                    <td>
                                        <h6 class="text-semibold no-margin">$55.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="media-left media-middle">
                                            <a href="#" class="btn bg-danger-400 btn-rounded btn-icon btn-xs">
                                                <span class="letter-icon"></span>
                                            </a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#" class="letter-icon-title">Alpha application</a>
                                            </div>

                                            <div class="text-muted text-size-small"><i class="icon-spinner11 text-size-mini position-left"></i> Renewal</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted text-size-small">10:29 am</span>
                                    </td>
                                    <td>
                                        <h6 class="text-semibold no-margin">$90.50</h6>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /daily sales -->


                    <!-- My messages -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">My messages</h6>
                            <div class="heading-elements">
                                <span class="heading-text"><i class="icon-history text-warning position-left"></i> Jul 7, 10:30</span>
                                <span class="label bg-success heading-text">Online</span>
                            </div>
                        </div>

                        <!-- Numbers -->
                        <div class="container-fluid">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h6 class="text-semibold no-margin"><i class="icon-clipboard3 position-left text-slate"></i> 2,345</h6>
                                        <span class="text-muted text-size-small">this week</span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h6 class="text-semibold no-margin"><i class="icon-calendar3 position-left text-slate"></i> 3,568</h6>
                                        <span class="text-muted text-size-small">this month</span>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="content-group">
                                        <h6 class="text-semibold no-margin"><i class="icon-comments position-left text-slate"></i> 32,693</h6>
                                        <span class="text-muted text-size-small">all messages</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /numbers -->


                        <!-- Area chart -->
                        <div id="messages-stats"></div>
                        <!-- /area chart -->


                        <!-- Tabs -->
                        <ul class="nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300">
                            <li class="active">
                                <a href="#messages-tue" class="text-size-small text-uppercase" data-toggle="tab">
                                    Tuesday
                                </a>
                            </li>

                            <li>
                                <a href="#messages-mon" class="text-size-small text-uppercase" data-toggle="tab">
                                    Monday
                                </a>
                            </li>

                            <li>
                                <a href="#messages-fri" class="text-size-small text-uppercase" data-toggle="tab">
                                    Friday
                                </a>
                            </li>
                        </ul>
                        <!-- /tabs -->


                        <!-- Tabs content -->
                        <div class="tab-content">
                            <div class="tab-pane active fade in has-padding" id="messages-tue">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
                                            <span class="badge bg-danger-400 media-badge">8</span>
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                James Alexander
                                                <span class="media-annotation pull-right">14:58</span>
                                            </a>

                                            <span class="display-block text-muted">The constitutionally inventoried precariously...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
                                            <span class="badge bg-danger-400 media-badge">6</span>
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Margo Baker
                                                <span class="media-annotation pull-right">12:16</span>
                                            </a>

                                            <span class="display-block text-muted">Pinched a well more moral chose goodness...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Jeremy Victorino
                                                <span class="media-annotation pull-right">09:48</span>
                                            </a>

                                            <span class="display-block text-muted">Pert thickly mischievous clung frowned well...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Beatrix Diaz
                                                <span class="media-annotation pull-right">05:54</span>
                                            </a>

                                            <span class="display-block text-muted">Nightingale taped hello bucolic fussily cardinal...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Richard Vango
                                                <span class="media-annotation pull-right">01:43</span>
                                            </a>

                                            <span class="display-block text-muted">Amidst roadrunner distantly pompously where...</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane fade has-padding" id="messages-mon">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Isak Temes
                                                <span class="media-annotation pull-right">Tue, 19:58</span>
                                            </a>

                                            <span class="display-block text-muted">Reasonable palpably rankly expressly grimy...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Vittorio Cosgrove
                                                <span class="media-annotation pull-right">Tue, 16:35</span>
                                            </a>

                                            <span class="display-block text-muted">Arguably therefore more unexplainable fumed...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Hilary Talaugon
                                                <span class="media-annotation pull-right">Tue, 12:16</span>
                                            </a>

                                            <span class="display-block text-muted">Nicely unlike porpoise a kookaburra past more...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Bobbie Seber
                                                <span class="media-annotation pull-right">Tue, 09:20</span>
                                            </a>

                                            <span class="display-block text-muted">Before visual vigilantly fortuitous tortoise...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Walther Laws
                                                <span class="media-annotation pull-right">Tue, 03:29</span>
                                            </a>

                                            <span class="display-block text-muted">Far affecting more leered unerringly dishonest...</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane fade has-padding" id="messages-fri">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Owen Stretch
                                                <span class="media-annotation pull-right">Mon, 18:12</span>
                                            </a>

                                            <span class="display-block text-muted">Tardy rattlesnake seal raptly earthworm...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Jenilee Mcnair
                                                <span class="media-annotation pull-right">Mon, 14:03</span>
                                            </a>

                                            <span class="display-block text-muted">Since hello dear pushed amid darn trite...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Alaster Jain
                                                <span class="media-annotation pull-right">Mon, 13:59</span>
                                            </a>

                                            <span class="display-block text-muted">Dachshund cardinal dear next jeepers well...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Sigfrid Thisted
                                                <span class="media-annotation pull-right">Mon, 09:26</span>
                                            </a>

                                            <span class="display-block text-muted">Lighted wolf yikes less lemur crud grunted...</span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="media-left">
                                            <img src="lib_admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        </div>

                                        <div class="media-body">
                                            <a href="#">
                                                Sherilyn Mckee
                                                <span class="media-annotation pull-right">Mon, 06:38</span>
                                            </a>

                                            <span class="display-block text-muted">Less unicorn a however careless husky...</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /tabs content -->

                    </div>
                    <!-- /my messages -->


                    <!-- Daily financials -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">Daily financials</h6>
                            <div class="heading-elements">
                                <form class="heading-form" action="#">
                                    <div class="form-group">
                                        <label class="checkbox checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                            <input type="checkbox" class="switcher" id="realtime" checked="checked">
                                            Realtime
                                        </label>
                                    </div>
                                </form>
                                <span class="badge bg-danger-400 heading-text">+86</span>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="content-group-xs" id="bullets"></div>

                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-pink text-pink btn-flat btn-rounded btn-icon btn-xs"><i class="icon-statistics"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Stats for July, 6: 1938 orders, $4220 revenue
                                        <div class="media-annotation">2 hours ago</div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-arrow-right13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs"><i class="icon-checkmark3"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Invoices <a href="#">#4732</a> and <a href="#">#4734</a> have been paid
                                        <div class="media-annotation">Dec 18, 18:36</div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-arrow-right13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-xs"><i class="icon-alignment-unalign"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Affiliate commission for June has been paid
                                        <div class="media-annotation">36 minutes ago</div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-arrow-right13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs"><i class="icon-spinner11"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Order <a href="#">#37745</a> from July, 1st has been refunded
                                        <div class="media-annotation">4 minutes ago</div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-arrow-right13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="media-left">
                                        <a href="#" class="btn border-teal-400 text-teal btn-flat btn-rounded btn-icon btn-xs"><i class="icon-redo2"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Invoice <a href="#">#4769</a> has been sent to <a href="#">Robert Smith</a>
                                        <div class="media-annotation">Dec 12, 05:46</div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-arrow-right13"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /daily financials -->

                </div>
            </div>
            <!-- /dashboard content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->


<!-- Footer -->
<div class="footer text-muted">
    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
</div>
<!-- /footer -->

</body>
</html>