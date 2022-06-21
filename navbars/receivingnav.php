<div class="card">
    <div class="card-body">
        <h5 class="card-title"></h5>

        <!-- List group With Icons -->
        <ul class="list-group">
            <li class="list-group-item <?php active('receiving.php') ?>"><i class="fas fa-seedling"></i><a href="receiving.php?plantingno=<?php echo $_GET['plantingno'] ?>">
                    Receiving</a></li>

            <li class="list-group-item <?php active('payadvance.php') ?>"><i class="fas fa-tractor"></i>
                <a href="payadvance.php?plantingno=<?php echo $_GET['plantingno'] ?>">
                   Advance Payment
                </a>
            </li>

        </ul><!-- End List group With Icons -->

    </div>
</div>