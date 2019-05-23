<template>
    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <router-link to="/"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </router-link>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-invert-colors"></i> <span> User Interface </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="#">Buttons</a></li>
                                    <li><a href="#">Cards</a></li>
                                    <li><a href="#">Draggable Cards</a></li>
                                    <li><a href="#">Typography </a></li>
                                    <li><a href="#">Checkboxs-Radios</a></li>
                                    <li><a href="#">Material Design Icons</a></li>
                                    <li><a href="#">Font Awesome</a></li>
                                    <li><a href="#">Themify Icons</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="#">Dripicons</a></li>
                                    <li><a href="#">Modals</a></li>
                                    <li><a href="#">Notification</a></li>
                                    <li><a href="#">Range Slider</a></li>
                                    <li><a href="#">Components</a>
                                    <li><a href="#">Sweet Alert</a>
                                    <li><a href="#">Tree view</a>
                                    <li><a href="#">Widgets</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <router-link  to="/user"><i class="zmdi zmdi-collection-text"></i><span> User </span> </router-link>
                        <ul class="submenu">
                            <li><a href="#">General Elements</a></li>
                            <li><a href="#">Advanced Form</a></li>
                            <li><a href="#">Form Validation</a></li>
                            <li><a href="#">Form Wizard</a></li>
                            <li><a href="#">Form Uploads</a></li>
                            <li><a href="#">Wysiwig Editors</a></li>
                            <li><a href="#">X-editable</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-view-list"></i> <span> Tables </span> </a>
                        <ul class="submenu">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Table</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-editable.html">Editable Table</a></li>
                            <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-chart"></i><span> Charts </span> </a>
                        <ul class="submenu">
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-chartist.html">Chartist Charts</a></li>
                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="chart-other.html">Other Chart</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-item"></i><span> Pages </span> </a>
                        <ul class="submenu">
                            <li><a href="page-starter.html">Starter Page</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="page-404.html">Error 404</a></li>
                            <li><a href="page-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-layers"></i><span>Extra Pages </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="extras-projects.html">Projects</a></li>
                                    <li><a href="extras-tour.html">Tour</a></li>
                                    <li><a href="extras-taskboard.html">Taskboard</a></li>
                                    <li><a href="extras-inbox.html">Mail</a></li>
                                    <li><a href="extras-taskdetail.html">Task Detail</a></li>
                                    <li><a href="extras-maps.html">Maps</a></li>
                                    <li><a href="extras-calendar.html" >Calendar</a></li>
                                    <li><a href="extras-contact.html">Contact list</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-email-template.html">Email template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-comingsoon.html">Coming soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Navigation"
    }
</script>

<style scoped>

</style>