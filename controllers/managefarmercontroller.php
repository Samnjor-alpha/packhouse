<?php
function listfarmers(): void
{
    global $conn;
    $cnt=1;
    $selectfarmers=mysqli_query($conn,"select * from farmers order by id desc");
    while ($rowp = mysqli_fetch_assoc($selectfarmers)) {
        echo '

           <tr>
                                                    <th scope="row">' . $cnt . '</th>
                                                    <td>' . $rowp['farmer_name'] . '</td>
                                                    <td>+' . $rowp['farmer_tel'] . '</td>
                                                    <td>' . $rowp['farmer_idno'] . '</td>
                                                    <td class="text-monospace">Pending Evaluation</td>
                                                    <td>
         <div class="dropdown">
    <button class="btn btn-outline-success dropdown-toggle" type="button" data-toggle="dropdown">Actions
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      
'.managefarmeractions($rowp['evaluation_status'],$rowp['farmer_idno']).'
  </ul>
</div></td>                                                                       
                                                                                     </tr>
          ';
        $cnt = $cnt + 1;
    }


}
function managefarmeractions($status,$idno): string
{

    if ($status==0){
        return '<li><a class="dropdown-item" href="evaluate.php?idno='.$idno.'">Start Evaluation</a></li>
                <li><a class="dropdown-item" href="?delete='.$idno.'">Delete</a></li>';
    }elseif ($status==1){
        return  '<li><a class="dropdown-item" href="evaluation.php?evaluatioNo='.$idno.'">View Evaluation</a></li>
            <li><a class="dropdown-item" href="managefarmer.php?farmerno='.$idno.'">Manage Farmer</a></li>';
    }elseif ($status==3){
        return  '<li><a class="dropdown-item" href="viewfarmer.php?idno='.$idno.'">View farmer</a></li>';

    }else{
        return  '<li><a class="dropdown-item" href="?delete='.$idno.'">Delete</a></li>
                 ';
    }

}
