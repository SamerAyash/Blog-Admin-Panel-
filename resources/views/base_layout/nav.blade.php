<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="sidebar-search-wrapper">
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                <a href="javascript:" class="remove">
                    <i class="icon-close"></i>
                </a>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                            <a href="javascript:" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="nav-item start ">
            <a href="javascript:" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="heading">
            <h3 class="uppercase">Features</h3>
        </li>
        <li class="nav-item  ">
            <a href="javascript:" class="nav-link nav-toggle">
                <i class="icon-diamond"></i>
                <span class="title">UI Features</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="ui_metronic_grid.html" class="nav-link ">
                        <span class="title">Metronic Grid System</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_colors.html" class="nav-link ">
                        <span class="title">Color Library</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_general.html" class="nav-link ">
                        <span class="title">General Components</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_buttons.html" class="nav-link ">
                        <span class="title">Buttons</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_buttons_spinner.html" class="nav-link ">
                        <span class="title">Spinner Buttons</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_confirmations.html" class="nav-link ">
                        <span class="title">Popover Confirmations</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_sweetalert.html" class="nav-link ">
                        <span class="title">Bootstrap Sweet Alerts</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_icons.html" class="nav-link ">
                        <span class="title">Font Icons</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_socicons.html" class="nav-link ">
                        <span class="title">Social Icons</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_typography.html" class="nav-link ">
                        <span class="title">Typography</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_tabs_accordions_navs.html" class="nav-link ">
                        <span class="title">Tabs, Accordions & Navs</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_timeline.html" class="nav-link ">
                        <span class="title">Timeline 1</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_timeline_2.html" class="nav-link ">
                        <span class="title">Timeline 2</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_timeline_horizontal.html" class="nav-link ">
                        <span class="title">Horizontal Timeline</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_tree.html" class="nav-link ">
                        <span class="title">Tree View</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:" class="nav-link nav-toggle">
                        <span class="title">Page Progress Bar</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item ">
                            <a href="ui_page_progress_style_1.html" class="nav-link "> Flash </a>
                        </li>
                        <li class="nav-item ">
                            <a href="ui_page_progress_style_2.html" class="nav-link "> Big Counter </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="ui_blockui.html" class="nav-link ">
                        <span class="title">Block UI</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_bootstrap_growl.html" class="nav-link ">
                        <span class="title">Bootstrap Growl Notifications</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_notific8.html" class="nav-link ">
                        <span class="title">Notific8 Notifications</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_toastr.html" class="nav-link ">
                        <span class="title">Toastr Notifications</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_bootbox.html" class="nav-link ">
                        <span class="title">Bootbox Dialogs</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_alerts_api.html" class="nav-link ">
                        <span class="title">Metronic Alerts API</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_session_timeout.html" class="nav-link ">
                        <span class="title">Session Timeout</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_idle_timeout.html" class="nav-link ">
                        <span class="title">User Idle Timeout</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_modals.html" class="nav-link ">
                        <span class="title">Modals</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_extended_modals.html" class="nav-link ">
                        <span class="title">Extended Modals</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_tiles.html" class="nav-link ">
                        <span class="title">Tiles</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_datepaginator.html" class="nav-link ">
                        <span class="title">Date Paginator</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ui_nestable.html" class="nav-link ">
                        <span class="title">Nestable List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:" class="nav-link nav-toggle">
                <i class="icon-puzzle"></i>
                <span class="title">Components</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="components_date_time_pickers.html" class="nav-link ">
                        <span class="title">Date & Time Pickers</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_color_pickers.html" class="nav-link ">
                        <span class="title">Color Pickers</span>
                        <span class="badge badge-danger">2</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_select2.html" class="nav-link ">
                        <span class="title">Select2 Dropdowns</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_bootstrap_select.html" class="nav-link ">
                        <span class="title">Bootstrap Select</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_multi_select.html" class="nav-link ">
                        <span class="title">Bootstrap Multiple Select</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_bootstrap_multiselect_dropdown.html" class="nav-link ">
                        <span class="title">Bootstrap Multiselect Dropdowns</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_bootstrap_select_splitter.html" class="nav-link ">
                        <span class="title">Select Splitter</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_clipboard.html" class="nav-link ">
                        <span class="title">Clipboard</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_typeahead.html" class="nav-link ">
                        <span class="title">Typeahead Autocomplete</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_bootstrap_tagsinput.html" class="nav-link ">
                        <span class="title">Bootstrap Tagsinput</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_bootstrap_switch.html" class="nav-link ">
                        <span class="title">Bootstrap Switch</span>
                        <span class="badge badge-success">6</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_bootstrap_maxlength.html" class="nav-link ">
                        <span class="title">Bootstrap Maxlength</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_bootstrap_fileinput.html" class="nav-link ">
                        <span class="title">Bootstrap File Input</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_bootstrap_touchspin.html" class="nav-link ">
                        <span class="title">Bootstrap Touchspin</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_form_tools.html" class="nav-link ">
                        <span class="title">Form Widgets & Tools</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_context_menu.html" class="nav-link ">
                        <span class="title">Context Menu</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_editors.html" class="nav-link ">
                        <span class="title">Markdown & WYSIWYG Editors</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_code_editors.html" class="nav-link ">
                        <span class="title">Code Editors</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_ion_sliders.html" class="nav-link ">
                        <span class="title">Ion Range Sliders</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_noui_sliders.html" class="nav-link ">
                        <span class="title">NoUI Range Sliders</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="components_knob_dials.html" class="nav-link ">
                        <span class="title">Knob Circle Dials</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">Form Stuff</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="form_controls.html" class="nav-link ">
                                            <span class="title">Bootstrap Form
                                                <br>Controls</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_controls_md.html" class="nav-link ">
                                            <span class="title">Material Design
                                                <br>Form Controls</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_validation.html" class="nav-link ">
                        <span class="title">Form Validation</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_validation_states_md.html" class="nav-link ">
                                            <span class="title">Material Design
                                                <br>Form Validation States</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_validation_md.html" class="nav-link ">
                                            <span class="title">Material Design
                                                <br>Form Validation</span>
                    </a>
                </li>

                <li class="nav-item  ">
                    <a href="form_repeater.html" class="nav-link ">
                        <span class="title">Form Repeater</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_input_mask.html" class="nav-link ">
                        <span class="title">Form Input Mask</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_editable.html" class="nav-link ">
                        <span class="title">Form X-editable</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_wizard.html" class="nav-link ">
                        <span class="title">Form Wizard</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_icheck.html" class="nav-link ">
                        <span class="title">iCheck Controls</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_image_crop.html" class="nav-link ">
                        <span class="title">Image Cropping</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_fileupload.html" class="nav-link ">
                        <span class="title">Multiple File Upload</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="form_dropzone.html" class="nav-link ">
                        <span class="title">Dropzone File Upload</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:" class="nav-link nav-toggle">
                <i class="icon-bulb"></i>
                <span class="title">Elements</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="elements_steps.html" class="nav-link ">
                        <span class="title">Steps</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="elements_lists.html" class="nav-link ">
                        <span class="title">Lists</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="elements_ribbons.html" class="nav-link ">
                        <span class="title">Ribbons</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="elements_overlay.html" class="nav-link ">
                        <span class="title">Overlays</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="elements_cards.html" class="nav-link ">
                        <span class="title">User Cards</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="heading">
            <h3 class="uppercase">Pages</h3>
        </li>
        <li class="nav-item  ">
            <a href="javascript:" class="nav-link nav-toggle">
                <i class="icon-basket"></i>
                <span class="title">eCommerce</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="ecommerce_index.html" class="nav-link ">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ecommerce_orders.html" class="nav-link ">
                        <i class="icon-basket"></i>
                        <span class="title">Orders</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ecommerce_orders_view.html" class="nav-link ">
                        <i class="icon-tag"></i>
                        <span class="title">Order View</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ecommerce_products.html" class="nav-link ">
                        <i class="icon-graph"></i>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="ecommerce_products_edit.html" class="nav-link ">
                        <i class="icon-graph"></i>
                        <span class="title">Product Edit</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:" class="nav-link nav-toggle">
                <i class="icon-docs"></i>
                <span class="title">Apps</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="app_todo.html" class="nav-link ">
                        <i class="icon-clock"></i>
                        <span class="title">Todo 1</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="app_todo_2.html" class="nav-link ">
                        <i class="icon-check"></i>
                        <span class="title">Todo 2</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="app_inbox.html" class="nav-link ">
                        <i class="icon-envelope"></i>
                        <span class="title">Inbox</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="app_calendar.html" class="nav-link ">
                        <i class="icon-calendar"></i>
                        <span class="title">Calendar</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="app_ticket.html" class="nav-link ">
                        <i class="icon-notebook"></i>
                        <span class="title">Support</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:" class="nav-link nav-toggle">
                <i class="icon-user"></i>
                <span class="title">User</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="page_user_profile_1.html" class="nav-link ">
                        <i class="icon-user"></i>
                        <span class="title">Profile 1</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_user_profile_1_account.html" class="nav-link ">
                        <i class="icon-user-female"></i>
                        <span class="title">Profile 1 Account</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_user_profile_1_help.html" class="nav-link ">
                        <i class="icon-user-following"></i>
                        <span class="title">Profile 1 Help</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_user_profile_2.html" class="nav-link ">
                        <i class="icon-users"></i>
                        <span class="title">Profile 2</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:" class="nav-link nav-toggle">
                        <i class="icon-notebook"></i>
                        <span class="title">Login</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item ">
                            <a href="page_user_login_1.html" class="nav-link " target="_blank"> Login Page 1 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_user_login_2.html" class="nav-link " target="_blank"> Login Page 2 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_user_login_3.html" class="nav-link " target="_blank"> Login Page 3 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_user_login_4.html" class="nav-link " target="_blank"> Login Page 4 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_user_login_5.html" class="nav-link " target="_blank"> Login Page 5 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_user_login_6.html" class="nav-link " target="_blank"> Login Page 6 </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="page_user_lock_1.html" class="nav-link " target="_blank">
                        <i class="icon-lock"></i>
                        <span class="title">Lock Screen 1</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_user_lock_2.html" class="nav-link " target="_blank">
                        <i class="icon-lock-open"></i>
                        <span class="title">Lock Screen 2</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:" class="nav-link nav-toggle">
                <i class="icon-social-dribbble"></i>
                <span class="title">General</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="page_general_about.html" class="nav-link ">
                        <i class="icon-info"></i>
                        <span class="title">About</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_general_contact.html" class="nav-link ">
                        <i class="icon-call-end"></i>
                        <span class="title">Contact</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:" class="nav-link nav-toggle">
                        <i class="icon-notebook"></i>
                        <span class="title">Portfolio</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item ">
                            <a href="page_general_portfolio_1.html" class="nav-link "> Portfolio 1 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_general_portfolio_2.html" class="nav-link "> Portfolio 2 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_general_portfolio_3.html" class="nav-link "> Portfolio 3 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_general_portfolio_4.html" class="nav-link "> Portfolio 4 </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:" class="nav-link nav-toggle">
                        <i class="icon-magnifier"></i>
                        <span class="title">Search</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item ">
                            <a href="page_general_search.html" class="nav-link "> Search 1 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_general_search_2.html" class="nav-link "> Search 2 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_general_search_3.html" class="nav-link "> Search 3 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_general_search_4.html" class="nav-link "> Search 4 </a>
                        </li>
                        <li class="nav-item ">
                            <a href="page_general_search_5.html" class="nav-link "> Search 5 </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="page_general_pricing.html" class="nav-link ">
                        <i class="icon-tag"></i>
                        <span class="title">Pricing</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_general_pricing_2.html" class="nav-link ">
                        <i class="icon-tag"></i>
                        <span class="title">Pricing 2</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_general_faq.html" class="nav-link ">
                        <i class="icon-wrench"></i>
                        <span class="title">FAQ</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_general_blog.html" class="nav-link ">
                        <i class="icon-pencil"></i>
                        <span class="title">Blog</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_general_blog_post.html" class="nav-link ">
                        <i class="icon-note"></i>
                        <span class="title">Blog Post</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_general_invoice.html" class="nav-link ">
                        <i class="icon-envelope"></i>
                        <span class="title">Invoice</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_general_invoice_2.html" class="nav-link ">
                        <i class="icon-envelope"></i>
                        <span class="title">Invoice 2</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  ">
            <a href="javascript:" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">System</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="page_cookie_consent_1.html" class="nav-link ">
                        <span class="title">Cookie Consent 1</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_cookie_consent_2.html" class="nav-link ">
                        <span class="title">Cookie Consent 2</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                        <span class="title">Coming Soon</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_404_1.html" class="nav-link ">
                        <span class="title">404 Page 1</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_404_2.html" class="nav-link " target="_blank">
                        <span class="title">404 Page 2</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_404_3.html" class="nav-link " target="_blank">
                        <span class="title">404 Page 3</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_500_1.html" class="nav-link ">
                        <span class="title">500 Page 1</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_500_2.html" class="nav-link " target="_blank">
                        <span class="title">500 Page 2</span>
                    </a>
                </li>
            </ul>
        </li>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>