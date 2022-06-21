

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="<?php active('home.php');?> nav-link" href="home.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item ">
            <a class="<?php active('receive.php');active('evaluate.php'); active('addfarmer.php');?> nav-link " data-bs-target="#farmers" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Receiving</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="farmers" class="nav-content collapse  <?php show('evaluate.php'); show('addfarmer.php'); show('managefarmers.php'); ?>" data-bs-parent="#sidebar-nav">
                <li id="nestnav">
                    <a href="../dashboard/receive.php" class="">
                        <i class="bi bi-circle"></i><span>Receiving</span>
                    </a>
                </li>

                      </ul>
        </li><!-- End Components Nav -->


    </ul>

