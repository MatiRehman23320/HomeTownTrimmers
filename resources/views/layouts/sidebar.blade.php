<!doctype html>

    <!-- Header Area -->

    <nav id="sidebar">
        <div class="p-4 pt-5">
            <div class="vertical-menu">
                <ul>
                    <li class="nav-item has-submenu">
                        <a class="nav-link text-warning"><i class="far fa-address-card"></i> Post</a>
                        <ul class="submenu show">
                            <li><a class="nav-link d-block"  href="{{route('post')}}"><i class="fas fa-plus"></i>  New Post </a></li><br>
                            <li><a class="nav-link d-block" href="{{route('view_post')}}"> <i class="fas fa-eye"></i> View Posts </a></li>
                        </ul>
                    </li>
                    <li class="d-block nav-item"><a href="{{route('barber_msg_List')}}">Messages</a></li>
                    <li class="d-block nav-item"><a href="#">Appointments</a></li>
                    <li class="d-block nav-item"><a href="#">Link 4</a></li>
                </ul>
            </div>
            <div class="footer mt-5">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved By
                    <i class="icon-heart" aria-hidden="true"></i>
                    <span class="text-warning">HIBAQ Technologies</span>
                </p>
            </div>
        </div>
    </nav>

    @section('sidebar')

	@show




