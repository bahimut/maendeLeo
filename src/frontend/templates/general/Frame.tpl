<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../src/frontend/templates/general/style.css" />
        <link href="../src/frontend/templates/general/menu/menu.css" rel="stylesheet" type="text/css" />
        <link rel="icon" type="image/png" href="../src/frontend/templates/general/images/fav.png">
        <script src="../src/frontend/templates/general/menu/menu.js" type="text/javascript"></script>
        <title>maendeleo – {{ProjectName}}</title>
        <table width="100%" border=0>
            <!-- Project menu -->
            <tr>
                <td><a href=''><div align=right>
                <img src="../src/frontend/templates/general/images/maendeleo_logo.png" height=20 /><img src="../src/frontend/templates/general/images/fav.png" height=20/></a></div>
                </td>
            </tr>
        </table>
            <!-- Header -->
        <table class='header' align=left border=0 width=100%>
            <tr >
                <td width=10%><img src="../src/frontend/templates/general/images/fav.png" height=100/></td>
                <td style="vertical-align:bottom" width=auto>
                    <h1><a class='one' href=''><img src="../src/frontend/templates/general/images/flags/{{ProjectCountry}}.png" height="30" width="30" />&nbsp;{{ProjectName}}<font size=4 color=#B70000>.project</font> </a></h1>
                </td>
            </tr>
            <tr>
             <td colspan=4>
                    <nav id="ddmenu">
                        <ul>
                            <li>
                                <a class="top-heading" href=''>Dashboard</a>
                                <i class="caret"></i>
                                <div class="dropdown">
                                    <div class="dd-inner">
                                        <ul class="column">
                                            <li><a href="#">Inbox (0)</a></li>
                                            <li><a href="#">New project</a></li>
                                            <li><h3>Select project</h3></li>
                                            {{MenuProjectList}}
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="top-heading">Project</span>
                                <i class="caret"></i>
                                <div class="dropdown">
                                    <div class="dd-inner">
                                        <ul class="column">
                                            <li><h3>Project overview</h3></li>
                                            <li><a href="profile">Profile</a></li>
                                            <li><a href="#">Area of invervention</a></li>
                                            <li><a href="#">Beneficiaries</a></li>
                                            <li><h3>PCM</h3></li>
                                            <li><a href="#">Logic of intervention</a></li>
                                            <li><a href="#">Logical framework</a></li>
                                            <li><a href="#">Partners</a></li>
                                            <li><a href="#">Donors</a></li>
                                            <li><a href="#">General timetable</a></li>
                                            <li><a href="#">Employed staff</a></li>
                                            <li><a href="#">Budget</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="top-heading">Documents</span>
                                <i class="caret"></i>
                                <div class="dropdown">
                                    <div class="dd-inner">
                                        <ul class="column">
                                            <li><a href="#">Document list</a></li>
                                            <li><a href="#">Upload document</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li> 
                            <li class="full-width">
                                <span class="top-heading">Project management</span>
                                <i class="caret"></i>
                                <div class="dropdown">
                                    <div class="dd-inner">
                                        <ul class="column">
                                            <li><h3>Time</h3></li>
                                            <li><a href="#">Dolor sit amet</a></li>
                                            <li><a href="#">Consectetur elit</a></li>
                                            <li><a href="#">Etiam massa</a></li>
                                            <li><a href="#">Suscipit sapien</a></li>
                                            <li><a href="#">Quis turpis</a></li>
                                        </ul>
                                        <ul class="column">
                                            <li><h3>Resources</h3></li>
                                            <li><a href="#">Sed interdum</a></li>
                                            <li><a href="#">Fringilla congue</a></li>
                                            <li><a href="#">Dolor nisl auctor</a></li>
                                            <li><a href="#">Quisque dictum</a></li>
                                            <li><a href="#">Porttitor</a></li>
                                        </ul>
                                        <ul class="column">
                                            <li><h3>People</h3></li>
                                            <li><a href="#">Sed interdum</a></li>
                                            <li><a href="#">Fringilla congue</a></li>
                                            <li><a href="#">Dolor nisl auctor</a></li>
                                            <li><a href="#">Quisque dictum</a></li>
                                            <li><a href="#">Porttitor</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="top-heading">Account</span>
                                <i class="caret"></i>
                                <div class="dropdown right-aligned">
                                    <div class="dd-inner">
                                        <ul class="column">
                                            <li><a href="#">Your projects</a></li>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                        </ul>
                    </nav>
                </td>
             <td width=18%>
             </td>
            </tr>
        </table>
    </head>
    {{body}}
    <footer>
        <table width=100%>
            <tr>
                <td>
                    <nav id='ddmenu'>
                        <ul class='no-sub'>
                            <bottom>
                            </bottom>
                        </ul>
                    </nav>
                </td>
            </tr>
            <tr >
                <td align=right>Powered by <img align='top' src="../src/frontend/templates/general/images/maendeleo_logo.png" height=20 /></td>
            </tr>
        </table>
    </footer>
</html>
