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
                        <router-link  to="/user"><i class="zmdi zmdi-collection-text"></i><span> User </span> </router-link>
                    
                    </li>
                     <li class="has-submenu">
                        <router-link  to="/zalo"><i class="zmdi zmdi-collection-text"></i><span> Zalo </span> </router-link>
                    
                    </li>

                    <li class="has-submenu">
                  
               

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